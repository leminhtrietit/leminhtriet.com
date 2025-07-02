@extends('layouts.error')

@section('title', '500 - Lỗi Hệ Thống')

@section('content')
    <div class="mouse-track-gradient bg-white/10 backdrop-blur-xl rounded-3xl p-8 md:p-12 lg:p-16 custom-shadow border border-white/20">
        <h1 class="text-7xl md:text-9xl font-black text-white drop-shadow-lg">500</h1>
        <p class="text-xl md:text-2xl font-bold mt-4 text-white/90">Ối, có chút trục trặc kỹ thuật!</p>
        <p class="mt-2 text-white/70">
            Hệ thống đang gặp sự cố. Đội ngũ kỹ thuật của chúng tôi đã nhận được tín hiệu "ét-ô-ét" và đang xử lý.
        </p>
        <div class="mt-8">
            <a href="{{ url('/') }}"
               class="px-6 py-3 bg-white/20 hover:bg-white/30 text-white font-semibold rounded-full transition-colors duration-300 border border-white/30">
                Quay Về Trang Chủ
            </a>
        </div>
    </div>
@endsection