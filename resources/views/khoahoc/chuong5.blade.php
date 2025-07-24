@extends('application')

@section('title', 'Chương 5: Cá nhân hóa Lịch trình và Tối ưu hóa Cuộc sống với AI')

@section('content')
{{-- CSS nội bộ để tạo tag Pro/Ultra với viền gradient (nếu cần) --}}
<style>
    .feature-card {
        position: relative;
        overflow: hidden;
    }
    .gradient-tag-wrapper {
        position: absolute;
        top: 1rem;
        right: 1rem;
        padding: 2px; /* Độ dày của viền */
        border-radius: 9999px;
        background: linear-gradient(90deg, #4285F4, #EA4335, #FBBC05, #34A853, #4285F4);
        background-size: 200% 200%;
        animation: gradient-animation 4s ease infinite;
        z-index: 10;
    }
    .gradient-tag-inner {
        background-color: rgba(255, 255, 255, 0.8);
        backdrop-filter: blur(4px);
        padding: 0.25rem 0.75rem;
        border-radius: 9999px;
        font-size: 0.75rem;
        font-weight: 600;
        color: #374151;
    }
    @keyframes gradient-animation {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }
</style>

<div class="max-w-6xl mx-auto px-6 py-12">
    <div class="bg-white/80 backdrop-blur-md p-8 rounded-lg shadow-lg border border-white/20">

        {{-- Header của chương --}}
        <div class="flex items-center mb-12">
            <a href="{{ route('course.index') }}" class="text-green-600 hover:text-green-800 mr-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm.707-10.293a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L9.414 11H13a1 1 0 100-2H9.414l1.293-1.293z" clip-rule="evenodd" /></svg>
            </a>
            <div>
                <h1 class="text-3xl font-bold text-gray-900">Chương 5: Cá nhân hóa Lịch trình và Tối ưu hóa Cuộc sống với AI</h1>
                <p class="text-lg text-gray-600">Biến Gemini thành trợ lý cá nhân, quản lý thời gian và kết nối với Google Calendar.</p>
            </div>
        </div>
        
        <div class="space-y-16">

            {{-- 1. Giới thiệu về Google Calendar --}}
            <section>
                <h2 class="text-2xl font-bold text-gray-800 mb-6 border-l-4 border-green-500 pl-4">1. Giới thiệu về Google Calendar: Người Quản lý Thời gian Kỹ thuật số</h2>
                <p class="text-gray-700 mb-6 leading-relaxed">
                    Trước khi yêu cầu AI lên lịch, chúng ta cần một nơi để lưu trữ và quản lý lịch trình. Google Calendar (Lịch Google) là công cụ miễn phí và mạnh mẽ, giúp bạn sắp xếp mọi thứ từ công việc đến cuộc sống cá nhân.
                </p>
                
                <div class="flex justify-center my-8">
                    <img src="https://ssl.gstatic.com/calendar/images/dynamiclogo_2020q4/calendar_14_2x.png" alt="Google Calendar Logo" class="h-24 w-auto">
                </div>

                {{-- So sánh --}}
                <div class="grid md:grid-cols-2 gap-6 mb-8">
                    <div class="bg-red-50/70 p-4 rounded-lg border border-red-200">
                        <h4 class="font-semibold text-red-800">Trước đây</h4>
                        <p class="text-sm text-red-700 mt-1">Dùng sổ tay, giấy ghi chú. Dễ quên, khó chia sẻ, khó thay đổi. Sắp xếp cuộc họp cho nhiều người là một cơn ác mộng.</p>
                    </div>
                    <div class="bg-green-50/70 p-4 rounded-lg border border-green-200">
                        <h4 class="font-semibold text-green-800">Với Google Calendar</h4>
                        <p class="text-sm text-green-700 mt-1">Mọi thứ được số hóa, đồng bộ trên các thiết bị. Dễ dàng chia sẻ, tự động nhắc nhở và sắp xếp cuộc hẹn chỉ với vài cú nhấp chuột.</p>
                    </div>
                </div>
                
                <h3 class="text-xl font-bold text-gray-800 mt-12 mb-4">Ba tính năng cốt lõi</h3>
                <div class="relative overflow-x-auto shadow-md rounded-lg border border-gray-200/50">
                    <table class="w-full text-sm text-left text-gray-700">
                        <thead class="text-xs text-gray-800 uppercase bg-gray-50/70">
                            <tr>
                                <th scope="col" class="px-6 py-3">Tính năng</th>
                                <th scope="col" class="px-6 py-3">Mô tả</th>
                                <th scope="col" class="px-6 py-3">Ví dụ sử dụng trong văn phòng</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200/50">
                            <tr class="hover:bg-white/50 transition-colors">
                                <td class="px-6 py-4 font-semibold align-top">Sự kiện (Event)</td>
                                <td class="px-6 py-4 align-top">Là các hoạt động có thời gian bắt đầu và kết thúc cụ thể. Cho phép:<br>• Mời người khác (Invite guests).<br>• Tạo cuộc họp video (Add Google Meet).<br>• Thêm địa điểm, đính kèm tệp, và ghi chú.</td>
                                <td class="px-6 py-4 align-top"><ul class="list-disc pl-5 space-y-1"><li>Tổ chức buổi học/đào tạo online.</li><li>Sắp xếp cuộc họp phòng ban.</li><li>Lên lịch gặp gỡ khách hàng.</li></ul></td>
                            </tr>
                            <tr class="hover:bg-white/50 transition-colors">
                                <td class="px-6 py-4 font-semibold align-top">Công việc (Task)</td>
                                <td class="px-6 py-4 align-top">Là những việc cần làm không có thời gian cụ thể, chỉ có hạn chót. Bạn có thể đánh dấu khi đã hoàn thành.</td>
                                <td class="px-6 py-4 align-top"><ul class="list-disc pl-5 space-y-1"><li>"Gọi điện cho đối tác A".</li><li>"Mua văn phòng phẩm".</li><li>"Chuẩn bị slide cho buổi thuyết trình tuần sau".</li></ul></td>
                            </tr>
                            <tr class="hover:bg-white/50 transition-colors">
                                <td class="px-6 py-4 font-semibold align-top">Lịch hẹn (Appointment Schedule)</td>
                                <td class="px-6 py-4 align-top">Cho phép người khác xem thời gian trống của bạn và tự đặt lịch hẹn vào các khung giờ bạn đã thiết lập sẵn.</td>
                                <td class="px-6 py-4 align-top"><ul class="list-disc pl-5 space-y-1"><li>Giảng viên cho phép sinh viên đặt lịch tư vấn.</li><li>Chuyên viên tuyển dụng cho phép ứng viên tự chọn lịch phỏng vấn.</li></ul></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

            {{-- 2. Dùng Gemini để Lên Kế hoạch Tổng quan --}}
            <section>
                <h2 class="text-2xl font-bold text-gray-800 mb-6 border-l-4 border-green-500 pl-4">2. Dùng Gemini để Lên Kế hoạch Tổng quan</h2>
                <p class="text-gray-700 mb-6 leading-relaxed">Đây là bước đầu tiên để biến ý tưởng thành một kế hoạch có cấu trúc. Hãy để AI làm "quân sư" cho bạn.</p>
                <div class="p-4 bg-gray-100 rounded-lg border">
                    <p class="font-semibold text-gray-800 mb-2">Tình huống ví dụ: Bạn muốn tăng tốc học tiếng Anh để thi TOEIC, mục tiêu từ 550 lên 700 điểm trong 20 ngày.</p>
                    <blockquote class="mt-4 p-4 bg-gray-900 text-white rounded-lg font-mono text-sm">
                        <p class="text-gray-400">// Prompt (Câu lệnh):</p>
                        <p>Bạn là một gia sư tiếng Anh chuyên luyện thi TOEIC. Mục tiêu của tôi: Tăng điểm từ 550 lên 700 trong vòng 20 ngày. Yêu cầu: Hãy lập một kế hoạch học tập tổng quan theo tuần, tập trung vào các kỹ năng cần cải thiện nhất để đạt mục tiêu. Đồng thời, gợi ý các đầu sách, trang web hoặc ứng dụng học tập phù hợp.</p>
                    </blockquote>
                    <div class="mt-4 p-4 bg-white/70 rounded-lg border">
                        <p class="font-semibold text-gray-800 mb-2">Kết quả từ Gemini (Minh họa):</p>
                        <div class="text-gray-700 space-y-3 text-sm">
                            <p>Chắc chắn rồi! Để tăng 150 điểm trong 20 ngày là một thử thách nhưng hoàn toàn khả thi. Với mức điểm 550, bạn cần tập trung củng cố ngữ pháp và từ vựng cơ bản, đồng thời luyện kỹ năng nghe các đoạn hội thoại ngắn. Dưới đây là kế hoạch tổng quan:</p>
                            <div>
                                <p><strong>Tuần 1 (Ngày 1-7): Nền tảng Ngữ pháp & Nghe Part 1, 2</strong><br>
                                <span class="text-xs"><strong>Trọng tâm:</strong> Ôn lại các thì cơ bản, câu bị động, mệnh đề quan hệ. Luyện nghe tranh và các câu hỏi-đáp ngắn.</span><br>
                                <span class="text-xs"><strong>Tài liệu gợi ý:</strong> Sách "Grammar in Use", "Economy TOEIC Vol 1". Web: "exam-english.com".</span></p>
                            </div>
                             <div>
                                <p><strong>Tuần 2 (Ngày 8-14): Từ vựng & Nghe Part 3, 4</strong><br>
                                <span class="text-xs"><strong>Trọng tâm:</strong> Học 300-500 từ vựng TOEIC phổ biến. Luyện nghe các đoạn hội thoại và bài nói chuyện ngắn.</span><br>
                                <span class="text-xs"><strong>Tài liệu gợi ý:</strong> Sách "600 Essential Words for the TOEIC". App: Memrise, Anki.</span></p>
                            </div>
                            <div>
                                <p><strong>Tuần 3 (Ngày 15-20): Luyện đề & Đọc hiểu</strong><br>
                                <span class="text-xs"><strong>Trọng tâm:</strong> Luyện giải đề thi hoàn chỉnh dưới áp lực thời gian. Tập trung vào các bài đọc hiểu Part 7.</span><br>
                                <span class="text-xs"><strong>Tài liệu gợi ý:</strong> Bộ đề "ETS TOEIC Test". Web: "toeic-testpro.com".</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{-- 3. Biến Kế hoạch thành Lịch trình Chi tiết --}}
             <section>
                <h2 class="text-2xl font-bold text-gray-800 mb-6 border-l-4 border-green-500 pl-4">3. Biến Kế hoạch thành Lịch trình Chi tiết</h2>
                <p class="text-gray-700 mb-6 leading-relaxed">Sau khi có kế hoạch tổng quan, bước tiếp theo là cá nhân hóa nó thành một lịch trình có ngày, giờ cụ thể.</p>
                <div class="p-4 bg-gray-100 rounded-lg border">
                     <blockquote class="p-4 bg-gray-900 text-white rounded-lg font-mono text-sm">
                        <p class="text-gray-400">// Prompt tiếp theo (dựa trên kết quả ở trên):</p>
                        <p>Rất tuyệt! Bây giờ hãy biến kế hoạch trên thành một lịch trình chi tiết hàng ngày. Thời gian rảnh của tôi: Ngày thường (Thứ 2 - Thứ 6) từ 7:00 tối đến 10:00 tối. Cuối tuần (Thứ 7, Chủ Nhật) cả ngày. Hãy tạo một lịch trình cụ thể có ngày, giờ cho 20 ngày, bắt đầu từ ngày mai là Thứ Ba, ngày 15 tháng 7 năm 2025.</p>
                    </blockquote>
                    <div class="mt-4 p-4 bg-white/70 rounded-lg border">
                        <p class="font-semibold text-gray-800 mb-2">Kết quả từ Gemini (Ví dụ chi tiết):</p>
                        <div class="text-gray-700 text-sm space-y-4">
                            <div>
                                <h4 class="font-bold">Tuần 1: Nền tảng Ngữ pháp & Nghe Part 1, 2</h4>
                                <p><strong>Thứ Ba (15/07):</strong><br>• 19:00 - 20:30: Ôn tập Ngữ pháp: Các thì Hiện tại & Quá khứ.<br>• 20:30 - 21:30: Luyện nghe TOEIC Part 1 (Mô tả tranh) - 20 câu.</p>
                                <p><strong>Thứ Tư (16/07):</strong><br>• 19:00 - 20:30: Ôn tập Ngữ pháp: Câu bị động.<br>• 20:30 - 21:30: Luyện nghe TOEIC Part 2 (Hỏi-đáp) - 20 câu.</p>
                                <p><strong>Thứ Năm (17/07):</strong><br>• 19:00 - 20:30: Ôn tập Ngữ pháp: Mệnh đề quan hệ.<br>• 20:30 - 21:30: Luyện nghe tổng hợp Part 1 & 2.</p>
                                <p><strong>Thứ Sáu (18/07):</strong><br>• 19:00 - 21:00: Tổng ôn tập ngữ pháp tuần 1.</p>
                                <p><strong>Thứ Bảy (19/07):</strong><br>• Sáng (9:00 - 11:00): Luyện nghe chuyên sâu Part 1 & 2.<br>• Chiều (14:00 - 16:00): Làm mini-test (Nghe & Ngữ pháp).</p>
                                <p><strong>Chủ Nhật (20/07):</strong><br>• Sáng: Xem lại lỗi sai & ghi chú.<br>• Chiều: Nghỉ ngơi hoặc xem phim tiếng Anh.</p>
                            </div>
                            <div>
                               <h4 class="font-bold text-gray-500">Tuần 2 & Tuần 3: ... (Tương tự)</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{-- 4. Tự động hóa Lịch trình với Gemini và Google Calendar --}}
            <section>
                <h2 class="text-2xl font-bold text-gray-800 mb-6 border-l-4 border-green-500 pl-4">4. Tự động hóa Lịch trình với Gemini và Google Calendar</h2>
                <p class="text-gray-700 mb-6 leading-relaxed">Đây là bước đột phá. Thay vì sao chép thủ công, bạn có thể ra lệnh trực tiếp cho Gemini để thêm toàn bộ lịch trình vào Google Calendar.</p>
                <div class="p-4 bg-yellow-50/70 rounded-lg border border-yellow-300 mb-4">
                    <p><strong class="font-semibold text-yellow-800">Điều kiện cần:</strong> Để làm được điều này, bạn cần bật liên kết với Google Workspace trong phần cài đặt Ứng dụng của Gemini.</p>
                </div>
                <div class="p-4 bg-blue-50/70 rounded-lg border border-blue-200 mb-6">
                    <p class="font-semibold text-blue-800">Lưu ý quan trọng khi tạo lịch:</p>
                    <div class="text-sm text-blue-700 mt-2">
                        <p>Để quản lý theo chuỗi sự kiện, bạn nên đặt lịch theo form:</p>
                        <ul class="list-disc pl-5 mt-1">
                            <li><strong>Tiêu đề:</strong> Tên chuỗi sự kiện (ví dụ: "Học TOEIC")</li>
                            <li><strong>Thời gian:</strong> Ngày - từ mấy Giờ - mấy Giờ</li>
                            <li><strong>Địa điểm:</strong> (nếu có)</li>
                            <li><strong>Nội dung mô tả:</strong> Ghi chi tiết nội dung của buổi học hôm đó (ví dụ: "Ôn tập Ngữ pháp: Các thì Hiện tại & Quá khứ").</li>
                        </ul>
                    </div>
                </div>
                <blockquote class="p-4 bg-gray-900 text-white rounded-lg font-mono text-sm">
                    <p class="text-gray-400">// Prompt (Câu lệnh):</p>
                    <p><span class="text-cyan-400">@Google Lịch</span></p>
                    <p>Dựa vào lịch trình học TOEIC chi tiết ở trên, hãy tạo các sự kiện tương ứng trong Lịch Google của tôi cho 5 ngày đầu tiên (từ ngày 15/07 đến 19/07).</p>
                </blockquote>
                 <div class="mt-6 p-4 bg-white/70 rounded-lg border text-center">
                    <p class="font-semibold text-gray-800 mb-4">Gemini sẽ hiển thị một bản xem trước các sự kiện:</p>
                    <div class="space-y-3 text-left">
                        <div class="p-3 bg-gray-100 rounded-md"><strong>Tạo sự kiện:</strong> Ôn tập Ngữ pháp: Các thì Hiện tại<br><span class="text-sm text-gray-600">19:00 - 20:30, Thứ Ba, 15 tháng 7, 2025</span></div>
                        <div class="p-3 bg-gray-100 rounded-md"><strong>Tạo sự kiện:</strong> Luyện nghe TOEIC Part 1 (Mô tả tranh)<br><span class="text-sm text-gray-600">20:30 - 21:30, Thứ Ba, 15 tháng 7, 2025</span></div>
                    </div>
                    <button class="mt-4 bg-green-600 text-white font-bold py-2 px-6 rounded-lg hover:bg-green-700 transition-colors">Tạo sự kiện</button>
                    <p class="text-xs text-gray-500 mt-2">Bạn chỉ cần kiểm tra và nhấp vào nút "Tạo sự kiện" để xác nhận.</p>
                </div>
            </section>
            
            {{-- 5. Các Tương tác Nâng cao khác --}}
            <section>
                <h2 class="text-2xl font-bold text-gray-800 mb-6 border-l-4 border-green-500 pl-4">5. Các Tương tác Nâng cao khác với Google Calendar</h2>
                <div class="space-y-8">
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800">a. Kiểm tra lịch và tìm thời gian rảnh</h3>
                        <p class="text-gray-600 my-2">Hãy hỏi Gemini thay vì dò lịch thủ công.</p>
                        <blockquote class="p-4 bg-gray-900 text-white rounded-lg font-mono text-sm">
                            <p><span class="text-cyan-400">@Google Lịch</span> Kiểm tra xem chiều thứ Năm tuần này tôi có khung giờ nào rảnh kéo dài 2 tiếng không?</p>
                        </blockquote>
                    </div>
                     <div>
                        <h3 class="text-xl font-semibold text-gray-800">b. Ứng dụng với Gems: Tạo "Trợ lý Sức khỏe" Cá nhân</h3>
                        <p class="text-gray-600 my-2">Bạn có thể tạo một chatbot cá nhân để tự động hóa việc lên lịch cho các thói quen tốt.</p>
                         <ol class="space-y-4">
                            <li class="p-4 bg-white/60 rounded-lg border">
                                <strong class="font-semibold">Bước 1: Tạo một Gem mới</strong>
                                <blockquote class="mt-2 p-3 bg-gray-900 text-gray-300 rounded-md font-mono text-xs">
                                    <p><strong class="text-gray-400">// Tên Gem:</strong> Trợ lý Sức khỏe</p>
                                    <p><strong class="text-gray-400">// Hướng dẫn:</strong></p>
                                    <p>Bạn là "Trợ lý Sức khỏe", chuyên gia giúp tôi duy trì lịch tập luyện đều đặn. Khi tôi yêu cầu "lên lịch tập cho tuần tới", nhiệm vụ của bạn là:<br>Dựa vào kế hoạch sau:<br>- Thứ 2 & 5: Tập Cardio (chạy bộ) trong 45 phút vào buổi sáng (7:00 AM).<br>- Thứ 4 & 7: Tập tạ (gym) trong 60 phút vào buổi chiều (5:30 PM).<br>Sử dụng @Google Lịch để tạo các sự kiện này cho tuần kế tiếp.<br>Xác nhận lại với tôi sau khi đã đề xuất tạo sự kiện.</p>
                                </blockquote>
                            </li>
                             <li class="p-4 bg-white/60 rounded-lg border">
                                <strong class="font-semibold">Bước 2: Sử dụng Gem</strong>
                                <p class="text-sm text-gray-600 my-1">Mỗi cuối tuần, chỉ cần ra lệnh đơn giản:</p>
                                <blockquote class="mt-2 p-3 bg-gray-900 text-white rounded-md font-mono text-sm">Này Trợ lý Sức khỏe, lên lịch tập cho tuần tới đi.</blockquote>
                            </li>
                        </ol>
                    </div>
                     <div class="feature-card bg-white/60 p-6 rounded-xl border border-white/30 shadow-md">
                         <div class="gradient-tag-wrapper"><span class="gradient-tag-inner">PRO / ULTRA</span></div>
                        <h3 class="text-xl font-semibold text-gray-800">c. Tự động hóa với Hành động theo lịch</h3>
                        <p class="text-gray-600 my-2">Thiết lập để Gemini tự động chạy một câu lệnh vào một thời điểm nhất định.</p>
                        <div class="p-4 bg-green-50/70 rounded-lg border border-green-200">
                             <p class="font-semibold text-green-800">Ứng dụng: Nhận báo cáo lịch rảnh mỗi sáng.</p>
                             <ol class="list-decimal pl-5 mt-2 text-sm text-green-700 space-y-1">
                                 <li>Trong Gemini, tìm đến tính năng <strong class="font-semibold">Hành động theo lịch</strong> (Scheduled actions).</li>
                                 <li>Tạo một hành động mới với Prompt: <code class="text-xs bg-black/10 px-1 py-0.5 rounded">@Google Lịch Tóm tắt các sự kiện tôi có trong hôm nay và liệt kê tất cả các khung giờ rảnh kéo dài trên 1 tiếng.</code></li>
                                 <li>Thiết lập Lịch chạy (Schedule): <strong class="font-semibold">Hàng ngày lúc 8:00 sáng.</strong></li>
                             </ol>
                             <p class="text-sm text-green-700 mt-2"><strong>Kết quả:</strong> Mỗi sáng, Gemini sẽ tự động gửi cho bạn tóm tắt lịch trình, giúp bạn bắt đầu ngày mới một cách chủ động.</p>
                        </div>
                    </div>
                </div>
            </section>
            
            {{-- Lời kết --}}
            <div class="mt-8 pt-8 border-t border-gray-200/80">
                <p class="text-center text-gray-600 italic">Bằng cách kết hợp sức mạnh lập kế hoạch của AI và khả năng tự động hóa với các công cụ như Google Calendar, bạn đã xây dựng cho mình một hệ thống làm việc và học tập cực kỳ hiệu quả và chuyên nghiệp.</p>
            </div>
        </div>
    </div>
</div>
@endsection