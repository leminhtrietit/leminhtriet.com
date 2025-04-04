<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Mã OTP thay đổi email</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            padding: 20px;
        }
        .container {
            background-color: #ffffff;
            border-radius: 4px;
            padding: 20px;
            max-width: 600px;
            margin: auto;
            border: 1px solid #dddddd;
        }
        .otp {
            font-size: 24px;
            font-weight: bold;
            color: #1a73e8;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Mã OTP thay đổi email đăng nhập</h2>
        <p>Chào bạn,</p>
        <p>Mã OTP để thay đổi email của bạn là:</p>
        <div class="otp">{{ $otp }}</div>
        <p>Mã này có hiệu lực trong 10 phút. Nếu bạn không thực hiện yêu cầu thay đổi, hãy bỏ qua email này.</p>
        <p>Trân trọng,</p>
        <p>MinhTrietEras</p>
    </div>
</body>
</html>
