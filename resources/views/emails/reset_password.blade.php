<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ $subject ?? 'Thông báo từ ' . config('app.name') }}</title>
    <style>
        body {
            font-family: 'Helvetica', 'Arial', sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background: #ffffff;
            border: 1px solid #dddddd;
        }
        .header {
            background-color: #007BFF;
            padding: 20px;
            text-align: center;
        }
        .header img {
            max-width: 120px;
        }
        .content {
            padding: 20px;
            font-size: 16px;
            line-height: 1.5;
            color: #333333;
        }
        .attachment {
            margin-top: 20px;
            border-top: 1px solid #dddddd;
            padding-top: 10px;
            font-size: 14px;
        }
        .footer {
            background-color: #f1f1f1;
            padding: 10px;
            text-align: center;
            font-size: 12px;
            color: #777777;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header với logo -->
        <div class="header">
        <img src="cid:{{ $logoCid }}" alt="Logo">
        </div>
        <!-- Nội dung email -->
        <div class="content">
            {!! $content !!}
            
            @if(isset($attachment) && isset($attachment_url))
                <div class="attachment">
                    <p>Logo nhận diện:</p>
                    <p><a href="{{ $attachment_url }}" target="_blank">{{ $attachment }}</a></p>
                </div>
            @endif
        </div>
        <!-- Footer -->
        <div class="footer">
            &copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
        </div>
    </div>
</body>
</html>
