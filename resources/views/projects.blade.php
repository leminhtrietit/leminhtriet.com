@extends( 'layouts.app')

@section('title', 'Các dự án của MinhTrietEras')

@section('content')
<div class="max-w-6xl mx-auto px-6 py-12">
    <div class="bg-white/80 backdrop-blur-md p-8 rounded-2xl shadow-lg border border-white/20">

        {{-- Header của trang --}}
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900">Dự án & Ứng dụng</h1>
            <p class="text-lg text-gray-600 mt-3 max-w-3xl mx-auto">Giới thiệu các sản phẩm, công cụ và ứng dụng được phát triển bởi MinhTrietEras nhằm giải quyết các vấn đề thực tiễn trong công việc và học tập.</p>
        </div>

        {{-- Danh sách dự án --}}
        <div class="space-y-10">

            <div class="group grid grid-cols-1 md:grid-cols-5 gap-8 items-center bg-white/50 backdrop-blur-sm p-8 rounded-2xl border border-white/30 hover:shadow-xl transition-all duration-300">
                
                {{-- Cột hình ảnh --}}
                <div class="md:col-span-2">
                    <img src="https://img.icons8.com/fluency/256/windows-11.png" alt="MOS Test Prep on Windows" class="rounded-lg w-full h-auto object-cover group-hover:scale-105 transition-transform duration-300">
                </div>

                {{-- Cột nội dung --}}
                <div class="md:col-span-3">
                    <span class="inline-block bg-blue-100 text-blue-800 text-sm font-semibold px-3 py-1 rounded-full mb-4">
                        Nền tảng Windows
                    </span>
                    <h2 class="text-3xl font-bold text-gray-900 mb-3">Phần mềm Ôn luyện thi MOS</h2>
                    <p class="text-gray-700 leading-relaxed mb-6">
                        Trải nghiệm ôn luyện thi chứng chỉ Tin học văn phòng MOS (Microsoft Office Specialist) trên một nền tảng hoàn toàn mới, được thiết kế chuyên biệt cho hệ điều hành Windows. Giao diện trực quan, bộ đề thi cập nhật liên tục và chi phí tối ưu hơn đến 50% so với các giải pháp hiện có.
                    </p>
                    <ul class="space-y-3 text-gray-600 mb-8">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 mr-3 text-green-500 flex-shrink-0 mt-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" /></svg>
                            <span><strong class="text-gray-800">Tương thích hoàn hảo:</strong> Tối ưu hóa cho Windows, mang lại trải nghiệm mượt mà và ổn định.</span>
                        </li>
                        <li class="flex items-start">
                             <svg class="w-5 h-5 mr-3 text-green-500 flex-shrink-0 mt-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" /></svg>
                            <span><strong class="text-gray-800">Chi phí tiết kiệm:</strong> Giải pháp ôn thi hiệu quả với mức giá cạnh tranh, dễ dàng tiếp cận cho sinh viên.</span>
                        </li>
                         <li class="flex items-start">
                             <svg class="w-5 h-5 mr-3 text-green-500 flex-shrink-0 mt-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" /></svg>
                            <span><strong class="text-gray-800">Nội dung phong phú:</strong> Ngân hàng câu hỏi đa dạng, bám sát cấu trúc đề thi thật và được cập nhật thường xuyên.</span>
                        </li>
                    </ul>
                    <div class="flex items-center space-x-4">
                        <a href="#" class="inline-block bg-indigo-600 text-white font-semibold px-6 py-3 rounded-lg hover:bg-indigo-700 transition-colors duration-300">
                            Tìm hiểu thêm
                        </a>
                         <span class="text-sm font-medium text-gray-500">Trạng thái: Đang phát triển</span>
                    </div>
                </div>
            </div>

            </div>

    </div>
</div>
@endsection