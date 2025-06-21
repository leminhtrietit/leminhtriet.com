<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'MinhTrietEras')</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" href="{{ asset('assets/images/logo_tron.png') }}" type="image/x-icon" />

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Liên kết đến file CSS tùy chỉnh -->
    <link rel="stylesheet" href="assets/css/liquid_glass.css">

</head>
<body class="bg-gray-100 text-gray-800">

    <!-- ======================= 1. NAVBAR SECTION (ADVANCED GLASS STYLE) ======================= -->
    <header class="custom-shadow bg-white/25 backdrop-blur-xl fixed top-4 left-1/2 -translate-x-1/2 w-11/12 max-w-6xl z-50 rounded-3xl border border-white/30 transition-all duration-300 py-5">
        <div class="container mx-auto px-6 flex justify-between items-center">
            <a href="{{ route('login') }}" class="text-2xl font-bold text-gray-900">
                <img src="{{ asset('assets/images/logo.png') }}" alt="MinhTrietEras" class="h-10 w-auto">
            </a>
            <nav class="hidden md:flex items-center space-x-2">
                <a href="{{ route('home') }}" class="mouse-track-gradient group relative transition-all duration-300 hover:-translate-y-1">
                    <div class="glow-effect absolute -inset-0.5 rounded-xl blur-sm opacity-0 group-hover:opacity-75 transition duration-300"></div>
                    <div class="relative px-4 py-2 bg-transparent rounded-xl border border-transparent group-hover:bg-white/40 group-hover:border-white/40 transition-all duration-300">
                        <span class="font-medium text-gray-800 group-hover:text-gray-900">Home</span>
                    </div>
                </a>
                <a href="{{ route('posts.index') }}" class="mouse-track-gradient group relative transition-all duration-300 hover:-translate-y-1">
                    <div class="glow-effect absolute -inset-0.5 rounded-xl blur-sm opacity-0 group-hover:opacity-75 transition duration-300"></div>
                    <div class="relative px-4 py-2 bg-transparent rounded-xl border border-transparent group-hover:bg-white/40 group-hover:border-white/40 transition-all duration-300">
                        <span class="font-medium text-gray-800 group-hover:text-gray-900">Tutorials</span>
                    </div>
                </a>
                <a href="{{ route('tools.index') }}" class="mouse-track-gradient group relative transition-all duration-300 hover:-translate-y-1">
                    <div class="glow-effect absolute -inset-0.5 rounded-xl blur-sm opacity-0 group-hover:opacity-75 transition duration-300"></div>
                    <div class="relative px-4 py-2 bg-transparent rounded-xl border border-transparent group-hover:bg-white/40 group-hover:border-white/40 transition-all duration-300">
                        <span class="font-medium text-gray-800 group-hover:text-gray-900">Tools</span>
                    </div>
                </a>
                <a href="{{ route('portfolio') }}" class="mouse-track-gradient group relative transition-all duration-300 hover:-translate-y-1">
                    <div class="glow-effect absolute -inset-0.5 rounded-xl blur-sm opacity-0 group-hover:opacity-75 transition duration-300"></div>
                    <div class="relative px-4 py-2 bg-transparent rounded-xl border border-transparent group-hover:bg-white/40 group-hover:border-white/40 transition-all duration-300">
                        <span class="font-medium text-gray-800 group-hover:text-gray-900">Portfolio</span>
                    </div>
                </a>
                <a href="{{ route('resource') }}" class="mouse-track-gradient group relative transition-all duration-300 hover:-translate-y-1">
                    <div class="glow-effect absolute -inset-0.5 rounded-xl blur-sm opacity-0 group-hover:opacity-75 transition duration-300"></div>
                    <div class="relative px-4 py-2 bg-transparent rounded-xl border border-transparent group-hover:bg-white/40 group-hover:border-white/40 transition-all duration-300">
                        <span class="font-medium text-gray-800 group-hover:text-gray-900">Download</span>
                    </div>
                </a>

                <!-- Google Calendar Appointment Scheduling begin -->
