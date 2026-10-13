<?php
function smtp_read($socket) {
    $data = '';
    while (($line = fgets($socket, 515)) !== false) {
        $data .= $line;
        if (isset($line[3]) && $line[3] === ' ') break;
    }
    return $data;
}

function smtp_expect($socket, $codes) {
    $response = smtp_read($socket);
    $code = (int)substr($response, 0, 3);
    if (!in_array($code, (array)$codes, true)) {
        throw new Exception('SMTP error: ' . trim($response));
    }
    return $response;
}

function smtp_command($socket, $command, $codes) {
    fwrite($socket, $command . "\r\n");
    return smtp_expect($socket, $codes);
}

function send_otp_email($to, $otp) {
    if (SMTP_USERNAME === 'YOUR_GMAIL@gmail.com' || SMTP_PASSWORD === 'YOUR_16_CHARACTER_APP_PASSWORD') {
        throw new Exception('SMTP settings are not configured. Open include/mail_config.php and enter your Gmail + App Password.');
    }

    $context = stream_context_create([
        'ssl' => [
            'verify_peer' => true,
            'verify_peer_name' => true,
            'allow_self_signed' => false
        ]
    ]);

    $socket = stream_socket_client(
        'tcp://' . SMTP_HOST . ':' . SMTP_PORT,
        $errno,
        $errstr,
        30,
        STREAM_CLIENT_CONNECT,
        $context
    );

    if (!$socket) {
        throw new Exception('Could not connect to SMTP server: ' . $errstr . ' (' . $errno . ')');
    }

    stream_set_timeout($socket, 30);

    try {
        smtp_expect($socket, 220);
        smtp_command($socket, 'EHLO localhost', 250);

        fwrite($socket, "STARTTLS\r\n");
        smtp_expect($socket, 220);
        if (!stream_socket_enable_crypto($socket, true, STREAM_CRYPTO_METHOD_TLS_CLIENT)) {
            throw new Exception('Could not enable TLS encryption.');
        }

        smtp_command($socket, 'EHLO localhost', 250);
        smtp_command($socket, 'AUTH LOGIN', 334);
        smtp_command($socket, base64_encode(SMTP_USERNAME), 334);
        smtp_command($socket, base64_encode(SMTP_PASSWORD), 235);
        smtp_command($socket, 'MAIL FROM:<' . SMTP_FROM_EMAIL . '>', 250);
        smtp_command($socket, 'RCPT TO:<' . $to . '>', [250, 251]);
        smtp_command($socket, 'DATA', 354);

        $subject = 'Mewar Institute of Management - Password Reset OTP';
        $safeTo = str_replace(["\r", "\n"], '', $to);
        $safeSubject = str_replace(["\r", "\n"], '', $subject);
        $message = "From: " . SMTP_FROM_NAME . " <" . SMTP_FROM_EMAIL . ">\r\n";
        $message .= "To: <" . $safeTo . ">\r\n";
        $message .= "Subject: " . $safeSubject . "\r\n";
        $message .= "MIME-Version: 1.0\r\n";
        $message .= "Content-Type: text/html; charset=UTF-8\r\n\r\n";
        $message .= '<!doctype html><html><body style="font-family:Arial,sans-serif">';
        $message .= '<h2>Mewar Institute of Management</h2>';
        $message .= '<p>Your password reset OTP is:</p>';
        $message .= '<p style="font-size:28px;font-weight:bold;letter-spacing:6px">' . htmlspecialchars($otp, ENT_QUOTES, 'UTF-8') . '</p>';
        $message .= '<p>This OTP is valid for 10 minutes.</p>';
        $message .= '<p>If you did not request a password reset, you can ignore this email.</p>';
        $message .= '</body></html>';
        $message = preg_replace('/\r?\n\./', "\r\n..", $message);
        fwrite($socket, $message . "\r\n.\r\n");
        smtp_expect($socket, 250);
        fwrite($socket, "QUIT\r\n");
        fclose($socket);
        return true;
    } catch (Throwable $e) {
        fclose($socket);
        throw $e;
    }
}
