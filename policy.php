<?php require_once __DIR__ . "/include/db.php"; session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Privacy Policy</title>

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
            box-shadow: 0 20px 55px rgba(0,0,0,0.25);
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
            margin: auto;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            background: rgba(255,255,255,0.2);
            font-size: 34px;
            margin-bottom: 15px;
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
            line-height: 1.7;
            font-size: 15px;
            margin-bottom: 30px;
        }

        .policy-box {
            margin-bottom: 28px;
            padding: 22px;
            border-radius: 15px;
            background: #f8f9ff;
            border-left: 4px solid #667eea;
        }

        .policy-box h2 {
            color: #333;
            font-size: 19px;
            margin-bottom: 10px;
        }

        .policy-box p {
            color: #666;
            font-size: 14px;
            line-height: 1.7;
        }

        .policy-box ul {
            margin-top: 10px;
            padding-left: 22px;
            color: #666;
        }

        .policy-box li {
            margin-bottom: 7px;
            font-size: 14px;
            line-height: 1.5;
        }

        .highlight {
            padding: 18px;
            margin-bottom: 30px;
            border-radius: 12px;
            background: #f1f3ff;
            color: #555;
            font-size: 14px;
            line-height: 1.6;
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

            .policy-box {
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
                🔒
            </div>

            <h1>Privacy Policy</h1>

            <p>Your privacy and security are important to us.</p>

        </div>


        <!-- CONTENT -->
        <div class="content">

            <p class="intro">
                Welcome to our website. This Privacy Policy explains how
                we collect, use, protect and handle your information when
                you use our services.
            </p>


            <div class="highlight">
                🔐 <strong>Your Privacy Matters</strong><br>
                We take reasonable steps to protect your personal
                information and keep your account information secure.
            </div>


            <!-- 1 -->
            <div class="policy-box">

                <h2>1. Information We Collect</h2>

                <p>
                    When you create an account, we may collect information
                    such as:
                </p>

                <ul>
                    <li>Full Name</li>
                    <li>Email Address</li>
                    <li>Mobile Number</li>
                    <li>Account login information</li>
                </ul>

            </div>


            <!-- 2 -->
            <div class="policy-box">

                <h2>2. How We Use Your Information</h2>

                <p>
                    The information we collect may be used to:
                </p>

                <ul>
                    <li>Create and manage your account.</li>
                    <li>Provide our services to you.</li>
                    <li>Help you recover your account.</li>
                    <li>Improve our website and services.</li>
                    <li>Contact you regarding important account updates.</li>
                </ul>

            </div>


            <!-- 3 -->
            <div class="policy-box">

                <h2>3. Password Security</h2>

                <p>
                    Your password should be kept confidential. We recommend
                    using a strong and unique password and never sharing it
                    with anyone.
                </p>

            </div>


            <!-- 4 -->
            <div class="policy-box">

                <h2>4. OTP & Account Verification</h2>

                <p>
                    OTP may be used to verify your identity during account
                    registration, login or password recovery. OTP should
                    never be shared with another person.
                </p>

            </div>


            <!-- 5 -->
            <div class="policy-box">

                <h2>5. Information Protection</h2>

                <p>
                    We use reasonable security measures to protect your
                    information from unauthorized access, modification
                    or disclosure.
                </p>

            </div>


            <!-- 6 -->
            <div class="policy-box">

                <h2>6. Cookies</h2>

                <p>
                    Our website may use cookies or similar technologies
                    to improve your experience and remember certain
                    preferences.
                </p>

            </div>


            <!-- 7 -->
            <div class="policy-box">

                <h2>7. Third-Party Services</h2>

                <p>
                    Some features may use third-party services. Those
                    services may have their own privacy policies and
                    terms of use.
                </p>

            </div>


            <!-- 8 -->
            <div class="policy-box">

                <h2>8. Your Rights</h2>

                <p>
                    Depending on the applicable laws, you may have rights
                    regarding your personal information, including the
                    ability to request correction or deletion of certain
                    information.
                </p>

            </div>


            <!-- 9 -->
            <div class="policy-box">

                <h2>9. Changes to This Policy</h2>

                <p>
                    We may update this Privacy Policy from time to time.
                    Any changes will be reflected on this page.
                </p>

            </div>


            <!-- 10 -->
            <div class="policy-box">

                <h2>10. Contact Us</h2>

                <p>
                    If you have questions about this Privacy Policy,
                    please contact us through the contact information
                    provided on our website.
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