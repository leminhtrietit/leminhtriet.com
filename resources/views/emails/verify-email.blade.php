<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>{{ $subject ?? 'Thư mời tham gia nhóm' }}</title>
    <style>
        /* Reset CSS cơ bản */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Roboto, Arial, sans-serif;
            background-color: #f5f5f5;
            color: #202124;
            margin: 0;
            padding: 0;
        }
        .email-container {
            max-width: 600px;
            margin: 40px auto;
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            border: 1px solid #ddd;
        }
        /* Header */
        .header {
            background-color: #f8f9fa;
            text-align: center;
            padding: 16px;
        }
        .header img {
            max-height: 48px;
        }
        /* Body */
        .body-content {
            padding: 24px;
        }
        .title {
            font-size: 18px;
            font-weight: 500;
            color: #1a73e8;
            margin-bottom: 16px;
        }
        .subtitle {
            color: #3c4043;
            font-size: 14px;
            margin-bottom: 24px;
        }
        .message {
            margin-bottom: 24px;
            line-height: 1.6;
        }
        .message strong {
            color: #202124;
        }
        /* Button */
        .btn {
            display: inline-block;        /* Giúp nút gọn và cho phép center */
            background-color: #25368b;    /* Màu xanh giống logo (bạn có thể thay bằng mã màu khác) */
            color: #ffffff;               /* Chữ màu trắng */
            padding: 12px 24px;
            border-radius: 4px;
            text-decoration: none;
            font-weight: 500;
            margin: 0 auto;               /* Nếu muốn margin tự động, kết hợp với parent text-align: center */
        }
        .btn:hover {
            background-color: #1669c1;    /* Màu hover (tối hơn chút) */
        }
        /* Footer */
        .footer {
            background-color: #f8f9fa;
            padding: 16px;
            text-align: center;
            font-size: 12px;
            color: #5f6368;
        }
        .footer a {
            color: #5f6368;
            text-decoration: none;
        }
        .footer a:hover {
            text-decoration: underline;
        }
        .footer img {
            width: 100px;
            margin-top: 16px;
        }
        /* Responsive */
        @media (max-width: 600px) {
            .body-content {
                padding: 16px;
            }
        }
    </style>
</head>
<body>
    <div class="email-container">
        <!-- Header -->
        <div class="header">
            <!-- Logo Google -->
            <img src="{{ $logoUrl ?? 'https://www.leminhtriet.com/logo' }}" alt="Logo">
        </div>

        <!-- Body -->
        <div class="body-content">
            <h2 class="title">
                {{ $headerTitle }}
            </h2>
            <p class="subtitle">
                {!! $subTitle !!}
            </p>

            <div class="message">
                {!! $messageBody !!}

            </div>
            <div style="text-align: center; margin: 24px 0;">
                <a href="{{ $actionUrl ?? '#' }}" class="btn">
                    {{ $actionLabel ?? 'Đăng nhập' }}
                </a>
            </div>
        </div>

        <!-- Footer -->
        <div class="footer">
        {!! $footerText !!}
        <!-- Logo if needed -->
            <!-- <img src="..." alt="Footer Logo"> -->
        </div>
    </div>
</body>
</html>
