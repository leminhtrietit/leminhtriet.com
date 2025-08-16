<!DOCTYPE html>
<html lang="{{ session('locale', 'vi') }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | MinhTrietEras</title>
    {{-- Thêm thẻ meta description - Rất quan trọng cho SEO --}}
    <meta name="description"
        content="@yield('description', 'Khám phá các công cụ AI, hướng dẫn lập trình và tài nguyên hữu ích để nâng cao hiệu suất công việc và phát triển kỹ năng trong thế giới số.')">

    <link rel="stylesheet" href="/assets/css/font-inter.css">

    <link rel="icon" href="{{ asset('assets/images/logo_tron.png') }}" type="image/x-icon" />

    <link rel="stylesheet" href="{{ asset('build/assets/app-8itq2mpa.css') }}">

    <script defer src="{{ asset('assets/js/alpinejs.min.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('assets/css/liquid_glass.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/falling-lights.css') }}">

    {{-- CSS CHO HIỆU ỨNG NỀN SÁNG MESH GRADIENT --}}
    <style>
        @keyframes rotate {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .mesh-gradient-blob {
            position: absolute;
            width: 500px;
            height: 500px;
            border-radius: 9999px;
            filter: blur(100px);
            opacity: 0.5;
            mix-blend-mode: screen;
            /* Chế độ hòa trộn màu sắc */
        }

        .mesh-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: -10;
            animation: rotate 40s linear infinite;
        }

        [x-cloak] {
            display: none !important;
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-800 body-with-padding @yield('layout_class')">

    {{-- Thêm loading spinner tại đây --}}
    <div id="page-loader"
        class="fixed inset-0 z-[9999] flex items-center justify-center bg-white/50 backdrop-blur-md transition-opacity duration-300">
        {{-- Loader mới --}}
        <div class="w-12 text-blue-600">
            <svg fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <style>
                    /* Inline CSS để tùy chỉnh màu */
                    circle {
                        fill: #272A74;
                        /* Màu xanh dương đậm của logo */
                    }
                </style>
                <circle cx="4" cy="12" r="3">
                    <animate id="spinner_jObz" begin="0;spinner_vwSQ.end-0.25s" attributeName="r" dur="0.75s"
                        values="3;.2;3"></animate>
                </circle>
                <circle cx="12" cy="12" r="3">
                    <animate begin="spinner_jObz.end-0.6s" attributeName="r" dur="0.75s" values="3;.2;3"></animate>
                </circle>
                <circle cx="20" cy="12" r="3">
                    <animate id="spinner_vwSQ" begin="spinner_jObz.end-0.45s" attributeName="r" dur="0.75s"
                        values="3;.2;3"></animate>
                </circle>
            </svg>
        </div>
    </div>
    {{-- Hiệu ứng nền Mesh Gradient --}}
    <div class="mesh-container">
        <div class="absolute top-0 left-1/2 w-full h-full">
            <div class="mesh-gradient-blob bg-rose-300 -translate-x-1/2 -translate-y-1/2"></div>
        </div>
        <div class="absolute top-1/2 left-0 w-full h-full">
            <div class="mesh-gradient-blob bg-sky-300 -translate-x-1/2 -translate-y-1/2"></div>
        </div>
        <div class="absolute top-1/2 left-full w-full h-full">
            <div class="mesh-gradient-blob bg-yellow-200 -translate-x-1/2 -translate-y-1/2"></div>
        </div>
    </div>

    <div id="lights-container"></div>

    {{-- TẠO MỘT DIV WRAPPER MỚI ĐỂ LÀM BỘ ĐIỀU KHIỂN TRUNG TÂM --}}
    {{-- Nó sẽ quản lý trạng thái cho cả menu mobile và menu ngôn ngữ --}}
    <div x-data="{ mobileMenuOpen: false, langMenuOpen: false }" class="relative">

        {{-- Thẻ header bây giờ không còn x-data nữa --}}
        <header
            class="custom-shadow bg-white/30 backdrop-blur-xl fixed top-4 left-1/2 -translate-x-1/2 w-11/12 max-w-6xl z-50 rounded-3xl border border-white/50 transition-all duration-300 py-4">
            <div class="container mx-auto px-6 flex justify-between items-center">
                <a href="{{ route('login') }}" class="text-2xl font-bold text-gray-900">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="MinhTrietEras" class="h-10 w-auto">
                </a>
                <nav class="hidden md:flex items-center space-x-2">
                    {{-- Menu desktop giữ nguyên --}}
                    <a href="{{ route('home') }}"
                        class="mouse-track-gradient group relative transition-all duration-300 hover:-translate-y-1">
                        <div
                            class="glow-effect absolute -inset-0.5 rounded-xl blur-sm opacity-0 group-hover:opacity-75 transition duration-300">
                        </div>
                        <div
                            class="relative px-4 py-2 bg-transparent rounded-xl border border-transparent group-hover:bg-white/50 group-hover:border-white/50 transition-all duration-300">
                            <span
                                class="font-medium text-gray-800 group-hover:text-gray-900">{{ __('layout.home') }}</span>
                        </div>
                    </a>
                    <a href="{{ route('posts.index') }}"
                        class="mouse-track-gradient group relative transition-all duration-300 hover:-translate-y-1">
                        <div
                            class="glow-effect absolute -inset-0.5 rounded-xl blur-sm opacity-0 group-hover:opacity-75 transition duration-300">
                        </div>
                        <div
                            class="relative px-4 py-2 bg-transparent rounded-xl border border-transparent group-hover:bg-white/50 group-hover:border-white/50 transition-all duration-300">
                            <span
                                class="font-medium text-gray-800 group-hover:text-gray-900">{{ __('layout.tutorials') }}</span>
                        </div>
                    </a>
                    <a href="{{ route('posts.by_category', 'cong-cu') }}"
                        class="mouse-track-gradient group relative transition-all duration-300 hover:-translate-y-1">
                        <div
                            class="glow-effect absolute -inset-0.5 rounded-xl blur-sm opacity-0 group-hover:opacity-75 transition duration-300">
                        </div>
                        <div
                            class="relative px-4 py-2 bg-transparent rounded-xl border border-transparent group-hover:bg-white/50 group-hover:border-white/50 transition-all duration-300">
                            <span
                                class="font-medium text-gray-800 group-hover:text-gray-900">{{ __('layout.tools') }}</span>
                        </div>
                    </a>
                    <a href="{{ route('projects') }}"
                        class="mouse-track-gradient group relative transition-all duration-300 hover:-translate-y-1">
                        <div
                            class="glow-effect absolute -inset-0.5 rounded-xl blur-sm opacity-0 group-hover:opacity-75 transition duration-300">
                        </div>
                        <div
                            class="relative px-4 py-2 bg-transparent rounded-xl border border-transparent group-hover:bg-white/50 group-hover:border-white/50 transition-all duration-300">
                            <span class="font-medium text-gray-800 group-hover:text-gray-900">Dự án</span></div>
                    </a>
                    <a href="{{ route('portfolio') }}"
                        class="mouse-track-gradient group relative transition-all duration-300 hover:-translate-y-1">
                        <div
                            class="glow-effect absolute -inset-0.5 rounded-xl blur-sm opacity-0 group-hover:opacity-75 transition duration-300">
                        </div>
                        <div
                            class="relative px-4 py-2 bg-transparent rounded-xl border border-transparent group-hover:bg-white/50 group-hover:border-white/50 transition-all duration-300">
                            <span
                                class="font-medium text-gray-800 group-hover:text-gray-900">{{ __('layout.portfolio') }}</span>
                        </div>
                    </a>
                    <a href="{{ route('resource') }}"
                        class="mouse-track-gradient group relative transition-all duration-300 hover:-translate-y-1">
                        <div
                            class="glow-effect absolute -inset-0.5 rounded-xl blur-sm opacity-0 group-hover:opacity-75 transition duration-300">
                        </div>
                        <div
                            class="relative px-4 py-2 bg-transparent rounded-xl border border-transparent group-hover:bg-white/50 group-hover:border-white/50 transition-all duration-300">
                            <span
                                class="font-medium text-gray-800 group-hover:text-gray-900">{{ __('layout.download') }}</span>
                        </div>
                    </a>

                    {{-- Menu ngôn ngữ bây giờ được điều khiển bởi biến "langMenuOpen" từ div cha --}}
                    {{-- và không còn x-data của riêng nó nữa --}}
                    <div class="relative ml-4">
                        <button @click="langMenuOpen = !langMenuOpen"
                            class="flex items-center space-x-1 px-3 py-2 bg-white/30 rounded-xl border border-white/50 hover:bg-white/60 transition-colors">
                            <span
                                class="font-bold text-sm text-gray-800">{{ strtoupper(session('locale', 'vi')) }}</span>
                            <svg class="w-4 h-4 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div x-show="langMenuOpen" @click.away="langMenuOpen = false"
                            class="absolute right-0 mt-2 w-28 bg-white/80 backdrop-blur-md rounded-xl shadow-lg border border-white/30 py-1"
                            x-cloak>
                            <a href="{{ url('lang/vi') }}"
                                class="block px-4 py-2 text-sm text-gray-800 hover:bg-white/50">Tiếng Việt</a>
                            <a href="{{ url('lang/en') }}"
                                class="block px-4 py-2 text-sm text-gray-800 hover:bg-white/50">English</a>
                        </div>
                    </div>
                </nav>

                {{-- Nút bấm này điều khiển biến "mobileMenuOpen" từ div cha --}}
                <button @click="mobileMenuOpen = !mobileMenuOpen" id="mobile-menu-button"
                    class="md:hidden text-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </div>
        </header>

        {{-- Menu này được điều khiển bởi biến "mobileMenuOpen" từ div cha --}}
        <div x-show="mobileMenuOpen" @click.away="mobileMenuOpen = false" x-cloak id="mobile-menu"
            class="md:hidden fixed top-2 left-1/2 -translate-x-1/2 w-11/12 max-w-6xl z-40 mt-[92px]">
            <div class="custom-shadow bg-white/50 backdrop-blur-xl rounded-3xl border border-white/30 p-4">
                <nav class="flex flex-col items-center space-y-2">
                    <a @click="mobileMenuOpen = false" href="{{ route('home') }}"
                        class="block w-full text-center py-2 text-gray-800 hover:bg-white/40 rounded-lg">{{ __('layout.home') }}</a>
                    <a @click="mobileMenuOpen = false" href="{{ route('posts.index') }}"
                        class="block w-full text-center py-2 text-gray-800 hover:bg-white/40 rounded-lg">{{ __('layout.tutorials') }}</a>
                    <a @click="mobileMenuOpen = false" href="{{ route('posts.by_category', 'cong-cu') }}"
                        class="block w-full text-center py-2 text-gray-800 hover:bg-white/40 rounded-lg">{{ __('layout.tools') }}</a>
                    <a @click="mobileMenuOpen = false" href="{{ route('projects') }}"
                        class="block w-full text-center py-2 text-gray-800 hover:bg-white/40 rounded-lg">Dự án</a>
                    <a @click="mobileMenuOpen = false" href="{{ route('portfolio') }}"
                        class="block w-full text-center py-2 text-gray-800 hover:bg-white/40 rounded-lg">{{ __('layout.portfolio') }}</a>
                    <a @click="mobileMenuOpen = false" href="{{ route('resource') }}"
                        class="block w-full text-center py-2 text-gray-800 hover:bg-white/40 rounded-lg">{{ __('layout.download') }}</a>

                    <div class="border-t border-white/20 mt-4 pt-4 flex justify-center space-x-4 w-full">
                        <a href="{{ url('lang/vi') }}"
                            class="font-medium @if(session('locale', 'vi') == 'vi') text-indigo-600 font-bold @else text-gray-700 @endif">VI</a>
                        <span class="text-gray-400">|</span>
                        <a href="{{ url('lang/en') }}"
                            class="font-medium @if(session('locale', 'vi') == 'en') text-indigo-600 font-bold @else text-gray-700 @endif">EN</a>
                    </div>
                </nav>
            </div>
        </div>

    </div> {{-- Đóng thẻ div wrapper của Alpine.js --}}

    <main class="w-full">
        {{-- Thẻ div này rất quan trọng để nội dung của bạn không bị hiệu ứng nền đè lên --}}
        <div class="relative z-10">
            @yield('content')
        </div>
    </main>

    <footer id="scroll-footer"
        class="custom-shadow bg-white/30 backdrop-blur-xl text-gray-800 w-11/12 max-w-6xl mx-auto my-4 z-50 rounded-3xl transition-all duration-500 border border-white/50 opacity-0 pointer-events-none">
        <div class="max-w-6xl mx-auto px-6 py-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center md:text-left">
                <div class="flex flex-col items-center md:items-start">
                    <a href="#" class="mb-4">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="MinhTrietEras"
                            class="h-10 w-auto mx-auto md:mx-0">
                    </a>
                    <p class="text-gray-600 text-sm">{{ __('layout.footer_brand_slogan') }}</p>
                </div>

                <div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">{{ __('layout.footer_info') }}</h3>
                    <ul class="space-y-3 text-sm text-gray-600">
                        <li class="flex items-center justify-center md:justify-start">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                class="w-5 h-5 mr-3 flex-shrink-0">
                                <path fill-rule="evenodd"
                                    d="M9.69 18.933l.003.001C9.89 19.02 10 19 10 19s.11.02.308-.066l.002-.001.006-.003.018-.008a5.741 5.741 0 00.281-.14c.186-.1.4-.223.654-.369.39-.23.835-.487 1.305-.765l.004-.002a10.998 10.998 0 001.916-1.124A22.952 22.952 0 0016.92 12c.381-.463.73-1.004 1.002-1.595a6.45 6.45 0 00.375-3.32C18.312 4.47 16.596 2 14.22 2 12.516 2 11.053 3.053 10 4.544 8.947 3.053 7.484 2 5.78 2 3.404 2 1.688 4.47 1.688 7.085c0 1.28.32 2.479.882 3.595.275.54.595 1.07.958 1.558a22.952 22.952 0 002.592 2.963 10.998 10.998 0 001.916 1.124l.004.002c.47.278.916.535 1.305.765.254.146.468.269.654.369a5.741 5.741 0 00.281.14l.018.008.006.003zM10 11.25a2.25 2.25 0 100-4.5 2.25 2.25 0 000 4.5z"
                                    clip-rule="evenodd" />
                            </svg>
                            <a href="https://www.google.com/maps/search/?api=1&query=Quận+7,+TP.+Hồ+Chí+Minh"
                                target="_blank" rel="noopener noreferrer"
                                class="hover:text-indigo-600 transition-colors">{{ __('layout.footer_address') }}</a>
                        </li>
                        <li class="flex items-center justify-center md:justify-start">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                class="w-5 h-5 mr-3 flex-shrink-0">
                                <path
                                    d="M2 3.5A1.5 1.5 0 013.5 2h1.148a1.5 1.5 0 011.465 1.175l.716 3.223a1.5 1.5 0 01-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 006.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 011.767-1.052l3.223.716A1.5 1.5 0 0118 15.352V16.5a1.5 1.5 0 01-1.5 1.5h-1.528a1.5 1.5 0 01-1.465-1.175l-.716-3.223a1.5 1.5 0 01.44-1.597l.115-.115a1.5 1.5 0 00-2.121-2.121l-.115.115a1.5 1.5 0 01-1.597.44l-3.223-.716A1.5 1.5 0 013.5 6.028H2V3.5z" />
                            </svg>
                            <a href="tel:+84946426536" class="hover:text-indigo-600 transition-colors">+84 946 426
                                536</a>
                        </li>
                        <li class="flex items-center justify-center md:justify-start">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                class="w-5 h-5 mr-3 flex-shrink-0">
                                <path
                                    d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
                                <path
                                    d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
                            </svg>
                            <a href="mailto:contact@leminhtriet.com"
                                class="hover:text-indigo-600 transition-colors">contact@leminhtriet.com</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">{{ __('layout.footer_follow') }}</h3>
                    <div class="flex justify-center md:justify-start space-x-4">
                        <a href="https://www.messenger.com/t/minhtriet.info" target="_blank" rel="noopener noreferrer"
                            class="text-gray-400 hover:text-white transition-transform duration-300 hover:scale-110">

                            <img src="{{ asset('assets/images/icons8-facebook-messenger.svg') }}"
                                alt="facebook-messenger" width="24" height="24"></a>
                        <a href="https://zalo.me/0946426536" target="_blank" rel="noopener noreferrer"
                            class="text-gray-500 hover:text-indigo-600 transition-transform duration-300 hover:scale-110">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24"
                                viewBox="0 0 48 48">
                                <path fill="#2962ff"
                                    d="M15,36V6.827l-1.211-0.811C8.64,8.083,5,13.112,5,19v10c0,7.732,6.268,14,14,14h10 c4.722,0,8.883-2.348,11.417-5.931V36H15z">
                                </path>
                                <path fill="#eee"
                                    d="M29,5H19c-1.845,0-3.601,0.366-5.214,1.014C10.453,9.25,8,14.528,8,19   c0,6.771,0.936,10.735,3.712,14.607c0.216,0.301,0.357,0.653,0.376,1.022c0.043,0.835-0.129,2.365-1.634,3.742  c-0.162,0.148-0.059,0.419,0.16,0.428c0.942,0.041,2.843-0.014,4.797-0.877c0.557-0.246,1.191-0.203,1.729,0.083    C20.453,39.764,24.333,40,28,40c4.676,0,9.339-1.04,12.417-2.916C42.038,34.799,43,32.014,43,29V19C43,11.268,36.732,5,29,5z">
                                </path>
                                <path fill="#2962ff"
                                    d="M36.75,27C34.683,27,33,25.317,33,23.25s1.683-3.75,3.75-3.75s3.75,1.683,3.75,3.75   S38.817,27,36.75,27z M36.75,21c-1.24,0-2.25,1.01-2.25,2.25s1.01,2.25,2.25,2.25S39,24.49,39,23.25S37.99,21,36.75,21z">
                                </path>
                                <path fill="#2962ff" d="M31.5,27h-1c-0.276,0-0.5-0.224-0.5-0.5V18h1.5V27z"></path>
                                <path fill="#2962ff"
                                    d="M27,19.75v0.519c-0.629-0.476-1.403-0.769-2.25-0.769c-2.067,0-3.75,1.683-3.75,3.75 S22.683,27,24.75,27c0.847,0,1.621-0.293,2.25-0.769V26.5c0,0.276,0.224,0.5,0.5,0.5h1v-7.25H27z M24.75,25.5   c-1.24,0-2.25-1.01-2.25-2.25S23.51,21,24.75,21S27,22.01,27,23.25S25.99,25.5,24.75,25.5z">
                                </path>
                                <path fill="#2962ff"
                                    d="M21.25,18h-8v1.5h5.321L13,26h0.026c-0.163,0.211-0.276,0.463-0.276,0.75V27h7.5   c0.276,0,0.5-0.224,0.5-0.5v-1h-5.321L21,19h-0.026c0.163-0.211,0.276-0.463,0.276-0.75V18z">
                                </path>
                            </svg>
                            <span class="sr-only">Zalo</span>

                        </a>
                    </div>
                </div>
            </div>
            <div class="mt-8 pt-6 border-t border-gray-900/10 text-center text-xs text-gray-500">
                <p>{{ __('layout.footer_copyright') }}</p>
            </div>
        </div>
    </footer>

    <script src="{{ asset(path: 'assets/js/liquid_glass.js') }}"></script>
    <script>
        // JS để ẩn loader khi trang đã tải xong
        window.addEventListener('load', function () {
            const loader = document.getElementById('page-loader');
            if (loader) {
                loader.classList.add('opacity-0');
                // Xóa loader khỏi DOM sau khi animation kết thúc để tránh chặn tương tác
                setTimeout(() => {
                    loader.style.display = 'none';
                }, 300);
            }
        });
        document.addEventListener('DOMContentLoaded', function () {
            const footer = document.getElementById('scroll-footer');
            function checkFooter() {
                // Khoảng cách từ đáy trình duyệt đến đáy trang (<= 32px thì coi như tới đáy)
                if ((window.innerHeight + window.scrollY) >= (document.body.offsetHeight - 32)) {
                    footer.classList.remove('opacity-0', 'pointer-events-none');
                    footer.classList.add('opacity-100');
                } else {
                    footer.classList.add('opacity-0', 'pointer-events-none');
                    footer.classList.remove('opacity-100');
                }
            }
            window.addEventListener('scroll', checkFooter);
            window.addEventListener('resize', checkFooter);
            checkFooter();
        });
    </script>
    @yield('scripts')

</body>

</html>