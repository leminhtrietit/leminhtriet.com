@extends('application')

@section('title', 'Giáo trình Ứng dụng Trí tuệ nhân tạo AI trong Văn phòng')

@section('content')
<div class="max-w-6xl mx-auto px-6 py-12">
    <div class="bg-white/80 backdrop-blur-md p-8 rounded-lg shadow-lg border border-white/20">

        {{-- Giới thiệu khóa học --}}
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-900 mb-4">GIÁO TRÌNH ỨNG DỤNG TRÍ TUỆ NHÂN TẠO (AI) TRONG VĂN PHÒNG</h1>
            <p class="text-lg text-gray-700 max-w-3xl mx-auto">Khám phá cách tối ưu hóa hiệu suất làm việc, tăng cường sáng tạo và giải quyết vấn đề hiệu quả bằng cách tận dụng sức mạnh của Trí tuệ Nhân tạo.</p>
        </div>

        {{-- Mục tiêu, Đối tượng, Yêu cầu --}}
        <div class="grid md:grid-cols-3 gap-8 mb-16 text-center">
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

        {{-- Cấu trúc khóa học - THIẾT KẾ MỚI --}}
        <div>
            <h2 class="text-3xl font-bold text-center text-gray-900 mb-10">Chọn một chương để bắt đầu hành trình của bạn!</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                {{-- Chương 1 --}}
                <a href="{{ route('course.chuong1') }}" class="group relative block p-8 bg-gradient-to-br from-sky-100 to-blue-200 rounded-2xl shadow-md hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 overflow-hidden">
                    <div class="absolute -top-2 -right-2 text-8xl font-black text-gray-900/10 opacity-80 group-hover:scale-110 transition-transform duration-300">01</div>
                    <div class="relative z-10">
                        <div class="flex items-center justify-center h-16 w-16 mb-6 bg-blue-500/20 rounded-xl">
                             <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" /></svg>
                        </div>
                        <h3 class="text-2xl font-bold text-sky-800">Tổng quan về AI</h3>
                        <p class="text-gray-700 mt-1">Giới thiệu tổng quan và các công cụ phổ biến.</p>
                    </div>
                </a>
                
                {{-- Chương 2 - HIỆU ỨNG CHỮ MỜ --}}
                <a href="{{ route('course.chuong2') }}" class="group relative block p-8 bg-gradient-to-br from-teal-100 to-cyan-200 rounded-2xl shadow-md hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 overflow-hidden">
                    <span class="absolute top-8 left-8 text-3xl font-mono text-cyan-700/20 filter blur-sm group-hover:blur-none transition-all duration-300">{"Prompt"}</span>
                    <span class="absolute bottom-8 right-8 text-3xl font-mono text-teal-700/20 filter blur-sm group-hover:blur-none transition-all duration-300">[Input]</span>
                    <div class="absolute -top-2 -right-2 text-8xl font-black text-gray-900/10 opacity-80 group-hover:scale-110 transition-transform duration-300">02</div>
                     <div class="relative z-10">
                        <div class="flex items-center justify-center h-16 w-16 mb-6 bg-cyan-500/20 rounded-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-cyan-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" /></svg>
                        </div>
                        <h3 class="text-2xl font-bold text-teal-800">Nghệ thuật Prompt</h3>
                        <p class="text-gray-700 mt-1">Kỹ năng thiết yếu để "giao tiếp" hiệu quả với AI.</p>
                    </div>
                </a>
                
                {{-- Chương 3 - HIỆU ỨNG VIỀN GRADIENT --}}
                <div class="group relative p-0.5 rounded-2xl shadow-md hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 bg-gradient-to-br from-blue-400 via-green-500 to-yellow-400">
                    <a href="{{ route('course.chuong3') }}" class="relative block p-8 bg-white rounded-[14px] overflow-hidden h-full">
                        <div class="absolute -top-2 -right-2 text-8xl font-black text-gray-900/10 opacity-80 group-hover:scale-110 transition-transform duration-300">03</div>
                        <div class="relative z-10">
                            <div class="flex items-center justify-center h-16 w-16 mb-6 bg-indigo-500/20 rounded-xl">
                                 <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-indigo-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 01-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 013.09-3.09L12 5.25l2.846.813a4.5 4.5 0 013.09 3.09L21.75 12l-2.846.813a4.5 4.5 0 01-3.09 3.09z" /></svg>
                            </div>
                            <h3 class="text-2xl font-bold text-purple-800">Sức mạnh Gemini</h3>
                            <p class="text-gray-700 mt-1">Khai thác trợ lý AI của Google qua các bài tập thực tế.</p>
                        </div>
                    </a>
                </div>

                {{-- Chương 4 --}}
                 <a href="{{ route('course.chuong4') }}" class="group relative block p-8 bg-gradient-to-br from-rose-100 to-pink-200 rounded-2xl shadow-md hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 overflow-hidden">
                    <div class="absolute -top-2 -right-2 text-8xl font-black text-gray-900/10 opacity-80 group-hover:scale-110 transition-transform duration-300">04</div>
                     <div class="relative z-10">
                        <div class="flex items-center justify-center h-16 w-16 mb-6 bg-pink-500/20 rounded-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-pink-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" /></svg>
                        </div>
                        <h3 class="text-2xl font-bold text-rose-800">AI trong Văn phòng</h3>
                        <p class="text-gray-700 mt-1">Tóm tắt, soạn thảo, viết mail... chuyện nhỏ!</p>
                    </div>
                </a>

                {{-- Chương 5 - Kéo dài 2 cột --}}
                <div class="group relative p-0.5 rounded-2xl shadow-md hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 bg-gradient-to-br from-yellow-400 via-orange-500 to-red-500 lg:col-span-2">
                    <a href="{{ route('course.chuong5') }}" class="relative block p-8 bg-white rounded-[14px] overflow-hidden h-full">
                        <div class="absolute -top-2 -right-2 text-8xl font-black text-gray-900/10 opacity-80 group-hover:scale-110 transition-transform duration-300">05</div>
                        <div class="relative z-10">
                            <div class="flex items-center justify-center h-16 w-16 mb-6 bg-orange-500/20 rounded-xl">
                                 <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-orange-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 9l4-4 4 4m0 6l-4 4-4-4" /></svg>
                            </div>
                            <h3 class="text-2xl font-bold text-amber-800">Cá nhân hóa Lịch trình và Tối ưu hóa Cuộc sống với AI</h3>
                            <p class="text-gray-700 mt-1">Biến Gemini thành trợ lý cá nhân và kết nối với Google Calendar.</p>
                        </div>
                    </a>
                </div>

                {{-- Chuyên đề Storybook - Kéo dài full hàng cuối --}}
                <div class="group relative lg:col-span-3">
                     <a href="{{ route('course.storybook') }}" class="block p-8 bg-gradient-to-br from-purple-100 to-violet-200 rounded-2xl shadow-md hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 overflow-hidden h-full">
                        <div class="absolute -top-2 -right-2 text-8xl font-black text-gray-900/10 opacity-80 group-hover:scale-110 transition-transform duration-300">★</div>
                        <div class="relative z-10 md:flex md:items-center md:gap-8">
                            <div class="flex-shrink-0 flex items-center justify-center h-20 w-20 mb-6 md:mb-0 bg-violet-500/20 rounded-xl">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-violet-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-purple-800">Chuyên đề: Storybook trong Gemini</h3>
                                <p class="text-gray-700 mt-1">Học cách biến ý tưởng thành câu chuyện hoàn chỉnh với văn bản và hình ảnh minh họa.</p>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection