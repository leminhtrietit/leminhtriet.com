<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Email Xác Thực Thành Công</title>
    <style>
        body {
            font-family: sans-serif;
            background-color: #f9fafb;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .container {
            text-align: center;
            background: #fff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .countdown {
            font-weight: bold;
            font-size: 1.5rem;
            color: #1a73e8;
        }
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let countdown = 5;
            const countdownEl = document.getElementById('countdown');
            function updateCountdown() {
                countdownEl.innerText = countdown;
                if (countdown > 0) {
                    countdown--;
                    setTimeout(updateCountdown, 1000);
                } else {
                    window.location.href = "{{ route('login') }}";
                }
            }
            updateCountdown();
        });
    </script>
</head>
<body>
    <div class="container">
        <h2>Email của bạn đã được xác thực thành công!</h2>
        <p>Hệ thống sẽ chuyển hướng đến trang đăng nhập sau <span id="countdown" class="countdown">5</span> giây.</p>
    </div>
</body>
</html>
