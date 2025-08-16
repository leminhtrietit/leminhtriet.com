@extends( 'layouts.app')

{{-- Title mới, ngắn gọn và tập trung vào từ khóa --}}
@section('title', 'Trang chủ')

{{-- Thêm description cụ thể cho trang chủ --}}
@section( 'description', 'MinhTrietEras cung cấp các giáo trình AI, công cụ tạo mã QR, tài nguyên lập trình và các bài viết hướng dẫn chuyên sâu để giúp bạn làm việc hiệu quả hơn.')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    {{-- Cập nhật grid thành 3 cột trên màn hình lớn (lg:grid-cols-3) --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 items-stretch">

        {{-- Card 1: Giáo trình AI --}}
        <a href="{{ route('course.index') }}" class="group block bg-white/50 backdrop-blur-md p-8 rounded-2xl border border-white/30 shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 flex flex-col">
            <div class="flex-grow">
                <div class="flex items-center justify-center h-16 w-16 mb-6 bg-indigo-500/20 rounded-xl">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-9 w-9 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 01-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 013.09-3.09L12 5.25l2.846.813a4.5 4.5 0 013.09 3.09L21.75 12l-2.846.813a4.5 4.5 0 01-3.09 3.09z" />
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-2">Giáo trình Ứng dụng AI</h3>
                <p class="text-gray-600">Tối ưu hóa hiệu suất làm việc và giải quyết vấn đề hiệu quả bằng sức mạnh của AI.</p>
            </div>
            <div class="mt-6">
                <span class="font-semibold text-indigo-600 group-hover:underline">
                    Bắt đầu khám phá →
                </span>
            </div>
        </a>

        {{-- Card 2: Tài nguyên & Tải về --}}
        <a href="{{ route('resource') }}" class="group block bg-white/50 backdrop-blur-md p-8 rounded-2xl border border-white/30 shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 flex flex-col">
            <div class="flex-grow">
                <div class="flex items-center justify-center h-16 w-16 mb-6 bg-teal-500/20 rounded-xl">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-9 w-9 text-teal-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 9.776c.112-.017.227-.026.344-.026h15.812c.117 0 .232.009.344.026m-16.5 0a2.25 2.25 0 00-1.883 2.542l.857 6a2.25 2.25 0 002.227 1.932H19.05a2.25 2.25 0 002.227-1.932l.857-6a2.25 2.25 0 00-1.883-2.542m-16.5 0V6A2.25 2.25 0 016 3.75h3.879a1.5 1.5 0 011.06.44l2.122 2.12a1.5 1.5 0 001.06.44H18A2.25 2.25 0 0120.25 9v.776" />
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-2">Tài nguyên & Tải về</h3>
                <p class="text-gray-600">Các công cụ và tài liệu chọn lọc để tăng tốc hiệu suất công việc của bạn.</p>
            </div>
            <div class="mt-6">
                <span class="font-semibold text-teal-600 group-hover:underline">
                    Xem tài nguyên →
                </span>
            </div>
        </a>
        
        {{-- CARD MỚI: CÔNG CỤ TẠO MÃ QR --}}
        <a href="{{ route('tools.qrcode') }}" class="group block bg-white/50 backdrop-blur-md p-8 rounded-2xl border border-white/30 shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 flex flex-col">
            <div class="flex-grow">
                <div class="flex items-center justify-center h-16 w-16 mb-6 bg-sky-500/20 rounded-xl">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-9 w-9 text-sky-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 4.875c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5A1.125 1.125 0 013.75 9.375v-4.5zM3.75 14.625c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5a1.125 1.125 0 01-1.125-1.125v-4.5zM13.5 4.875c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5A1.125 1.125 0 0113.5 9.375v-4.5zM15.75 14.625c0 .621.504 1.125 1.125 1.125h1.5a1.125 1.125 0 011.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125h-1.5a1.125 1.125 0 01-1.125-1.125v-1.5a1.125 1.125 0 011.125-1.125z" />
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-2">Công cụ tạo mã QR</h3>
                <p class="text-gray-600">Tạo mã QR nhanh chóng và tùy biến cho liên kết, văn bản, thông tin liên hệ...</p>
            </div>
            <div class="mt-6">
                <span class="font-semibold text-sky-600 group-hover:underline">
                    Tạo mã ngay →
                </span>
            </div>
        </a>

    </div>
</div>

{{-- Footer không cần thay đổi, nó được kế thừa từ layout --}}
@endsection

@section('scripts')
{{-- Trang này không cần script riêng, nhưng để trống để tương thích layout --}}
@endsection