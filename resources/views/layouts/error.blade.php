<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Có lỗi xảy ra')</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/liquid_glass.css') }}">

    <style>
        body {
            padding-top: 0;
            padding-bottom: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            overflow: hidden;
        }
    </style>
</head>
<body class="glow-effect">

    <main class="text-center text-white p-8">
        @yield('content')
    </main>

    {{-- Chúng ta chỉ cần hiệu ứng hào quang theo chuột cho trang lỗi --}}
    <script>
        document.body.addEventListener('mousemove', (e) => {
            const x = e.clientX;
            const y = e.clientY;
            document.body.style.setProperty('--x', `${x}px`);
            document.body.style.setProperty('--y', `${y}px`);
        });
    </script>
</body>
</html>