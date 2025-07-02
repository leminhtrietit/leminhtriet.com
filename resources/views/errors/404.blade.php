@extends('layouts.error')

@section('title', '404 - Không Tìm Thấy Trang')

@section('content')
    <div class="mouse-track-gradient bg-white/10 backdrop-blur-xl rounded-3xl p-8 md:p-12 lg:p-16 custom-shadow border border-white/20">
        <h1 class="text-7xl md:text-9xl font-black text-white drop-shadow-lg">404</h1>
        <p class="text-xl md:text-2xl font-bold mt-4 text-white/90">Ối, trang này đi lạc đâu mất rồi!</p>
        <p class="mt-2 text-white/70">
            Có vẻ như liên kết đã cũ hoặc bạn đã gõ nhầm địa chỉ.
        </p>
        <div class="mt-8">
            <a href="{{ url('/') }}"
               class="px-6 py-3 bg-white/20 hover:bg-white/30 text-white font-semibold rounded-full transition-colors duration-300 border border-white/30">
                Về Trang Chủ Thôi
            </a>
        </div>
    </div>
@endsection