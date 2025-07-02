@extends('application')

@section('title', 'Giáo trình Ứng dụng AI trong Tin học Văn phòng')

@section('content')
    <div class="max-w-6xl mx-auto px-6 py-12">
        <div class="bg-white/80 backdrop-blur-md p-8 rounded-lg shadow-lg border border-white/20">

    {{-- Giới thiệu khóa học --}}
            <div class="text-center mb-12">
                <h1 class="text-4xl font-bold text-gray-900 mb-4">GIÁO TRÌNH ỨNG DỤNG TRÍ TUỆ NHÂN TẠO (AI)</h1>
                <p class="text-lg text-gray-700 max-w-3xl mx-auto">Khám phá cách tối ưu hóa hiệu suất làm việc, tăng cường sáng tạo và giải quyết vấn đề hiệu quả bằng cách tận dụng sức mạnh của Trí tuệ Nhân tạo.</p>
            </div>

            {{-- Mục tiêu, Đối tượng, Yêu cầu --}}
            <div class="grid md:grid-cols-3 gap-8 mb-12 text-center">
                <div class="bg-white/50 p-6 rounded-xl border border-white/30">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Mục tiêu khóa học</h3>
                    <p class="text-gray-600">Phát triển kỹ năng sử dụng thành thạo Gemini, ChatGPT, NotebookLM để giải quyết các vấn đề thực tế, nâng cao tư duy phản biện và tối ưu hóa hiệu suất qua Prompt Engineering.</p>
                </div>
                <div class="bg-white/50 p-6 rounded-xl border border-white/30">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Đối tượng học viên</h3>
                    <p class="text-gray-600">Nhân viên văn phòng, sinh viên, và bất kỳ ai mong muốn khám phá và tận dụng AI để tối ưu hóa công việc và cuộc sống cá nhân.</p>
                </div>
                <div class="bg-white/50 p-6 rounded-xl border border-white/30">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Yêu cầu kiến thức</h3>
                    <p class="text-gray-600">Chỉ cần kiến thức cơ bản về tin học văn phòng và khả năng sử dụng internet. Mọi thứ khác sẽ được hướng dẫn từ đầu.</p>
                </div>
            </div>

            {{-- Cấu trúc khóa học --}}
            <div class="mb-12">
                <h2 class="text-3xl font-bold text-center text-gray-900 mb-8">Chọn một chương để bắt đầu hành trình của bạn!</h2>
                <div class="space-y-6">

                    {{-- ** CẬP NHẬT BỐ CỤC BÊN TRONG CARD ĐỂ RESPONSIVE HƠN --}}

                    {{-- Chương 1 --}}
                    <a href="{{ route('course.chuong1') }}" class="block p-6 bg-gradient-to-r from-sky-100 to-blue-100 rounded-xl shadow-md hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-4">
                            <div class="flex-grow">
                                <h3 class="text-2xl font-bold text-sky-800">Chương 1: Tổng quan về AI</h3>
                                <p class="text-gray-700 mt-1">Giới thiệu tổng quan về AI và các công cụ phổ biến.</p>
                            </div>

                        </div>
                    </a>
                    
                    {{-- Chương 2 --}}
                    <a href="{{ route('course.chuong2') }}" class="block p-6 bg-gradient-to-r from-teal-100 to-cyan-100 rounded-xl shadow-md hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-4">
                            <div class="flex-grow">
                                <h3 class="text-2xl font-bold text-teal-800">Chương 2: Nghệ thuật Tối ưu Prompt</h3>
                                <p class="text-gray-700 mt-1">Kỹ năng thiết yếu để tương tác hiệu quả với AI.</p>
                            </div>

                        </div>
                    </a>
                    
                    {{-- Chương 3 & 4 --}}
                    <a href="{{ route('course.chuong3') }}" class="block p-6 bg-gradient-to-r from-purple-100 to-indigo-100 rounded-xl shadow-md hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-4">
                            <div class="flex-grow">
                                <h3 class="text-2xl font-bold text-purple-800">Chương 3 & 4: Thực hành chuyên sâu (Gemini & ChatGPT)</h3>
                                <p class="text-gray-700 mt-1">Khai thác sức mạnh của Gemini và ChatGPT qua các bài tập thực tế.</p>
                            </div>

                        </div>
                    </a>

                    {{-- Chương 5 --}}
                    <a href="{{ route('course.chuong5') }}" class="block p-6 bg-gradient-to-r from-amber-100 to-orange-100 rounded-xl shadow-md hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-4">
                            <div class="flex-grow">
                                <h3 class="text-2xl font-bold text-amber-800">Chương 5: Công cụ chuyên biệt</h3>
                                <p class="text-gray-700 mt-1">Làm chủ NotebookLM và khám phá lập trình No-code.</p>
                            </div>

                        </div>
                    </a>
                </div>
            </div>
            </div>
    </div>
@endsection