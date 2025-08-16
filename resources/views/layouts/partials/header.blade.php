{{-- layouts/partials/header.blade.php --}}
<div x-data="{ mobileMenuOpen: false, langMenuOpen: false }" class="relative">
    <header class="custom-shadow bg-white/30 backdrop-blur-xl fixed top-4 left-1/2 -translate-x-1/2 w-11/12 max-w-6xl z-50 rounded-3xl border border-white/50 transition-all duration-300 py-4">
        <div class="container mx-auto px-6 flex justify-between items-center">
            <a href="{{ route('login') }}" class="text-2xl font-bold text-gray-900">
                <img src="{{ asset('assets/images/logo.png') }}" alt="MinhTrietEras" class="h-10 w-auto">
            </a>
            <nav class="hidden md:flex items-center space-x-2">
                <a href="{{ route('home') }}" class="mouse-track-gradient group relative transition-all duration-300 hover:-translate-y-1">
                    <div class="glow-effect absolute -inset-0.5 rounded-xl blur-sm opacity-0 group-hover:opacity-75 transition duration-300"></div>
                    <div class="relative px-4 py-2 bg-transparent rounded-xl border border-transparent group-hover:bg-white/50 group-hover:border-white/50 transition-all duration-300">
                        <span class="font-medium text-gray-800 group-hover:text-gray-900">{{ __('layout.home') }}</span>
                    </div>
                </a>
                <a href="{{ route('posts.index') }}" class="mouse-track-gradient group relative transition-all duration-300 hover:-translate-y-1">
                    <div class="glow-effect absolute -inset-0.5 rounded-xl blur-sm opacity-0 group-hover:opacity-75 transition duration-300"></div>
                    <div class="relative px-4 py-2 bg-transparent rounded-xl border border-transparent group-hover:bg-white/50 group-hover:border-white/50 transition-all duration-300">
                        <span class="font-medium text-gray-800 group-hover:text-gray-900">{{ __('layout.tutorials') }}</span>
                    </div>
                </a>
                <a href="{{ route('posts.by_category', 'cong-cu') }}" class="mouse-track-gradient group relative transition-all duration-300 hover:-translate-y-1">
                    <div class="glow-effect absolute -inset-0.5 rounded-xl blur-sm opacity-0 group-hover:opacity-75 transition duration-300"></div>
                    <div class="relative px-4 py-2 bg-transparent rounded-xl border border-transparent group-hover:bg-white/50 group-hover:border-white/50 transition-all duration-300">
                        <span class="font-medium text-gray-800 group-hover:text-gray-900">{{ __('layout.tools') }}</span>
                    </div>
                </a>
                <a href="{{ route('projects') }}" class="mouse-track-gradient group relative transition-all duration-300 hover:-translate-y-1">
                    <div class="glow-effect absolute -inset-0.5 rounded-xl blur-sm opacity-0 group-hover:opacity-75 transition duration-300"></div>
                    <div class="relative px-4 py-2 bg-transparent rounded-xl border border-transparent group-hover:bg-white/50 group-hover:border-white/50 transition-all duration-300">
                        <span class="font-medium text-gray-800 group-hover:text-gray-900">Dự án</span>
                    </div>
                </a>
                <a href="{{ route('portfolio') }}" class="mouse-track-gradient group relative transition-all duration-300 hover:-translate-y-1">
                    <div class="glow-effect absolute -inset-0.5 rounded-xl blur-sm opacity-0 group-hover:opacity-75 transition duration-300"></div>
                    <div class="relative px-4 py-2 bg-transparent rounded-xl border border-transparent group-hover:bg-white/50 group-hover:border-white/50 transition-all duration-300">
                        <span class="font-medium text-gray-800 group-hover:text-gray-900">{{ __('layout.portfolio') }}</span>
                    </div>
                </a>
                <a href="{{ route('resource') }}" class="mouse-track-gradient group relative transition-all duration-300 hover:-translate-y-1">
                    <div class="glow-effect absolute -inset-0.5 rounded-xl blur-sm opacity-0 group-hover:opacity-75 transition duration-300"></div>
                    <div class="relative px-4 py-2 bg-transparent rounded-xl border border-transparent group-hover:bg-white/50 group-hover:border-white/50 transition-all duration-300">
                        <span class="font-medium text-gray-800 group-hover:text-gray-900">{{ __('layout.download') }}</span>
                    </div>
                </a>
                <div class="relative ml-4">
                    <button @click="langMenuOpen = !langMenuOpen" class="flex items-center space-x-1 px-3 py-2 bg-white/30 rounded-xl border border-white/50 hover:bg-white/60 transition-colors">
                        <span class="font-bold text-sm text-gray-800">{{ strtoupper(session('locale', 'vi')) }}</span>
                        <svg class="w-4 h-4 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div x-show="langMenuOpen" @click.away="langMenuOpen = false" class="absolute right-0 mt-2 w-28 bg-white/80 backdrop-blur-md rounded-xl shadow-lg border border-white/30 py-1" x-cloak>
                        <a href="{{ url('lang/vi') }}" class="block px-4 py-2 text-sm text-gray-800 hover:bg-white/50">Tiếng Việt</a>
                        <a href="{{ url('lang/en') }}" class="block px-4 py-2 text-sm text-gray-800 hover:bg-white/50">English</a>
                    </div>
                </div>
            </nav>
            <button @click="mobileMenuOpen = !mobileMenuOpen" id="mobile-menu-button" class="md:hidden text-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </div>
    </header>
    <div x-show="mobileMenuOpen" @click.away="mobileMenuOpen = false" x-cloak id="mobile-menu" class="md:hidden fixed top-2 left-1/2 -translate-x-1/2 w-11/12 max-w-6xl z-40 mt-[92px]">
        <div class="custom-shadow bg-white/50 backdrop-blur-xl rounded-3xl border border-white/30 p-4">
            <nav class="flex flex-col items-center space-y-2">
                <a @click="mobileMenuOpen = false" href="{{ route('home') }}" class="block w-full text-center py-2 text-gray-800 hover:bg-white/40 rounded-lg">{{ __('layout.home') }}</a>
                <a @click="mobileMenuOpen = false" href="{{ route('posts.index') }}" class="block w-full text-center py-2 text-gray-800 hover:bg-white/40 rounded-lg">{{ __('layout.tutorials') }}</a>
                <a @click="mobileMenuOpen = false" href="{{ route('posts.by_category', 'cong-cu') }}" class="block w-full text-center py-2 text-gray-800 hover:bg-white/40 rounded-lg">{{ __('layout.tools') }}</a>
                <a @click="mobileMenuOpen = false" href="{{ route('projects') }}" class="block w-full text-center py-2 text-gray-800 hover:bg-white/40 rounded-lg">Dự án</a>
                <a @click="mobileMenuOpen = false" href="{{ route('portfolio') }}" class="block w-full text-center py-2 text-gray-800 hover:bg-white/40 rounded-lg">{{ __('layout.portfolio') }}</a>
                <a @click="mobileMenuOpen = false" href="{{ route('resource') }}" class="block w-full text-center py-2 text-gray-800 hover:bg-white/40 rounded-lg">{{ __('layout.download') }}</a>
                <div class="border-t border-white/20 mt-4 pt-4 flex justify-center space-x-4 w-full">
                    <a href="{{ url('lang/vi') }}" class="font-medium @if(session('locale', 'vi') == 'vi') text-indigo-600 font-bold @else text-gray-700 @endif">VI</a>
                    <span class="text-gray-400">|</span>
                    <a href="{{ url('lang/en') }}" class="font-medium @if(session('locale', 'vi') == 'en') text-indigo-600 font-bold @else text-gray-700 @endif">EN</a>
                </div>
            </nav>
        </div>
    </div>
</div>
