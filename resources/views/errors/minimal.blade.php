<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/liquid_glass.css') }}">

    <style>
        /* Ghi đè một vài style để phù hợp hơn với trang lỗi */
        body {
            padding-top: 0;
            padding-bottom: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            overflow: hidden; /* Ẩn thanh cuộn */
        }
    </style>
</head>
<body class="glow-effect">

    <main class="text-center text-white p-8">
        <div class="mouse-track-gradient bg-white/10 backdrop-blur-xl rounded-3xl p-8 md:p-12 lg:p-16 custom-shadow border border-white/20">
            
            <div class="flex flex-col md:flex-row items-center justify-center">
                 <div class="px-6 text-7xl md:text-9xl font-black text-white drop-shadow-lg md:border-r md:border-white/20">
                    @yield('code')
                </div>

                <div class="md:ml-6 mt-4 md:mt-0 text-xl md:text-2xl font-bold uppercase tracking-wider text-white/90">
                    @yield('message')
                </div>
            </div>

            <div class="mt-8">
                <a href="{{ url('/') }}"
                   class="px-6 py-3 bg-white/20 hover:bg-white/30 text-white font-semibold rounded-full transition-colors duration-300 border border-white/30">
                    Quay Về Trang Chủ
                </a>
            </div>
        </div>
    </main>

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