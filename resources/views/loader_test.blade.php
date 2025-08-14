@extends('application')

@section('title', 'Loader Test')

@section('content')
<style>
    /* CSS tạm thời để kiểm tra loader */
    .loader-container {
        min-height: 80vh; /* Tạo chiều cao đủ để trang không bị ẩn ngay lập tức */
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        text-align: center;
        padding: 2rem;
    }
    .loader-container h1 {
        font-size: 2rem;
        font-weight: bold;
        margin-bottom: 1rem;
    }
</style>

<div class="loader-container">
    <h1>Trang này đang tải...</h1>
    <p class="text-gray-600">Bạn sẽ thấy loader xuất hiện trong giây lát.</p>
</div>

{{-- Script để ẩn loader sau một khoảng thời gian nhất định --}}
@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const loader = document.getElementById('page-loader');
        if (loader) {
            // Giả lập việc trang tải nội dung mất 3 giây
            setTimeout(() => {
                loader.classList.add('opacity-0');
                // Xóa loader khỏi DOM sau khi animation kết thúc
                setTimeout(() => {
                    loader.style.display = 'none';
                }, 300);
            }, 3000); // 3000ms = 3 giây
        }
    });
</script>
@endsection
@endsection