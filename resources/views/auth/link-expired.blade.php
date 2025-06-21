<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Link Xác Thực Hết Hạn</title>
    <style>
        body { font-family: sans-serif; background-color: #f8f9fa; display: flex; justify-content: center; align-items: center; height: 100vh; }
        .container { background: #fff; padding: 2rem; border-radius: 8px; text-align: center; }
        .btn { padding: 0.5rem 1rem; background: #1a73e8; color: #fff; text-decoration: none; border-radius: 4px; margin-top: 1rem; display: inline-block; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Link không hợp lệ hoặc đã hết hạn</h2>
        <p>Vui lòng đăng nhập và yêu cầu gửi lại email xác thực.</p>
        <a href="{{ route('login') }}" class="btn">Quay lại đăng nhập</a>
    </div>
</body>
</html>
