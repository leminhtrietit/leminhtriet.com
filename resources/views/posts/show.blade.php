@extends('application')  {{-- Kế thừa từ layout chính của bạn --}}

@section('title', $post->title) {{-- Đặt tiêu đề cho trang dựa trên tiêu đề bài viết --}}

@section('content')
    <div class="max-w-6xl mx-auto px-6 py-12">
        <div class="bg-white/80 backdrop-blur-md p-8 md:p-12 rounded-lg shadow-lg border border-white/20">
            
            {{-- Tiêu đề bài viết, hiển thị lớn và trang trọng --}}
            <h1 class="text-3xl md:text-5xl font-bold mb-4 text-center text-gray-900">{{ $post->title }}</h1>
            
            {{-- (Tùy chọn) Bạn có thể thêm các thông tin phụ như tên tác giả, ngày đăng ở đây --}}
            <p class="text-center text-gray-600 text-sm mb-8">Đăng bởi Lê Minh Triết</p>

            {{-- Đường kẻ ngang tinh tế để phân tách tiêu đề và nội dung --}}
            <div class="h-px bg-gray-900/10 my-8"></div>

            {{-- 
                ** PHẦN QUAN TRỌNG NHẤT **
                Sử dụng class `prose` của Tailwind để tự động định dạng nội dung HTML từ database.
                - `prose-xl`: Tăng kích thước chữ cho dễ đọc hơn trên màn hình lớn.
                - `max-w-none`: Gỡ bỏ giới hạn chiều rộng mặc định của `prose` để nội dung lấp đầy container.
                - `text-gray-800`: Đảm bảo màu chữ dễ đọc trên nền sáng.
            --}}
            <div class="prose prose-xl max-w-none text-gray-800">
                {!! $post->clean_content !!}
            </div>

        </div>
    </div>
@endsection
