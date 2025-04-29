{{-- <h1>Forgot Password Email</h1>
   
You can reset password from bellow link:
<a href="{{ route('reset.password.get', $token) }}">Reset Password</a> --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .email-container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            border: 1px solid #dddddd;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .email-header {
            background-color: #DF4D52;
            color: #ffffff;
            padding: 20px;
            text-align: center;
        }
        .email-body {
            padding: 20px;
            color: #333333;
        }
        .email-body p {
            line-height: 1.6;
            margin: 15px 0;
        }
        .reset-button {
            display: block;
            width: 200px;
            margin: 20px auto;
            padding: 15px;
            background-color: #28a745;
            color: #ffffff !important; /* Force white text */
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
        }
        .reset-button:hover {
            background-color: #218838;
        }
        .email-footer {
            background-color: #f8f9fa;
            padding: 20px;
            text-align: center;
            color: #777777;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="email-header">
            <h1>Password Reset Request</h1>
        </div>
        <div class="email-body">
            <p>Hello,</p>
            {{-- <p>Dear [User],</p> --}}
            <p>We received a request to reset your password. Click the button below to reset your password:</p>
            <a href="{{ route('reset.password.get', $token) }}" class="reset-button">Reset Password</a>
            <p>If you did not request a password reset, please ignore this email or contact support if you have questions.</p>
            <p>Thank you</p>
            {{-- <p>Thank you,<br>The [Company] Team</p> --}}
        </div>
        <div class="email-footer">
            <p>&copy; All rights reserved.</p>
        </div>
    </div>
</body>
</html>