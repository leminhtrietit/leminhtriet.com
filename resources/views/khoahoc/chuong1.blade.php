@extends('application')

@section('title', 'Chương 1: Tổng quan về AI')

@section('content')
<div class="max-w-6xl mx-auto px-6 py-4">
            <div class="bg-white/80 backdrop-blur-md p-8 rounded-lg shadow-lg border border-white/20">

<div class="flex items-center mb-8">
        <a href="{{ route('course.index') }}" class="text-indigo-600 hover:text-indigo-800 mr-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm.707-10.293a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L9.414 11H13a1 1 0 100-2H9.414l1.293-1.293z" clip-rule="evenodd" />
            </svg>
        </a>
        <div>
            <h1 class="text-3xl font-bold text-gray-900">Chương 1: Tổng quan về AI</h1>
            <p class="text-lg text-gray-600">Nền tảng vững chắc để bạn bắt đầu hành trình chinh phục Trí tuệ Nhân tạo.</p>
        </div>
    </div>
    
    <div class="space-y-16">
        {{-- Phần 1: Giới thiệu AI --}}
        <section>
            <h2 class="text-2xl font-semibold text-gray-800 mb-6 border-l-4 border-indigo-500 pl-4">1.1. Trí tuệ Nhân tạo (AI) là gì?</h2>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-indigo-50 p-6 rounded-xl border border-indigo-200">
                    <h3 class="font-bold text-xl text-indigo-800 mb-3">Khái niệm cốt lõi</h3>
                    <p class="text-indigo-900">Trí tuệ Nhân tạo (AI) là lĩnh vực khoa học máy tính tạo ra các máy móc có khả năng mô phỏng trí thông minh của con người.</p>
                    <p class="text-indigo-900 mt-2">Nó bao gồm nhiều công nghệ như Học máy, Xử lý ngôn ngữ tự nhiên, Thị giác máy tính...</p>
                </div>
                <div class="bg-green-50 p-6 rounded-xl border border-green-200">
                    <h3 class="font-bold text-xl text-green-800 mb-3">Lợi ích trong kỷ nguyên số</h3>
                    <ul class="space-y-2 text-green-900">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 mr-2 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <span><strong class="font-semibold">Tự động hóa & Tối ưu hóa:</strong> Tăng hiệu suất công việc, giảm thiểu sai sót.</span>
                        </li>
                        <li class="flex items-start">
                             <svg class="w-5 h-5 mr-2 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                            <span><strong class="font-semibold">Trợ lý cá nhân:</strong> Quản lý lịch trình, tìm kiếm thông tin, hỗ trợ cuộc sống.</span>
                        </li>
                         <li class="flex items-start">
                           <svg class="w-5 h-5 mr-2 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                            <span><strong class="font-semibold">Cải thiện dịch vụ:</strong> Chatbot thông minh, phân tích phản hồi khách hàng.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        {{-- Phần 2: Khám phá công cụ (Dạng Tab) --}}
        <section>
            <h2 class="text-2xl font-semibold text-gray-800 mb-6 border-l-4 border-indigo-500 pl-4">1.2. Khám phá "Hộp đồ nghề" AI</h2>
            <div>
                <div class="border-b border-gray-200">
                    <nav class="flex -mb-px space-x-6" aria-label="Tabs">
                        <button class="ai-tool-tab active-tab group" data-target="gemini">
                            <img src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png" alt="Google" class="h-5 mr-2"> Google Gemini
                        </button>
                        <button class="ai-tool-tab group" data-target="chatgpt">
                            <svg class="w-5 h-5 mr-2" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M35.63,13.23A16.67,16.67,0,0,0,20.5,5.5a16.67,16.67,0,0,0-15.13,9,15.74,15.74,0,0,0,.6,15.22,16.67,16.67,0,0,0,29.66-8.52,15.74,15.74,0,0,0-.06-2.48Z" style="fill:#10a37f"></path><path d="M20.5,5.5A16.67,16.67,0,0,0,5.37,14.47a15.74,15.74,0,0,0,.6,15.22,16.67,16.67,0,0,0,14.53,5.61V34.5a16.65,16.65,0,0,0,15.13-9A15.74,15.74,0,0,0,35.57,13,16.54,16.54,0,0,0,20.5,5.5Z" style="opacity:0.4;fill:#fff"></path></svg>
                            OpenAI ChatGPT
                        </button>
                        <button class="ai-tool-tab group" data-target="notebooklm">
                            <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M17 2H7C5.9 2 5 2.9 5 4V20C5 21.1 5.9 22 7 22H17C18.1 22 19 21.1 19 20V4C19 2.9 18.1 2 17 2M17 20H7V4H17V20M15 18H9V16H15V18M15 14H9V12H15V14M15 10H9V8H15V10Z"></path></svg>
                            NotebookLM
                        </button>
                    </nav>
                </div>

                <div class="mt-6">
                    <div id="gemini" class="ai-tool-content space-y-4">
                        <p class="text-gray-700">Nền tảng AI đa phương thức của Google, tích hợp sâu vào hệ sinh thái Workspace (Gmail, Drive, Docs...).</p>
                        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4">
                            <div class="p-4 bg-gray-100 rounded-lg"><strong>Miễn phí:</strong> Truy cập mô hình Gemini Pro cơ bản.</div>
                            <div class="p-4 bg-blue-100 rounded-lg"><strong>AI Pro:</strong> Mô hình 2.5 Pro mạnh hơn, 2TB lưu trữ, tích hợp sâu.</div>
                            <div class="p-4 bg-purple-100 rounded-lg"><strong>AI Ultra:</strong> Tất cả tính năng Pro, mô hình cao cấp nhất, 30TB lưu trữ, chia sẻ gia đình.</div>
                        </div>
                    </div>
                    <div id="chatgpt" class="ai-tool-content hidden space-y-4">
                        <p class="text-gray-700">Mô hình ngôn ngữ hàng đầu của OpenAI, nổi tiếng với khả năng hội thoại tự nhiên và sáng tạo.</p>
                        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4">
                            <div class="p-4 bg-gray-100 rounded-lg"><strong>Miễn phí:</strong> Truy cập GPT-4.1 mini, có giới hạn các tính năng nâng cao.</div>
                            <div class="p-4 bg-green-100 rounded-lg"><strong>Plus ($20):</strong> Mở rộng giới hạn, truy cập các mô hình mạnh hơn, chế độ giọng nói, video.</div>
                            <div class="p-4 bg-teal-100 rounded-lg"><strong>Pro ($200):</strong> Truy cập không giới hạn, các mô hình chuyên nghiệp nhất, nhiều sức mạnh tính toán hơn.</div>
                        </div>
                    </div>
                    <div id="notebooklm" class="ai-tool-content hidden space-y-4">
                        <p class="text-gray-700">Trợ lý nghiên cứu cá nhân của Google, giúp bạn tổng hợp, phân tích và đặt câu hỏi trên chính tài liệu của mình.</p>
                        <div class="grid sm:grid-cols-2 gap-4">
                             <div class="p-4 bg-gray-100 rounded-lg"><strong>Miễn phí:</strong> Tải lên nhiều loại tệp, tạo tóm tắt, FAQ, timeline và nhận câu trả lời kèm trích dẫn.</div>
                             <div class="p-4 bg-yellow-100 rounded-lg"><strong>Pro (Tích hợp):</strong> Mở rộng hạn mức, tùy chỉnh câu trả lời, chia sẻ cho nhóm và tăng cường bảo mật.</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Phần 3: Hướng dẫn chọn công cụ (Dạng Accordion) --}}
        <section>
            <h2 class="text-2xl font-semibold text-gray-800 mb-6 border-l-4 border-indigo-500 pl-4">1.3. 4 Bước chọn công cụ AI "chân ái"</h2>
            <div class="space-y-4" id="accordion-container">
                <div class="accordion-item border rounded-xl overflow-hidden">
                    <button class="accordion-header w-full flex justify-between items-center text-left p-5 bg-gray-50 hover:bg-gray-100">
                        <span class="font-semibold text-lg text-gray-700">Bước 1: Xác định rõ nhu cầu & mục tiêu</span>
                        <svg class="accordion-icon w-6 h-6 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="p-5 border-t">
                            <p class="text-gray-600">Đây là bước quan trọng nhất. Hãy tự hỏi: Bạn cần AI để làm gì?</p>
                            <ul class="list-disc pl-5 mt-3 text-gray-600 space-y-1">
                                <li>Hỗ trợ viết lách (email, báo cáo, nội dung sáng tạo...)?</li>
                                <li>Phân tích dữ liệu (tạo biểu đồ, tìm xu hướng...)?</li>
                                <li>Thiết kế đồ họa, lập kế hoạch, hay học tập?</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item border rounded-xl overflow-hidden">
                    <button class="accordion-header w-full flex justify-between items-center text-left p-5 bg-gray-50 hover:bg-gray-100">
                        <span class="font-semibold text-lg text-gray-700">Bước 2: Tìm hiểu & so sánh</span>
                        <svg class="accordion-icon w-6 h-6 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                     <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="p-5 border-t text-gray-600">
                            <p>Đọc đánh giá từ các trang uy tín, xem video demo trên YouTube, tham gia các cộng đồng AI trên mạng xã hội để học hỏi kinh nghiệm thực tế. Đừng quên ưu tiên các công cụ tích hợp tốt với hệ sinh thái bạn đang dùng (Google Workspace, Microsoft 365...).</p>
                        </div>
                    </div>
                </div>
                 <div class="accordion-item border rounded-xl overflow-hidden">
                    <button class="accordion-header w-full flex justify-between items-center text-left p-5 bg-gray-50 hover:bg-gray-100">
                        <span class="font-semibold text-lg text-gray-700">Bước 3: Trải nghiệm thực tế</span>
                        <svg class="accordion-icon w-6 h-6 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="p-5 border-t text-gray-600">
                           <p>Lý thuyết là một chuyện, thực hành lại là chuyện khác. Hãy tận dụng các phiên bản miễn phí hoặc dùng thử. Tự mình thực hiện các tác vụ nhỏ để đánh giá chất lượng đầu ra, tốc độ và sự thân thiện của giao diện.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item border rounded-xl overflow-hidden">
                    <button class="accordion-header w-full flex justify-between items-center text-left p-5 bg-gray-50 hover:bg-gray-100">
                        <span class="font-semibold text-lg text-gray-700">Bước 4: Xem xét chi phí & giá trị lâu dài</span>
                        <svg class="accordion-icon w-6 h-6 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                         <div class="p-5 border-t text-gray-600">
                           <p>Đánh giá kỹ lưỡng giữa lợi ích (tiết kiệm thời gian, tăng năng suất) và chi phí bỏ ra. Đôi khi, một công cụ miễn phí đáp ứng tốt 80% nhu cầu lại hiệu quả hơn một công cụ trả phí đắt tiền mà bạn không khai thác hết.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
            </div>

        </div>
    

    {{-- CSS và JS nội bộ cho các thành phần tương tác --}}
    <style>
        .active-tab {
            border-color: #4f46e5; /* indigo-600 */
            color: #4f46e5;
        }
        .ai-tool-tab {
            @apply flex items-center whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm text-gray-500 hover:text-gray-700 hover:border-gray-300 transition-colors duration-200;
        }
        .accordion-item.active .accordion-content {
            max-height: 500px; /* Or a large enough value */
        }
        .accordion-item.active .accordion-icon {
            transform: rotate(180deg);
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Tab functionality
            const tabs = document.querySelectorAll('.ai-tool-tab');
            const contents = document.querySelectorAll('.ai-tool-content');

            tabs.forEach(tab => {
                tab.addEventListener('click', () => {
                    const target = tab.getAttribute('data-target');

                    tabs.forEach(t => t.classList.remove('active-tab'));
                    tab.classList.add('active-tab');

                    contents.forEach(content => {
                        if (content.id === target) {
                            content.classList.remove('hidden');
                        } else {
                            content.classList.add('hidden');
                        }
                    });
                });
            });

            // Accordion functionality
            const accordionItems = document.querySelectorAll('.accordion-item');

            accordionItems.forEach(item => {
                const header = item.querySelector('.accordion-header');
                header.addEventListener('click', () => {
                    // Close other items if you want only one open at a time
                    /*
                    accordionItems.forEach(otherItem => {
                        if (otherItem !== item && otherItem.classList.contains('active')) {
                            otherItem.classList.remove('active');
                        }
                    });
                    */
                    // Toggle current item
                    item.classList.toggle('active');
                });
            });
        });
    </script>
@endsection