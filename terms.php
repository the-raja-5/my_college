<?php require_once __DIR__ . "/include/db.php"; session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Terms & Conditions</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #667eea, #764ba2);
            padding: 40px 20px;
        }

        .container {
            width: 100%;
            max-width: 900px;
            margin: auto;
            background: white;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 20px 55px rgba(0, 0, 0, 0.25);
        }

        .header {
            padding: 40px 35px;
            text-align: center;
            color: white;
            background: linear-gradient(135deg, #667eea, #764ba2);
        }

        .header-icon {
            width: 75px;
            height: 75px;
            margin: 0 auto 15px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            background: rgba(255, 255, 255, 0.2);
            font-size: 34px;
        }

        .header h1 {
            font-size: 32px;
            margin-bottom: 8px;
        }

        .header p {
            font-size: 14px;
            opacity: 0.9;
        }

        .content {
            padding: 40px;
        }

        .intro {
            color: #666;
            font-size: 15px;
            line-height: 1.7;
            margin-bottom: 30px;
        }

        .notice {
            padding: 18px;
            margin-bottom: 30px;
            border-radius: 12px;
            background: #f1f3ff;
            color: #555;
            font-size: 14px;
            line-height: 1.6;
        }

        .terms-box {
            margin-bottom: 28px;
            padding: 22px;
            border-radius: 15px;
            background: #f8f9ff;
            border-left: 4px solid #667eea;
        }

        .terms-box h2 {
            color: #333;
            font-size: 19px;
            margin-bottom: 10px;
        }

        .terms-box p {
            color: #666;
            font-size: 14px;
            line-height: 1.7;
        }

        .terms-box ul {
            padding-left: 22px;
            margin-top: 10px;
            color: #666;
        }

        .terms-box li {
            margin-bottom: 8px;
            font-size: 14px;
            line-height: 1.5;
        }

        .footer {
            padding: 25px 40px;
            text-align: center;
            border-top: 1px solid #eee;
            color: #888;
            font-size: 13px;
        }

        .back-btn {
            display: inline-block;
            margin-top: 12px;
            padding: 12px 25px;
            border-radius: 10px;
            color: white;
            background: linear-gradient(135deg, #667eea, #764ba2);
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }

        .back-btn:hover {
            transform: translateY(-2px);
        }

        @media (max-width: 600px) {

            body {
                padding: 20px 12px;
            }

            .header {
                padding: 30px 20px;
            }

            .header h1 {
                font-size: 26px;
            }

            .content {
                padding: 25px 20px;
            }

            .terms-box {
                padding: 18px;
            }

            .footer {
                padding: 20px;
            }
        }
    </style>
</head>

<body>

    <div class="container">

        <!-- HEADER -->

        <div class="header">

            <div class="header-icon">
                📜
            </div>

            <h1>Terms & Conditions</h1>

            <p>Please read these terms carefully before using our website.</p>

        </div>


        <!-- CONTENT -->

        <div class="content">

            <p class="intro">
                Welcome to our website. By creating an account or using
                our services, you agree to follow the Terms & Conditions
                described below.
            </p>


            <div class="notice">

                ⚠️ <strong>Important:</strong><br>

                Please read these Terms & Conditions carefully.
                If you do not agree with any part of these terms,
                please do not use our services.

            </div>


            <!-- 1 -->

            <div class="terms-box">

                <h2>1. Acceptance of Terms</h2>

                <p>
                    By accessing or using this website, you confirm that
                    you have read, understood and agreed to these
                    Terms & Conditions.
                </p>

            </div>


            <!-- 2 -->

            <div class="terms-box">

                <h2>2. Account Registration</h2>

                <p>
                    To use certain features, you may need to create
                    an account. You agree to provide accurate and
                    complete information during registration.
                </p>

                <ul>
                    <li>Provide correct personal information.</li>
                    <li>Keep your account information updated.</li>
                    <li>Do not create an account using false information.</li>
                </ul>

            </div>


            <!-- 3 -->

            <div class="terms-box">

                <h2>3. Account Security</h2>

                <p>
                    You are responsible for keeping your login
                    credentials secure. Do not share your password
                    or OTP with anyone.
                </p>

            </div>


            <!-- 4 -->

            <div class="terms-box">

                <h2>4. Acceptable Use</h2>

                <p>
                    You agree to use the website only for lawful
                    purposes and in a responsible manner.
                </p>

                <ul>
                    <li>Do not misuse the website.</li>
                    <li>Do not attempt unauthorized access.</li>
                    <li>Do not interfere with website operations.</li>
                    <li>Do not use the service for illegal activities.</li>
                </ul>

            </div>


            <!-- 5 -->

            <div class="terms-box">

                <h2>5. User Responsibility</h2>

                <p>
                    You are responsible for the activity performed
                    through your account. If you notice suspicious
                    activity, you should take appropriate steps to
                    secure your account.
                </p>

            </div>


            <!-- 6 -->

            <div class="terms-box">

                <h2>6. Intellectual Property</h2>

                <p>
                    The website design, content, graphics, logos and
                    other materials may be protected by applicable
                    intellectual property laws. You may not copy,
                    reproduce or redistribute them without permission.
                </p>

            </div>


            <!-- 7 -->

            <div class="terms-box">

                <h2>7. Privacy</h2>

                <p>
                    Your use of the website is also subject to our
                    Privacy Policy. Please read the Privacy Policy
                    to understand how information may be handled.
                </p>

            </div>


            <!-- 8 -->

            <div class="terms-box">

                <h2>8. Service Availability</h2>

                <p>
                    We may update, modify, suspend or discontinue
                    certain features of the website when necessary.
                    We will try to maintain the service as reliably
                    as possible.
                </p>

            </div>


            <!-- 9 -->

            <div class="terms-box">

                <h2>9. Account Termination</h2>

                <p>
                    An account may be restricted or terminated if
                    these Terms & Conditions are violated or if the
                    account is used in an unauthorized or harmful way.
                </p>

            </div>


            <!-- 10 -->

            <div class="terms-box">

                <h2>10. Changes to Terms</h2>

                <p>
                    We may update these Terms & Conditions from time
                    to time. Updated terms will be displayed on this
                    page.
                </p>

            </div>


            <!-- 11 -->

            <div class="terms-box">

                <h2>11. Contact Us</h2>

                <p>
                    If you have any questions about these Terms &
                    Conditions, please contact us through the contact
                    information provided on our website.
                </p>

            </div>

        </div>


        <!-- FOOTER -->

        <div class="footer">

            <p>
                Last Updated: August 2026
            </p>

            <a href="register.php" class="back-btn">
                ← Back to Sign Up
            </a>

        </div>

    </div>

</body>
</html>