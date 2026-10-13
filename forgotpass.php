<?php
session_start();
require_once __DIR__ . '/include/db.php';
require_once __DIR__ . '/include/mail_config.php';
require_once __DIR__ . '/include/smtp_mail.php';

$step = 1;
$msg = '';
$success = '';

if (isset($_POST['send_otp'])) {
    $email = trim($_POST['email'] ?? '');

    $stmt = mysqli_prepare($conn, 'SELECT id FROM users WHERE email=? LIMIT 1');
    mysqli_stmt_bind_param($stmt, 's', $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $user = mysqli_fetch_assoc($result);

    if (!$user) {
        $msg = 'Is email se account nahi mila.';
    } else {
        $otp = (string)random_int(100000, 999999);
        $hash = password_hash($otp, PASSWORD_DEFAULT);
        $expires = date('Y-m-d H:i:s', time() + 600);

        // Remove older OTPs for this user.
        $delete = mysqli_prepare($conn, 'DELETE FROM password_reset WHERE user_id=?');
        mysqli_stmt_bind_param($delete, 'i', $user['id']);
        mysqli_stmt_execute($delete);

        $insert = mysqli_prepare($conn, 'INSERT INTO password_reset(user_id, otp_hash, expires_at) VALUES(?,?,?)');
        mysqli_stmt_bind_param($insert, 'iss', $user['id'], $hash, $expires);

        if (!mysqli_stmt_execute($insert)) {
            $msg = 'OTP save nahi ho saka. Please try again.';
        } else {
            try {
                send_otp_email($email, $otp);
                $_SESSION['reset_user'] = (int)$user['id'];
                unset($_SESSION['otp_ok']);
                $step = 2;
                $success = 'OTP aapke registered email par send kar diya gaya hai.';
            } catch (Throwable $e) {
                // Remove the OTP if email sending failed, so it cannot be used unexpectedly.
                $delete = mysqli_prepare($conn, 'DELETE FROM password_reset WHERE user_id=?');
                mysqli_stmt_bind_param($delete, 'i', $user['id']);
                mysqli_stmt_execute($delete);
                $msg = 'Email send nahi ho saka. SMTP settings check karein.';
                // Keep technical details out of the public page.
                error_log('Mewar OTP mail error: ' . $e->getMessage());
            }
        }
    }
}

if (isset($_POST['verify_otp'])) {
    $otp = trim($_POST['otp'] ?? '');
    $uid = (int)($_SESSION['reset_user'] ?? 0);

    $stmt = mysqli_prepare($conn, 'SELECT id, otp_hash, expires_at FROM password_reset WHERE user_id=? ORDER BY id DESC LIMIT 1');
    mysqli_stmt_bind_param($stmt, 'i', $uid);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);

    if ($row && strtotime($row['expires_at']) >= time() && password_verify($otp, $row['otp_hash'])) {
        $step = 3;
        $_SESSION['otp_ok'] = true;
        $success = 'OTP verified successfully.';
    } else {
        $step = 2;
        $msg = 'OTP galat ya expire ho gaya.';
    }
}

if (isset($_POST['reset_password'])) {
    $uid = (int)($_SESSION['reset_user'] ?? 0);
    $password = $_POST['password'] ?? '';
    $confirm = $_POST['confirm_password'] ?? '';

    if (!(($_SESSION['otp_ok'] ?? false))) {
        $msg = 'Pehle OTP verify karein.';
        $step = 1;
    } elseif (strlen($password) < 6) {
        $msg = 'Password kam se kam 6 characters ka hona chahiye.';
        $step = 3;
    } elseif ($password !== $confirm) {
        $msg = 'Passwords match nahi kar rahe.';
        $step = 3;
    } else {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $stmt = mysqli_prepare($conn, 'UPDATE users SET password=? WHERE id=?');
        mysqli_stmt_bind_param($stmt, 'si', $hash, $uid);

        if (mysqli_stmt_execute($stmt)) {
            $delete = mysqli_prepare($conn, 'DELETE FROM password_reset WHERE user_id=?');
            mysqli_stmt_bind_param($delete, 'i', $uid);
            mysqli_stmt_execute($delete);
            unset($_SESSION['reset_user'], $_SESSION['otp_ok']);
            $step = 4;
            $success = 'Password successfully update ho gaya.';
        } else {
            $msg = 'Password update nahi ho saka.';
            $step = 3;
        }
    }
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Forgot Password - Mewar Institute of Management</title>
<style>
body{font-family:Arial,sans-serif;background:linear-gradient(135deg,#667eea,#764ba2);min-height:100vh;display:flex;align-items:center;justify-content:center;padding:20px}.box{max-width:430px;width:100%;background:#fff;padding:35px;border-radius:22px;box-shadow:0 20px 50px #0004}.icon{text-align:center;font-size:42px}.msg{background:#ffecec;color:#a33;padding:12px;border-radius:10px;margin:12px 0;text-align:center}.success{background:#eaf8ed;color:#19743a;padding:12px;border-radius:10px;margin:12px 0;text-align:center}input{width:100%;box-sizing:border-box;padding:14px;margin:8px 0 18px;border:1px solid #ddd;border-radius:12px}button{width:100%;padding:14px;border:0;border-radius:12px;color:#fff;background:linear-gradient(135deg,#667eea,#764ba2);font-weight:bold;font-size:16px;cursor:pointer}.back{text-align:center;margin-top:18px}.back a{color:#667eea;text-decoration:none;font-weight:bold}.hint{font-size:13px;color:#777;line-height:1.5}
</style>
</head>
<body>
<div class="box">
<div class="icon">🔐</div>
<?php if ($msg): ?><div class="msg"><?=htmlspecialchars($msg)?></div><?php endif; ?>
<?php if ($success): ?><div class="success"><?=htmlspecialchars($success)?></div><?php endif; ?>

<?php if ($step === 1): ?>
<h1>Forgot Password?</h1>
<p>Enter your registered email address.</p>
<form method="post">
<input type="email" name="email" required placeholder="Enter your email">
<button name="send_otp">Send OTP</button>
</form>

<?php elseif ($step === 2): ?>
<h1>Verify OTP</h1>
<p>6-digit OTP aapke registered email par bheja gaya hai.</p>
<form method="post">
<input type="text" name="otp" inputmode="numeric" maxlength="6" pattern="[0-9]{6}" required placeholder="Enter 6-digit OTP">
<button name="verify_otp">Verify OTP</button>
</form>

<?php elseif ($step === 3): ?>
<h1>New Password</h1>
<form method="post">
<input type="password" name="password" minlength="6" required placeholder="New password">
<input type="password" name="confirm_password" minlength="6" required placeholder="Confirm password">
<button name="reset_password">Reset Password</button>
</form>

<?php else: ?>
<h1 style="color:green">Password Updated</h1>
<p style="text-align:center">Ab aap new password se login kar sakte hain.</p>
<div class="back"><a href="login.php">Go to Login</a></div>
<?php endif; ?>

<div class="back"><a href="login.php">← Back to Login</a></div>
</div>
</body>
</html>
