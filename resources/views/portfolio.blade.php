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
            <div class="max-w-6xl mx-auto px-6 py-12">
            <!-- ** CẬP NHẬT: WIDGETS VỚI GIAO DIỆN SÁNG ** -->


<div class="bg-white/80 backdrop-blur-md p-8 rounded-lg shadow-lg border border-white/20">
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center">
        <div class="md:col-span-1 flex justify-center">
            <img src="{{ asset('assets/images/DSC00345.png') }}" alt="Ảnh đại diện" class="rounded-full h-48 w-48 object-cover border-4 border-white/50 shadow-lg">
        </div>
        <div class="md:col-span-2 text-center md:text-left">
            <h2 class="text-3xl font-bold text-gray-900 mb-2">Chào bạn, mình là Triết!</h2>
            <p class="text-lg text-gray-700">Một nhà giáo dục IT "vui tính" với đam mê biến những công cụ văn phòng trở nên mạnh mẽ hơn nhờ sức mạnh của Trí tuệ Nhân tạo. Cùng mình khám phá cách làm việc thông minh hơn, không phải chăm chỉ hơn nhé!</p>
        </div>
    </div>

    <div class="h-px bg-gray-900/10 my-12"></div>

    <div>
        <h2 class="text-3xl font-bold text-gray-900 mb-6 text-center">Kỹ Năng Nổi Bật</h2>
        <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-4 gap-6">
            <div class="bg-white/50 backdrop-blur-sm p-4 rounded-2xl border border-white/30 flex flex-col items-center text-center transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl hover:border-blue-500/50">
                <svg class="w-12 h-12 text-blue-500 mb-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" /></svg>
                <h3 class="font-semibold text-gray-800">Tin học văn phòng</h3>
            </div>
            <div class="bg-white/50 backdrop-blur-sm p-4 rounded-2xl border border-white/30 flex flex-col items-center text-center transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl hover:border-yellow-500/50">
                <svg class="w-12 h-12 text-yellow-500 mb-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" /></svg>
                <h3 class="font-semibold text-gray-800">Google Workspace</h3>
            </div>
            <div class="bg-white/50 backdrop-blur-sm p-4 rounded-2xl border border-white/30 flex flex-col items-center text-center transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl hover:border-purple-500/50">
               <svg class="w-12 h-12 text-purple-500 mb-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 3v1.5M4.5 8.25H3m18 0h-1.5M4.5 12H3m18 0h-1.5m-15 3.75H3m18 0h-1.5M8.25 19.5V21M12 3v1.5m0 16.5V21m3.75-18v1.5m0 16.5V21m-9-1.5h10.5a2.25 2.25 0 002.25-2.25V6.75a2.25 2.25 0 00-2.25-2.25H6.75A2.25 2.25 0 004.5 6.75v10.5a2.25 2.25 0 002.25 2.25z" /></svg>
                <h3 class="font-semibold text-gray-800">AI Tools</h3>
            </div>
            <div class="bg-white/50 backdrop-blur-sm p-4 rounded-2xl border border-white/30 flex flex-col items-center text-center transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl hover:border-teal-500/50">
                <svg class="w-12 h-12 text-teal-500 mb-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5" /></svg>
                <h3 class="font-semibold text-gray-800">Web Developer</h3>
            </div>
        </div>
    </div>

    <div class="h-px bg-gray-900/10 my-12"></div>
    
    <div>
        <h2 class="text-3xl font-bold text-gray-900 mb-6 text-center">Kinh Nghiệm Làm Việc</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            
            <div class="bg-white/50 backdrop-blur-sm p-6 rounded-2xl border border-white/30 transition-all duration-300 hover:shadow-xl hover:border-gray-400/50">
                <h3 class="text-xl font-bold text-gray-800">Teacher</h3>
                <p class="text-sm text-gray-600 font-semibold mt-1">Sao Viet Information Technology Center - District 7 Branch</p>
                <p class="text-xs text-gray-500 mb-4">March 2023 to March 2024</p>
                <ul class="list-disc list-inside text-gray-700 space-y-2 text-sm">
                    <li>Taught students according to the established curriculum.</li>
                    <li>Introduced new concepts and their practical applications in the workplace.</li>
                    <li>Assessed student performance and provided learning support.</li>
                    <li>Created and maintained instructional materials.</li>
                </ul>
            </div>

            <div class="bg-white/50 backdrop-blur-sm p-6 rounded-2xl border border-white/30 transition-all duration-300 hover:shadow-xl hover:border-gray-400/50">
                <h3 class="text-xl font-bold text-gray-800">Branch Director</h3>
                <p class="text-sm text-gray-600 font-semibold mt-1">Sao Viet Information Technology Center - Tan Binh Branch</p>
                <p class="text-xs text-gray-500 mb-4">March 2024 to Feb 2025</p>
                <ul class="list-disc list-inside text-gray-700 space-y-2 text-sm">
                    <li>Developed training programs.</li>
                    <li>Managed student body.</li>
                    <li>Handled financial transactions.</li>
                    <li>Supervised teaching staff.</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="h-px bg-gray-900/10 my-12"></div>

    <div>
        <h2 class="text-3xl font-bold text-gray-900 mb-6 text-center">Chứng Chỉ & Công Nhận</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white/50 backdrop-blur-sm p-4 rounded-2xl border border-white/30 flex items-center space-x-4 transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl hover:border-red-500/50">
                <div class="flex-shrink-0 bg-red-500/10 p-3 rounded-full">
                    <svg class="w-8 h-8 text-red-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.4-1.593 3.068M15.75 21a9 9 0 11-1.06-1.06M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                </div>
                <div>
                    <h3 class="font-bold text-gray-900">MOS 365 Associate</h3>
                    <p class="text-sm text-gray-600">Word, Excel, PowerPoint</p>
                </div>
            </div>
            <div class="bg-white/50 backdrop-blur-sm p-4 rounded-2xl border border-white/30 flex items-center space-x-4 transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl hover:border-teal-500/50">
                <div class="flex-shrink-0 bg-teal-500/10 p-3 rounded-full">
                   <svg class="w-8 h-8 text-teal-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 21l5.25-11.25L21 21m-9-3h7.5M3 5.621a48.474 48.474 0 016-.371m0 0c1.12 0 2.233.038 3.334.114M9 5.25V3m3.334 2.364C13.18 7.061 14.12 8 15.17 8c1.05 0 1.99-.939 2.667-2.636m-1.026 9.37a48.461 48.461 0 01-4.437.28c-1.12 0-2.233-.038-3.334-.113a48.461 48.461 0 01-4.437-.28" /></svg>
                </div>
                <div>
                    <h3 class="font-bold text-gray-900">APTIS</h3>
                    <p class="text-sm text-gray-600">B2 Certificate</p>
                </div>
            </div>
            <div class="bg-white/50 backdrop-blur-sm p-4 rounded-2xl border border-white/30 flex items-center space-x-4 transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl hover:border-amber-500/50">
                <div class="flex-shrink-0 bg-amber-500/10 p-3 rounded-full">
                   <svg class="w-8 h-8 text-amber-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6.75 7.5l3 2.25-3 2.25m4.5 0h3m-9 8.25h13.5A2.25 2.25 0 0021 18V6a2.25 2.25 0 00-2.25-2.25H5.25A2.25 2.25 0 003 6v12a2.25 2.25 0 002.25 2.25z" /></svg>
                </div>
                <div>
                    <h3 class="font-bold text-gray-900">UDCNTT Cơ bản</h3>
                    <p class="text-sm text-gray-600">Chứng chỉ Quốc gia</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="h-px bg-gray-900/10 my-12"></div>

    <div>
        <h2 class="text-3xl font-bold text-gray-900 mb-6 text-center">Hoạt Động & Dự Án</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            
            <div class="bg-white/50 backdrop-blur-sm p-6 rounded-2xl border border-white/30 flex flex-col text-center items-center justify-center">
                 <h3 class="text-lg font-bold text-gray-800">Tutor</h3>
                 <p class="text-sm text-gray-600 mt-2">Secondary School, High School & Working Professionals.</p>
            </div>

            <div class="bg-white/50 backdrop-blur-sm p-6 rounded-2xl border border-white/30 flex flex-col text-center items-center justify-center">
                 <h3 class="text-lg font-bold text-gray-800">Web Builder</h3>
                 <div class="text-sm text-blue-600 mt-2 space-y-1">
                    <p><a href="http://sagribags.com" target="_blank" class="hover:underline">sagribags.com</a></p>
                    <p><a href="http://ktvinagroup.com" target="_blank" class="hover:underline">ktvinagroup.com</a></p>
                    <p><a href="http://trungtamtinhoc.com" target="_blank" class="hover:underline">trungtamtinhoc.com</a></p>
                 </div>
            </div>

            <div class="bg-white/50 backdrop-blur-sm p-6 rounded-2xl border border-white/30 flex flex-col text-center items-center justify-center md:col-span-2 lg:col-span-1">
                 <h3 class="text-lg font-bold text-gray-800">Hoạt Động Cộng Đồng</h3>
                 <div class="text-sm text-gray-600 mt-2">
                    <p>Revive Marathon Across Vietnam <span class="text-xs">(10/2019)</span></p>
                    <p>Meal preparation for the underserved <span class="text-xs">(11/2019)</span></p>
                 </div>
            </div>
        </div>
    </div>

    <div class="h-px bg-gray-900/10 my-12"></div>

    <div>
        <h2 class="text-3xl font-bold text-gray-900 mb-6 text-center">Mục Tiêu Phát Triển</h2>
        <div class="max-w-3xl mx-auto text-center">
             <p class="text-lg text-gray-700 leading-relaxed">
                "To pursue a role where I can combine creative strategies with technological solutions to achieve exceptional results and contribute to organizational success."
            </p>
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
