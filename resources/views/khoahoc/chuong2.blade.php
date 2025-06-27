@extends('application')

@section('title', 'Chương 2: Nghệ thuật Tối ưu hóa Prompt')

@section('content')
    {{-- CSS nội bộ để xử lý các hiệu ứng và lỗi --}}
    <style>
        html {
            scroll-behavior: smooth;
        }
        .prompt-link {
            font-weight: 600;
            transition: all 0.2s ease-in-out;
            border-bottom: 2px solid transparent;
            padding-bottom: 1px;
            cursor: pointer;
        }
        .prompt-link:hover {
            filter: brightness(1.15);
            border-bottom-color: currentColor;
        }
        .theory-card {
            /* Thêm khoảng đệm ở trên để không bị header che mất khi jump link */
            scroll-margin-top: 120px; 
            transition: all 0.3s ease-in-out;
        }
        .theory-card:target {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0,0,0,0.15), 0 0 0 2px #4f46e5; /* Thêm viền màu indigo khi được chọn */
            background-color: white;
        }
        /* Custom scrollbar cho cột ví dụ */
        #examples-column::-webkit-scrollbar {
            width: 8px;
        }
        #examples-column::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.5);
            border-radius: 10px;
        }
        #examples-column::-webkit-scrollbar-thumb {
            background-color: rgba(128, 128, 128, 0.5);
            border-radius: 10px;
            border: 2px solid transparent;
            background-clip: content-box;
        }
        #examples-column::-webkit-scrollbar-thumb:hover {
            background-color: rgba(128, 128, 128, 0.7);
        }
    </style>

    <div class="flex items-center mb-12">
        <a href="{{ route('course.index') }}" class="text-teal-600 hover:text-teal-800 mr-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm.707-10.293a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L9.414 11H13a1 1 0 100-2H9.414l1.293-1.293z" clip-rule="evenodd" /></svg>
        </a>
        <div>
            <h1 class="text-3xl font-bold text-gray-900">Chương 2: Nghệ Thuật Tối Ưu Hóa Prompt</h1>
            <p class="text-lg text-gray-600">Làm chủ nghệ thuật "giao tiếp" với AI để đạt kết quả như ý.</p>
        </div>
    </div>
    
    <div class="space-y-12">
        {{-- PHẦN 1: ĐÃ CẬP NHẬT ICON --}}
        <section class="bg-white/60 p-6 rounded-xl border border-white/30 shadow-md hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">1. Quá trình tạo ra kết quả</h2>
            <p class="text-gray-700 mb-4">Việc tương tác với AI để đạt được kết quả mong muốn là một quá trình linh hoạt và mang tính lặp lại. AI không phải là một "hộp đen" chỉ đưa ra câu trả lời duy nhất mà là một công cụ có thể được tinh chỉnh thông qua phản hồi của bạn.</p>
            <div class="grid md:grid-cols-2 gap-4">
                <div class="bg-gray-50 p-4 rounded-lg flex items-center space-x-4 hover:bg-white transition-all duration-300">
                    <div class="flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-indigo-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0011.667 0l3.181-3.183m-4.991 0l-3.182-3.182a8.25 8.25 0 00-11.667 0l-3.181 3.182" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-800">Lặp lại & Tinh chỉnh</h4>
                        <p class="text-sm text-gray-600">Thử nghiệm và sửa đổi prompt. Coi AI như một cộng sự.</p>
                    </div>
                </div>
                 <div class="bg-gray-50 p-4 rounded-lg flex items-center space-x-4 hover:bg-white transition-all duration-300">
                    <div class="flex-shrink-0">
                         <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 01-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 013.09-3.09L12 5.25l2.846.813a4.5 4.5 0 013.09 3.09L21.75 12l-2.846.813a4.5 4.5 0 01-3.09 3.09z" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-800">Học từ phản hồi</h4>
                        <p class="text-sm text-gray-600">Phân tích kết quả, ghi nhớ cấu trúc hiệu quả để cải thiện.</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- PHẦN 2.1: CHIA 2 CỘT --}}
        <section>
            <h2 class="text-2xl font-bold text-gray-800 mb-6">2. Như thế nào là Prompt chuẩn</h2>
            <div class="grid grid-cols-1 lg:grid-cols-5 gap-8">
                {{-- CỘT TRÁI: LÝ THUYẾT 2.1 --}}
                <aside class="lg:col-span-2 lg:sticky top-28 self-start" id="prompt-theory-panel">
                    <div class="space-y-4">
                        <h3 class="text-xl font-semibold text-gray-700 border-l-4 border-teal-500 pl-3">2.1. Cấu trúc của một câu Prompt</h3>
                        <div id="component-vaitro" class="theory-card p-4 rounded-xl bg-white/70 border hover:shadow-lg hover:-translate-y-1">
                            <h5 class="font-bold text-lg text-blue-600">Vai trò / Ngữ cảnh</h5>
                            <p class="text-sm text-gray-600 mt-1">Đặt AI vào vai trò hoặc cung cấp bối cảnh.</p>
                        </div>
                        <div id="component-thongtin" class="theory-card p-4 rounded-xl bg-white/70 border hover:shadow-lg hover:-translate-y-1">
                            <h5 class="font-bold text-lg text-amber-600">Thông tin đầu vào</h5>
                            <p class="text-sm text-gray-600 mt-1">Dữ liệu, văn bản, thông tin AI cần xử lý.</p>
                        </div>
                        <div id="component-yeucau" class="theory-card p-4 rounded-xl bg-white/70 border hover:shadow-lg hover:-translate-y-1">
                            <h5 class="font-bold text-lg text-emerald-600">Yêu cầu đầu ra (Định dạng / Nội dung)</h5>
                            <p class="text-sm text-gray-600 mt-1">Nêu rõ bạn muốn AI trả lời dưới dạng nào, nội dung ra sao.</p>
                        </div>
                        <div id="component-gioihan" class="theory-card p-4 rounded-xl bg-white/70 border hover:shadow-lg hover:-translate-y-1">
                            <h5 class="font-bold text-lg text-slate-600">Giới hạn kiến thức</h5>
                            <p class="text-sm text-gray-600 mt-1">Phạm vi kiến thức AI nên hoặc không nên dựa vào.</p>
                        </div>
                        <div id="component-nhiemvu" class="theory-card p-4 rounded-xl bg-white/70 border hover:shadow-lg hover:-translate-y-1">
                            <h5 class="font-bold text-lg text-violet-600">Giao nhiệm vụ</h5>
                            <p class="text-sm text-gray-600 mt-1">Chỉ thị hành động chính mà bạn muốn AI thực hiện.</p>
                        </div>
                    </div>
                </aside>

                {{-- CỘT PHẢI: VÍ DỤ CÓ THỂ CUỘN --}}
                <main class="lg:col-span-3 space-y-8 pr-2" id="examples-column">
                     @php
                        $examples = [['title' => 'Dành cho Giáo dục IT / Tin học văn phòng','bad' => '"Viết một bài giảng về Excel."','good' => '<a href="#component-vaitro" class="prompt-link text-blue-600">Bạn là một nhà giáo dục về IT, chuyên giảng dạy tin học văn phòng.</a> <a href="#component-nhiemvu" class="prompt-link text-violet-600">Hãy viết một bài giảng ngắn gọn (khoảng 300 từ) về cách sử dụng hàm VLOOKUP trong Excel cho học viên mới bắt đầu.</a> <a href="#component-yeucau" class="prompt-link text-emerald-600">Bài giảng cần bao gồm: định nghĩa hàm, cú pháp, một ví dụ thực tế đơn giản, và các lỗi thường gặp.</a>'],['title' => 'Dành cho Phân tích Dữ liệu','bad' => '"Phân tích dữ liệu bán hàng này."','good' => '<a href="#component-vaitro" class="prompt-link text-blue-600">Bạn là một nhà phân tích dữ liệu kinh doanh.</a> <a href="#component-thongtin" class="prompt-link text-amber-600">Với dữ liệu bán hàng năm 2024 (bao gồm các cột: Ngày, Sản phẩm, Doanh số, Khu vực, Kênh bán hàng),</a> <a href="#component-nhiemvu" class="prompt-link text-violet-600">hãy xác định 3 sản phẩm có doanh số cao nhất, 2 khu vực có mức tăng trưởng doanh số nhanh nhất trong quý cuối cùng, và đề xuất 1 hành động kinh doanh dựa trên những phân tích này.</a> <a href="#component-yeucau" class="prompt-link text-emerald-600">Trình bày kết quả dưới dạng bullet points.</a>'],['title' => 'Dành cho Marketing / Sáng tạo nội dung','bad' => '"Viết quảng cáo cho sản phẩm."','good' => '<a href="#component-vaitro" class="prompt-link text-blue-600">Bạn là một chuyên gia marketing nội dung.</a> <a href="#component-nhiemvu" class="prompt-link text-violet-600">Hãy viết 3 tiêu đề quảng cáo ngắn gọn (dưới 10 từ) và 1 đoạn mô tả (khoảng 50 từ) cho một sản phẩm \'Máy lọc không khí thông minh\' hướng đến đối tượng khách hàng là các gia đình trẻ có con nhỏ, ưu tiên sự an toàn và tiện lợi.</a> <a href="#component-yeucau" class="prompt-link text-emerald-600">Giọng văn cần ấm áp, đáng tin cậy và khơi gợi cảm xúc.</a>'],['title' => 'Liệt kê các nguyên thủ quốc gia Việt Nam (từ 1975)','bad' => '"Ai là chủ tịch nước từ năm 1975 đến nay?"','good' => '<a href="#component-vaitro" class="prompt-link text-blue-600">Bạn là một chuyên gia lịch sử Việt Nam.</a> <a href="#component-nhiemvu" class="prompt-link text-violet-600">Hãy liệt kê tên đầy đủ và thời gian tại nhiệm (từ năm đến năm) của các Chủ tịch nước và Chủ tịch Hội đồng Nhà nước của Cộng hòa Xã hội Chủ nghĩa Việt Nam từ năm 1975 đến nay.</a> <a href="#component-yeucau" class="prompt-link text-emerald-600">Trình bày dưới dạng danh sách có thứ tự.</a>'],['title' => 'Đánh giá tình trạng trẻ em đuối nước','bad' => '"Đánh giá về việc trẻ em đuối nước."','good' => '<a href="#component-vaitro" class="prompt-link text-blue-600">Bạn là một chuyên gia về an toàn trẻ em và dữ liệu xã hội.</a> <a href="#component-gioihan" class="prompt-link text-slate-600">Dựa trên các báo cáo thống kê gần nhất về tình hình đuối nước ở trẻ em tại Việt Nam trong 5 năm gần đây,</a> <a href="#component-nhiemvu" class="prompt-link text-violet-600">hãy đánh giá mức độ nghiêm trọng của vấn đề, các nguyên nhân chính (nếu có thông tin), và đề xuất 3 giải pháp trọng tâm mà các cộng đồng và gia đình có thể thực hiện để phòng tránh.</a> <a href="#component-yeucau" class="prompt-link text-emerald-600">Trình bày báo cáo tóm tắt (khoảng 400 từ) với các tiêu đề rõ ràng.</a>'],['title' => 'Các món ăn ngon Quận 7, TP.HCM','bad' => '"Món gì ngon ở Quận 7?"','good' => '<a href="#component-vaitro" class="prompt-link text-blue-600">Bạn là một chuyên gia ẩm thực địa phương tại TP.HCM.</a> <a href="#component-nhiemvu" class="prompt-link text-violet-600">Hãy gợi ý 5 món ăn đặc trưng và địa chỉ quán ăn nổi tiếng tại Quận 7, TP.HCM, phù hợp cho bữa tối với gia đình.</a> <a href="#component-yeucau" class="prompt-link text-emerald-600">Thông tin bao gồm: Tên món, địa chỉ (cụ thể đường), và một mô tả ngắn hấp dẫn (khoảng 20 từ) về món ăn đó.</a>']];
                    @endphp

                    @foreach ($examples as $example)
                        <div class="p-5 border rounded-xl bg-white/70 shadow-md hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
                            <h4 class="font-semibold text-gray-800">Ví dụ: {{ $example['title'] }}</h4>
                            <div class="mt-3 p-3 rounded-md bg-red-100/50">
                                <p class="text-sm font-semibold text-red-900 mb-1">Kém hiệu quả:</p>
                                <code class="text-red-800">{{ $example['bad'] }}</code>
                            </div>
                            <div class="mt-3 p-3 rounded-md bg-green-100/50 leading-relaxed">
                                <p class="text-sm font-semibold text-green-900 mb-1">Hiệu quả hơn:</p>
                                <p class="text-gray-800">{!! $example['good'] !!}</p>
                            </div>
                        </div>
                    @endforeach
                </main>
            </div>
        </section>

        {{-- PHẦN 2.2: TRÌNH BÀY BÌNH THƯỜNG --}}
        <section class="bg-white/60 p-6 rounded-xl border border-white/30 shadow-md hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
            <h3 class="text-xl font-semibold text-gray-700 border-l-4 border-teal-500 pl-3 mb-4">2.2. Lưu ý khi tạo Prompt</h3>
            <div class="grid md:grid-cols-2 gap-6">
                 <div class="bg-orange-50 p-4 rounded-lg border border-orange-200 flex items-start space-x-4 hover:bg-white transition-all duration-300">
                    <div class="flex-shrink-0 mt-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-orange-800">Chia nhỏ Tác vụ</h4>
                        <p class="text-sm text-orange-700 mt-1">Với yêu cầu phức tạp, hãy chia thành các bước nhỏ, giao tiếp với AI tuần tự để có kết quả tốt nhất.</p>
                    </div>
                </div>
                <div class="bg-orange-50 p-4 rounded-lg border border-orange-200 flex items-start space-x-4 hover:bg-white transition-all duration-300">
                    <div class="flex-shrink-0 mt-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                           <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-orange-800">Cung cấp Ví dụ (Few-shot Prompting)</h4>
                         <p class="text-sm text-orange-700 mt-1">Cho AI xem một hoặc vài mẫu kết quả bạn mong muốn để nó "bắt chước" chính xác định dạng và văn phong.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Chỉ thực thi JS trên màn hình desktop (nơi có layout 2 cột)
            if (window.innerWidth >= 1024) {
                const theoryPanel = document.getElementById('prompt-theory-panel');
                const examplesColumn = document.getElementById('examples-column');

                function syncColumnHeight() {
                    const theoryHeight = theoryPanel.offsetHeight;
                    examplesColumn.style.height = theoryHeight + 'px';
                    examplesColumn.style.overflowY = 'auto';
                }

                // Dùng một timeout nhỏ để đảm bảo DOM đã render xong hoàn toàn, đặc biệt là các ảnh/font
                setTimeout(syncColumnHeight, 150);

                // Đồng bộ lại khi thay đổi kích thước cửa sổ
                window.addEventListener('resize', syncColumnHeight);
            }
        });
    </script>
@endsection