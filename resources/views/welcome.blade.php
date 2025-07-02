@extends('application')  {{-- Use the new layout --}}

@section('title', 'Download Resources') {{-- Set the title --}}

@section('content')
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
                           <img width="24" height="24" src="https://img.icons8.com/3d-fluency/94/facebook-messenger.png" alt="facebook-messenger"/>
                        </a>
                        <a href="https://zalo.me/0946426536" target="_blank" rel="noopener noreferrer" class="text-gray-500 hover:text-indigo-600 transition-transform duration-300 hover:scale-110">

<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 48 48">
<path fill="#2962ff" d="M15,36V6.827l-1.211-0.811C8.64,8.083,5,13.112,5,19v10c0,7.732,6.268,14,14,14h10	c4.722,0,8.883-2.348,11.417-5.931V36H15z"></path><path fill="#eee" d="M29,5H19c-1.845,0-3.601,0.366-5.214,1.014C10.453,9.25,8,14.528,8,19	c0,6.771,0.936,10.735,3.712,14.607c0.216,0.301,0.357,0.653,0.376,1.022c0.043,0.835-0.129,2.365-1.634,3.742	c-0.162,0.148-0.059,0.419,0.16,0.428c0.942,0.041,2.843-0.014,4.797-0.877c0.557-0.246,1.191-0.203,1.729,0.083	C20.453,39.764,24.333,40,28,40c4.676,0,9.339-1.04,12.417-2.916C42.038,34.799,43,32.014,43,29V19C43,11.268,36.732,5,29,5z"></path><path fill="#2962ff" d="M36.75,27C34.683,27,33,25.317,33,23.25s1.683-3.75,3.75-3.75s3.75,1.683,3.75,3.75	S38.817,27,36.75,27z M36.75,21c-1.24,0-2.25,1.01-2.25,2.25s1.01,2.25,2.25,2.25S39,24.49,39,23.25S37.99,21,36.75,21z"></path><path fill="#2962ff" d="M31.5,27h-1c-0.276,0-0.5-0.224-0.5-0.5V18h1.5V27z"></path><path fill="#2962ff" d="M27,19.75v0.519c-0.629-0.476-1.403-0.769-2.25-0.769c-2.067,0-3.75,1.683-3.75,3.75	S22.683,27,24.75,27c0.847,0,1.621-0.293,2.25-0.769V26.5c0,0.276,0.224,0.5,0.5,0.5h1v-7.25H27z M24.75,25.5	c-1.24,0-2.25-1.01-2.25-2.25S23.51,21,24.75,21S27,22.01,27,23.25S25.99,25.5,24.75,25.5z"></path><path fill="#2962ff" d="M21.25,18h-8v1.5h5.321L13,26h0.026c-0.163,0.211-0.276,0.463-0.276,0.75V27h7.5	c0.276,0,0.5-0.224,0.5-0.5v-1h-5.321L21,19h-0.026c0.163-0.211,0.276-0.463,0.276-0.75V18z"></path>
</svg>

                    </a>
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

@endsection