
@extends('application')  {{-- Use the new layout --}}

@section('title', 'Portfolio') {{-- Set the title --}}

@section('content')
    <!-- ======================= 2. CONTENT SECTION (LIQUID GLASS STYLE) ======================= -->
            <div class="max-w-6xl mx-auto px-6 py-12">
            <!-- ** CẬP NHẬT: WIDGETS VỚI GIAO DIỆN SÁNG ** -->


<div class="bg-white/80 backdrop-blur-md p-8 rounded-lg shadow-lg border border-white/20">
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center">
        <div class="md:col-span-1 flex justify-center">
            <img src="{{ asset('assets/images/DSC00345.png') }}" alt="Ảnh đại diện" class="rounded-full h-48 w-48 object-cover border-4 border-white/50 shadow-lg">
        </div>
        <div class="md:col-span-2 text-center md:text-left">
            <h2 class="text-3xl font-bold text-gray-900 mb-2">Chào bạn, mình là Triết!</h2>
            <p class="text-lg text-gray-700">Một nhà giáo dục IT "vui tính" với đam mê biến những công cụ văn phòng trở nên mạnh mẽ hơn nhờ sức mạnh của Trí tuệ Nhân tạo. Cùng mình khám phá cách làm việc thông minh hơn, không phải chăm chỉ hơn nhé!</p>
        </div>
    </div>

    <div class="h-px bg-gray-900/10 my-12"></div>

    <div>
        <h2 class="text-3xl font-bold text-gray-900 mb-6 text-center">Kỹ Năng Nổi Bật</h2>
        <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-4 gap-6">
            <div class="bg-white/50 backdrop-blur-sm p-4 rounded-2xl border border-white/30 flex flex-col items-center text-center transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl hover:border-blue-500/50">
                <svg class="w-12 h-12 text-blue-500 mb-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" /></svg>
                <h3 class="font-semibold text-gray-800">Tin học văn phòng</h3>
            </div>
            <div class="bg-white/50 backdrop-blur-sm p-4 rounded-2xl border border-white/30 flex flex-col items-center text-center transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl hover:border-yellow-500/50">
                <svg class="w-12 h-12 text-yellow-500 mb-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" /></svg>
                <h3 class="font-semibold text-gray-800">Google Workspace</h3>
            </div>
            <div class="bg-white/50 backdrop-blur-sm p-4 rounded-2xl border border-white/30 flex flex-col items-center text-center transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl hover:border-purple-500/50">
               <svg class="w-12 h-12 text-purple-500 mb-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 3v1.5M4.5 8.25H3m18 0h-1.5M4.5 12H3m18 0h-1.5m-15 3.75H3m18 0h-1.5M8.25 19.5V21M12 3v1.5m0 16.5V21m3.75-18v1.5m0 16.5V21m-9-1.5h10.5a2.25 2.25 0 002.25-2.25V6.75a2.25 2.25 0 00-2.25-2.25H6.75A2.25 2.25 0 004.5 6.75v10.5a2.25 2.25 0 002.25 2.25z" /></svg>
                <h3 class="font-semibold text-gray-800">AI Tools</h3>
            </div>
            <div class="bg-white/50 backdrop-blur-sm p-4 rounded-2xl border border-white/30 flex flex-col items-center text-center transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl hover:border-teal-500/50">
                <svg class="w-12 h-12 text-teal-500 mb-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5" /></svg>
                <h3 class="font-semibold text-gray-800">Web Developer</h3>
            </div>
        </div>
    </div>

    <div class="h-px bg-gray-900/10 my-12"></div>
    
    <div>
        <h2 class="text-3xl font-bold text-gray-900 mb-6 text-center">Kinh Nghiệm Làm Việc</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            
            <div class="bg-white/50 backdrop-blur-sm p-6 rounded-2xl border border-white/30 transition-all duration-300 hover:shadow-xl hover:border-gray-400/50">
                <h3 class="text-xl font-bold text-gray-800">Teacher</h3>
                <p class="text-sm text-gray-600 font-semibold mt-1">Sao Viet Information Technology Center - District 7 Branch</p>
                <p class="text-xs text-gray-500 mb-4">March 2023 to March 2024</p>
                <ul class="list-disc list-inside text-gray-700 space-y-2 text-sm">
                    <li>Taught students according to the established curriculum.</li>
                    <li>Introduced new concepts and their practical applications in the workplace.</li>
                    <li>Assessed student performance and provided learning support.</li>
                    <li>Created and maintained instructional materials.</li>
                </ul>
            </div>

            <div class="bg-white/50 backdrop-blur-sm p-6 rounded-2xl border border-white/30 transition-all duration-300 hover:shadow-xl hover:border-gray-400/50">
                <h3 class="text-xl font-bold text-gray-800">Branch Director</h3>
                <p class="text-sm text-gray-600 font-semibold mt-1">Sao Viet Information Technology Center - Tan Binh Branch</p>
                <p class="text-xs text-gray-500 mb-4">March 2024 to Feb 2025</p>
                <ul class="list-disc list-inside text-gray-700 space-y-2 text-sm">
                    <li>Developed training programs.</li>
                    <li>Managed student body.</li>
                    <li>Handled financial transactions.</li>
                    <li>Supervised teaching staff.</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="h-px bg-gray-900/10 my-12"></div>

    <div>
        <h2 class="text-3xl font-bold text-gray-900 mb-6 text-center">Chứng Chỉ & Công Nhận</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white/50 backdrop-blur-sm p-4 rounded-2xl border border-white/30 flex items-center space-x-4 transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl hover:border-red-500/50">
                <div class="flex-shrink-0 bg-red-500/10 p-3 rounded-full">
                    <svg class="w-8 h-8 text-red-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.4-1.593 3.068M15.75 21a9 9 0 11-1.06-1.06M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                </div>
                <div>
                    <h3 class="font-bold text-gray-900">MOS 365 Associate</h3>
                    <p class="text-sm text-gray-600">Word, Excel, PowerPoint</p>
                </div>
            </div>
            <div class="bg-white/50 backdrop-blur-sm p-4 rounded-2xl border border-white/30 flex items-center space-x-4 transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl hover:border-teal-500/50">
                <div class="flex-shrink-0 bg-teal-500/10 p-3 rounded-full">
                   <svg class="w-8 h-8 text-teal-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 21l5.25-11.25L21 21m-9-3h7.5M3 5.621a48.474 48.474 0 016-.371m0 0c1.12 0 2.233.038 3.334.114M9 5.25V3m3.334 2.364C13.18 7.061 14.12 8 15.17 8c1.05 0 1.99-.939 2.667-2.636m-1.026 9.37a48.461 48.461 0 01-4.437.28c-1.12 0-2.233-.038-3.334-.113a48.461 48.461 0 01-4.437-.28" /></svg>
                </div>
                <div>
                    <h3 class="font-bold text-gray-900">APTIS</h3>
                    <p class="text-sm text-gray-600">B2 Certificate</p>
                </div>
            </div>
            <div class="bg-white/50 backdrop-blur-sm p-4 rounded-2xl border border-white/30 flex items-center space-x-4 transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl hover:border-amber-500/50">
                <div class="flex-shrink-0 bg-amber-500/10 p-3 rounded-full">
                   <svg class="w-8 h-8 text-amber-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6.75 7.5l3 2.25-3 2.25m4.5 0h3m-9 8.25h13.5A2.25 2.25 0 0021 18V6a2.25 2.25 0 00-2.25-2.25H5.25A2.25 2.25 0 003 6v12a2.25 2.25 0 002.25 2.25z" /></svg>
                </div>
                <div>
                    <h3 class="font-bold text-gray-900">UDCNTT Cơ bản</h3>
                    <p class="text-sm text-gray-600">Chứng chỉ Quốc gia</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="h-px bg-gray-900/10 my-12"></div>

    <div>
        <h2 class="text-3xl font-bold text-gray-900 mb-6 text-center">Hoạt Động & Dự Án</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            
            <div class="bg-white/50 backdrop-blur-sm p-6 rounded-2xl border border-white/30 flex flex-col text-center items-center justify-center">
                 <h3 class="text-lg font-bold text-gray-800">Tutor</h3>
                 <p class="text-sm text-gray-600 mt-2">Secondary School, High School & Working Professionals.</p>
            </div>

            <div class="bg-white/50 backdrop-blur-sm p-6 rounded-2xl border border-white/30 flex flex-col text-center items-center justify-center">
                 <h3 class="text-lg font-bold text-gray-800">Web Builder</h3>
                 <div class="text-sm text-blue-600 mt-2 space-y-1">
                    <p><a href="http://sagribags.com" target="_blank" class="hover:underline">sagribags.com</a></p>
                    <p><a href="http://ktvinagroup.com" target="_blank" class="hover:underline">ktvinagroup.com</a></p>
                    <p><a href="http://trungtamtinhoc.com" target="_blank" class="hover:underline">trungtamtinhoc.com</a></p>
                 </div>
            </div>

            <div class="bg-white/50 backdrop-blur-sm p-6 rounded-2xl border border-white/30 flex flex-col text-center items-center justify-center md:col-span-2 lg:col-span-1">
                 <h3 class="text-lg font-bold text-gray-800">Hoạt Động Cộng Đồng</h3>
                 <div class="text-sm text-gray-600 mt-2">
                    <p>Revive Marathon Across Vietnam <span class="text-xs">(10/2019)</span></p>
                    <p>Meal preparation for the underserved <span class="text-xs">(11/2019)</span></p>
                 </div>
            </div>
        </div>
    </div>

    <div class="h-px bg-gray-900/10 my-12"></div>

    <div>
        <h2 class="text-3xl font-bold text-gray-900 mb-6 text-center">Mục Tiêu Phát Triển</h2>
        <div class="max-w-3xl mx-auto text-center">
             <p class="text-lg text-gray-700 leading-relaxed">
                "To pursue a role where I can combine creative strategies with technological solutions to achieve exceptional results and contribute to organizational success."
            </p>
        </div>
    </div>

</div>
            
        </div>
  
@endsection