<link href="https://calendar.google.com/calendar/scheduling-button-script.css" rel="stylesheet">
<script src="https://calendar.google.com/calendar/scheduling-button-script.js" async></script>
<script>
(function() {
  var target = document.currentScript;
  window.addEventListener('load', function() {
    calendar.schedulingButton.load({
      url: 'https://calendar.google.com/calendar/appointments/schedules/AcZssZ1IBcQOunErCs-s-ZDkuhAiPxgmOe-_M4WR6PvK1XxnJ7pvAj53AsDTkVVpDTbhoxqcTAYVzo6N?gv=true',
      color: '#070954',
      label: 'Booking',
      target,
    });
  });
})();
</script>
<!-- end Google Calendar Appointment Scheduling -->
            </nav>
            <button class="md:hidden text-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </div>
    </header>

    <!-- ======================= 2. CONTENT SECTION (LIQUID GLASS STYLE) ======================= -->
    <main class="w-full">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <!-- ** CẬP NHẬT: THAY THẾ NỘI DUNG BẰNG DASHBOARD WIDGETS ** -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                
                <!-- Cột Trái: Thời tiết & Giá vàng -->
                <div class="lg:col-span-1 flex flex-col gap-8">
                    <!-- Widget Thời tiết -->
                    <div id="weather-widget" class="bg-white/40 backdrop-blur-lg p-6 rounded-2xl border border-white/30 shadow-lg flex flex-col items-center text-center">
                        <h3 class="font-bold text-gray-900">Thời tiết</h3>
                        <p id="weather-location" class="text-sm text-gray-600 mb-4">Đang xác định vị trí...</p>
                        <div id="weather-icon" class="w-24 h-24 text-gray-400 flex items-center justify-center">...</div>
                        <p id="weather-temp" class="text-5xl font-bold text-gray-900 mt-4">--°C</p>
                        <p id="weather-desc" class="text-gray-700 capitalize">...</p>
                    </div>

                    <!-- Widget Giá Vàng -->
                    <div class="bg-white/50 backdrop-blur-md p-6 rounded-2xl border border-white/30 shadow-lg">
                        <h3 class="font-bold text-gray-900 mb-4 text-center">Giá Vàng Hôm Nay</h3>
                        <div id="gold-price-widget" class="space-y-3">
                           <p class="text-xs text-center text-gray-500">Đang tải dữ liệu...</p>
                        </div>
                    </div>
                </div>

                <!-- Cột Phải: Widget Tin tức -->
                <div class="lg:col-span-2 bg-white/50 backdrop-blur-md p-6 rounded-2xl border border-white/30 shadow-lg">
                     <h3 class="font-bold text-gray-900 mb-4 text-center lg:text-left">Tin Tức Công Nghệ & AI</h3>
                     <div id="news-widget" class="space-y-4">
                        <p class="text-xs text-center text-gray-500">Đang tải tin tức...</p>
                     </div>
                </div>
            </div>
        </div>
    </main>

    <!-- ======================= 3. FOOTER SECTION (LIQUID GLASS STYLE) ======================= -->
   <footer id="floating-footer" class="custom-shadow bg-white/25 backdrop-blur-xl text-gray-800 fixed bottom-4 left-1/2 -translate-x-1/2 w-11/12 max-w-6xl z-50 rounded-3xl transition-all duration-500 border border-white/30 opacity-0 invisible">
        <div class="max-w-6xl mx-auto px-6 py-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center md:text-left">
                <!-- Cột 1: Giới thiệu -->
                <div class="flex flex-col items-center md:items-start">
                    <a href="#" class="mb-4">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="MinhTrietEras" class="h-10 w-auto mx-auto md:mx-0">
                    </a>
                    <p class="text-gray-600 text-sm">MinhTrietEras</p>
                </div>
                
                <!-- Cột 2: Thông tin liên hệ -->
                <div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Thông tin</h3>
                    <ul class="space-y-3 text-sm text-gray-600">
                        <li class="flex items-center justify-center md:justify-start">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 mr-3 flex-shrink-0"><path fill-rule="evenodd" d="M9.69 18.933l.003.001C9.89 19.02 10 19 10 19s.11.02.308-.066l.002-.001.006-.003.018-.008a5.741 5.741 0 00.281-.14c.186-.1.4-.223.654-.369.39-.23.835-.487 1.305-.765l.004-.002a10.998 10.998 0 001.916-1.124A22.952 22.952 0 0016.92 12c.381-.463.73-1.004 1.002-1.595a6.45 6.45 0 00.375-3.32C18.312 4.47 16.596 2 14.22 2 12.516 2 11.053 3.053 10 4.544 8.947 3.053 7.484 2 5.78 2 3.404 2 1.688 4.47 1.688 7.085c0 1.28.32 2.479.882 3.595.275.54.595 1.07.958 1.558a22.952 22.952 0 002.592 2.963 10.998 10.998 0 001.916 1.124l.004.002c.47.278.916.535 1.305.765.254.146.468.269.654.369a5.741 5.741 0 00.281.14l.018.008.006.003zM10 11.25a2.25 2.25 0 100-4.5 2.25 2.25 0 000 4.5z" clip-rule="evenodd" /></svg>
                            <a href="https://www.google.com/maps/search/?api=1&query=Quận+7,+TP.+Hồ+Chí+Minh" target="_blank" rel="noopener noreferrer" class="hover:text-indigo-600 transition-colors">Quận 7, TP. Hồ Chí Minh</a>
                        </li>
                        <li class="flex items-center justify-center md:justify-start">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 mr-3 flex-shrink-0"><path d="M2 3.5A1.5 1.5 0 013.5 2h1.148a1.5 1.5 0 011.465 1.175l.716 3.223a1.5 1.5 0 01-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 006.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 011.767-1.052l3.223.716A1.5 1.5 0 0118 15.352V16.5a1.5 1.5 0 01-1.5 1.5h-1.528a1.5 1.5 0 01-1.465-1.175l-.716-3.223a1.5 1.5 0 01.44-1.597l.115-.115a1.5 1.5 0 00-2.121-2.121l-.115.115a1.5 1.5 0 01-1.597.44l-3.223-.716A1.5 1.5 0 013.5 6.028H2V3.5z" /></svg>
                            <a href="tel:+84946426536" class="hover:text-indigo-600 transition-colors">+84 946 426 536</a>
                        </li>
                        <li class="flex items-center justify-center md:justify-start">
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 mr-3 flex-shrink-0"><path d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" /><path d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" /></svg>
                            <a href="mailto:contact@leminhtriet.com" class="hover:text-indigo-600 transition-colors">contact@leminhtriet.com</a>
                        </li>
                    </ul>
                </div>
                
                <!-- Cột 3: Mạng xã hội -->
                <div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Theo dõi</h3>
                    <div class="flex justify-center md:justify-start space-x-4">
                        <a href="https://www.messenger.com/t/minhtriet.info" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-white transition-transform duration-300 hover:scale-110">
                           <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12s12-5.373 12-12S18.627 0 12 0zm1.75 17.14l-4.25-2.71l-5.01 2.51a.52.52 0 0 1-.72-.56l1.3-5.83l-4.49-3.9a.52.52 0 0 1 .29-.89l5.92-.51l2.21-5.59a.52.52 0 0 1 .94 0l2.21 5.59l5.92.51a.52.52 0 0 1 .29.89l-4.49 3.9l1.3 5.83a.52.52 0 0 1-.72.56z"/></svg>
                        </a>
                        <!-- <a href="https://x.com/tinhoctanbinh" target="_blank" rel="noopener noreferrer" class="text-gray-500 hover:text-indigo-600 transition-transform duration-300 hover:scale-110">
                           <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/></svg>
                        </a> -->
                    </div>
                </div>
            </div>
            <div class="mt-8 pt-6 border-t border-gray-900/10 text-center text-xs text-gray-500">
                 <p>&copy; Copyright ©2025 All rights reserved | by MinhTrietProduction</p>
            </div>
        </div>
    </footer>

    <!-- Liên kết đến file JavaScript -->
    <script src="assets/js/liquid_glass.js"></script>

</body>
</html>
