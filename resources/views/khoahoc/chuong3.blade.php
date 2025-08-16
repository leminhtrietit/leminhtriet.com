@extends('layouts.app') 

@section('title', 'Chương 3: Khai thác sức mạnh của Gemini')

@section('content')
{{-- CSS nội bộ để tạo tag Pro/Ultra với viền gradient --}}
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

<div class="max-w-6xl mx-auto px-6 py-4">
    <div class="bg-white/80 backdrop-blur-md p-8 rounded-lg shadow-lg border border-white/20">

        {{-- Header của chương --}}
        <div class="flex items-center mb-12">
            <a href="{{ route('course.index') }}" class="text-purple-600 hover:text-purple-800 mr-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm.707-10.293a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L9.414 11H13a1 1 0 100-2H9.414l1.293-1.293z" clip-rule="evenodd" /></svg>
            </a>
            <div>
                <h1 class="text-3xl font-bold text-gray-900">Chương 3: Khai thác sức mạnh của Gemini</h1>
                <p class="text-lg text-gray-600">Làm chủ "trợ lý AI" đa năng từ Google để tối ưu hóa công việc và sáng tạo không giới hạn.</p>
            </div>
        </div>
        
        <div class="space-y-16">

            {{-- 3.1. Giới thiệu Gemini và những tính năng nổi bật --}}
            <section>
                <h2 class="text-2xl font-bold text-gray-800 mb-6 border-l-4 border-purple-500 pl-4">3.1. Giới thiệu Gemini và những tính năng nổi bật</h2>
                <p class="text-gray-700 mb-6 leading-relaxed">
                    Gemini không chỉ là một công cụ AI thông thường; nó là một <strong class="text-purple-700">"trợ lý" đa năng</strong> có khả năng hiểu và xử lý nhiều loại thông tin khác nhau – từ chữ viết, hình ảnh, âm thanh cho đến video. Hãy hình dung Gemini như một người bạn thông minh có thể trò chuyện với bạn bằng giọng nói, hiểu những gì bạn muốn nói qua hình ảnh, và thậm chí tạo ra các video chuyên nghiệp chỉ từ những yêu cầu đơn giản.
                </p>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="feature-card bg-white/60 p-6 rounded-xl border border-white/30 shadow-md hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
                        <h4 class="font-bold text-lg text-gray-800">Trải nghiệm Gemini Live</h4>
                        <p class="text-sm text-gray-600 mt-2">Tương tác với Gemini như đang nói chuyện với một người thật. Bạn có thể đặt câu hỏi bằng giọng nói, bật Camera và chia sẻ màn hình để nhận hướng dẫn trực tiếp.</p>
                    </div>
                    <div class="feature-card bg-white/60 p-6 rounded-xl border border-white/30 shadow-md hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
                        <div class="gradient-tag-wrapper"><span class="gradient-tag-inner">PRO / ULTRA</span></div>
                        <h4 class="font-bold text-lg text-gray-800">Veo 3 & Flow</h4>
                        <p class="text-sm text-gray-600 mt-2">Biến ý tưởng thành những đoạn video chuyên nghiệp, chất lượng cao chỉ từ vài câu lệnh văn bản, không cần kỹ năng dựng phim phức tạp.</p>
                    </div>
                    <div class="feature-card bg-white/60 p-6 rounded-xl border border-white/30 shadow-md hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
                         <div class="gradient-tag-wrapper"><span class="gradient-tag-inner">PRO / ULTRA</span></div>
                        <h4 class="font-bold text-lg text-gray-800">Whisk</h4>
                        <p class="text-sm text-gray-600 mt-2">Công cụ kể chuyện bằng hình ảnh, giúp bạn ghép nối các bức ảnh tĩnh thành một video ngắn gọn, sinh động và hấp dẫn.</p>
                    </div>
                    <div class="feature-card bg-white/60 p-6 rounded-xl border border-white/30 shadow-md hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
                        <div class="gradient-tag-wrapper"><span class="gradient-tag-inner">ULTRA (Sắp ra mắt)</span></div>
                        <h4 class="font-bold text-lg text-gray-800">Deep Think</h4>
                        <p class="text-sm text-gray-600 mt-2">Mô hình suy luận tiên tiến nhất giúp Gemini phân tích thông tin sâu hơn, đưa ra kết quả chính xác và đáng tin cậy cho các tác vụ nghiên cứu.</p>
                    </div>
                    <div class="feature-card bg-white/60 p-6 rounded-xl border border-white/30 shadow-md hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
                        <div class="gradient-tag-wrapper"><span class="gradient-tag-inner">ULTRA (Tại Hoa Kỳ)</span></div>
                        <h4 class="font-bold text-lg text-gray-800">Project Mariner</h4>
                        <p class="text-sm text-gray-600 mt-2">Nguyên mẫu tác nhân AI giúp đơn giản hóa công việc phức tạp bằng cách tự động hóa nhiều bước, như một trợ lý ảo chuyên nghiệp.</p>
                    </div>
                    <div class="feature-card bg-white/60 p-6 rounded-xl border border-white/30 shadow-md hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
                        <div class="gradient-tag-wrapper"><span class="gradient-tag-inner">ULTRA</span></div>
                        <h4 class="font-bold text-lg text-gray-800">Lợi ích kèm theo</h4>
                        <p class="text-sm text-gray-600 mt-2">Gói Ultra đi kèm <strong class="text-purple-700">YouTube Premium</strong> và có thể <strong class="text-purple-700">chia sẻ với 5 thành viên khác</strong> trong gia đình, giúp cả nhà cùng tận hưởng tính năng AI ưu việt.</p>
                    </div>
                </div>

                {{-- Giao diện của Gemini --}}
                <div class="mt-12 bg-gray-50/70 p-6 rounded-xl border">
                    <h3 class="font-bold text-xl text-gray-800 mb-4">Khám phá Giao diện Gemini</h3>
                    <div class="space-y-6">
                        <div>
                            <h4 class="font-semibold text-lg text-gray-800">Khu vực chọn Model AI</h4>
                            <p class="text-gray-600 mt-2">Đây là nơi bạn lựa chọn "bộ não" của Gemini cho từng tác vụ:</p>
                            <ul class="list-disc list-inside text-sm text-gray-600 mt-2 space-y-2 pl-4">
                                <li><strong>Flash:</strong> Nhanh chóng và hiệu quả về chi phí, phù hợp cho các tác vụ cần phản hồi tức thì như trò chuyện hoặc tóm tắt nhanh.</li>
                                <li><strong>Pro:</strong> Cân bằng giữa hiệu suất và khả năng, thích hợp cho các tác vụ tổng quát và phức tạp hơn như viết báo cáo, phân tích dữ liệu cơ bản.</li>
                                <li><strong>Personalize (Preview):</strong> Dựa trên lịch sử tìm kiếm Google của bạn để đưa ra những thông tin cá nhân hoá hơn cho chính bạn.</li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-semibold text-lg text-gray-800">Khu vực nhập Prompt và Tùy chọn</h4>
                            <p class="text-gray-600 mt-1">Đây là "bàn làm việc" chính của bạn với các tính năng:</p>
                            <ul class="list-disc list-inside text-sm text-gray-600 mt-2 space-y-2 pl-4">
                                <li><strong>Deep Research:</strong> Nghiên cứu chuyên sâu, tổng hợp thông tin từ nhiều nguồn.</li>
                                <li><strong>Canvas:</strong> Bảng trắng kỹ thuật số để phác thảo ý tưởng, tổ chức thông tin cùng AI.</li>
                                <li><strong>Nút Tạo:</strong> Chuyển đổi Canvas thành <strong class="text-purple-700">Trang web</strong>, <strong class="text-purple-700">Bài kiểm tra</strong>, <strong class="text-purple-700">Tổng quan âm thanh</strong> (podcast), hoặc <strong class="text-purple-700">Video</strong> (với Veo 3).</li>
                                <li><strong>Thêm tệp:</strong> Tải tệp lên từ máy, kết nối Google Drive hoặc chèn mã code.</li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-semibold text-lg text-gray-800">Thanh Sidebar và Quản lý</h4>
                            <ul class="list-disc list-inside text-sm text-gray-600 mt-2 space-y-2 pl-4">
                                <li><strong>Thông tin đã lưu:</strong> Cá nhân hóa Gemini bằng cách lưu trữ thông tin quan trọng, sở thích, phong cách làm việc của bạn để AI đưa ra phản hồi phù hợp hơn.</li>
                                <li><strong>Ứng dụng:</strong> Kết nối Gemini với các ứng dụng Google Workspace (Docs, Sheets, Slides...) để AI truy cập và tương tác trực tiếp với dữ liệu của bạn, tối ưu hóa quy trình làm việc.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            {{-- 3.2. Gemini trong quản lý công việc và cuộc sống cá nhân --}}
            <section>
                <h2 class="text-2xl font-bold text-gray-800 mb-6 border-l-4 border-purple-500 pl-4">3.2. Gemini trong quản lý công việc và cuộc sống</h2>
                <div class="space-y-6">
                    <div class="bg-white/60 p-6 rounded-xl border border-white/30 shadow-sm">
                        <h4 class="font-bold text-lg text-gray-800">Quản lý lịch trình thông minh</h4>
                        <p class="text-gray-600 mt-2">Tự động đặt lịch hẹn, cá nhân hóa lịch làm việc với <strong class="text-blue-600">Google Calendar</strong> (Yêu cầu bật kết nối trong phần Ứng dụng). Gemini có thể gợi ý lịch trình, thêm các hoạt động và gửi thông báo để bạn không bao giờ quên việc quan trọng.</p>
                    </div>
                    <div class="bg-white/60 p-6 rounded-xl border border-white/30 shadow-sm">
                        <h4 class="font-bold text-lg text-gray-800">Tối ưu hóa giao tiếp</h4>
                        <p class="text-gray-600 mt-2">Soạn thảo email chuyên nghiệp và nhanh chóng với <strong class="text-red-600">Gmail</strong>. AI sẽ phân tích và giúp bạn viết email với văn phong chuẩn mực, thể hiện sự chuyên nghiệp trong mọi giao tiếp.</p>
                    </div>
                    <div class="bg-white/60 p-6 rounded-xl border border-white/30 shadow-sm">
                        <h4 class="font-bold text-lg text-gray-800">Quản lý tài liệu hiệu quả</h4>
                        <p class="text-gray-600 mt-2">Tìm kiếm file trong <strong class="text-green-600">Google Drive</strong> (kể cả nội dung bên trong file) hoặc biến <strong class="text-yellow-600">Google Photos</strong> thành một studio chỉnh sửa ảnh đỉnh cao và dễ dàng tìm kiếm lại kỷ niệm.</p>
                    </div>
                    <div class="feature-card bg-white/60 p-6 rounded-xl border border-white/30 shadow-sm">
                        <div class="gradient-tag-wrapper"><span class="gradient-tag-inner">PRO / ULTRA</span></div>
                        <h4 class="font-bold text-lg text-gray-800">Hành động theo lịch (Schedule Action)</h4>
                        <p class="text-gray-600 mt-2">Lên lịch để Gemini <strong class="text-purple-700">tự động thực hiện các tác vụ</strong> vào một thời điểm cụ thể hoặc định kỳ (tối đa 10 hành động). Nó giống như có một trợ lý cá nhân luôn làm việc đúng hạn mà không cần bạn can thiệp, giúp bạn tiết kiệm thời gian và đảm bảo công việc không bị bỏ lỡ.</p>
                        <p class="text-sm text-gray-600 mt-3 font-semibold">Ví dụ thực tế:</p>
                        <ul class="list-disc list-inside text-sm text-gray-600 space-y-1 mt-1">
                            <li>Lấy thông tin giá vàng từ trang web pnj.com.vn và thông báo lúc 7h mỗi sáng</li>
                            <li>Nhắc nhở các deadline quan trọng vào cuối mỗi ngày làm việc 21h.</li>
                        </ul>
                    </div>
                </div>
            </section>

            {{-- 3.3. Ứng dụng Gemini trong phân tích dữ liệu --}}
            <section>
                <h2 class="text-2xl font-bold text-gray-800 mb-6 border-l-4 border-purple-500 pl-4">3.3. Gemini trong phân tích dữ liệu</h2>
                 <p class="text-gray-700 mb-6 leading-relaxed">
                    Gemini không chỉ là một công cụ hỏi đáp đơn thuần; nó có thể biến những dòng dữ liệu thô sơ, khó hiểu thành những biểu đồ sinh động, dễ nhìn và có thể tương tác.
                </p>
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="bg-white/60 p-6 rounded-xl border border-white/30 shadow-sm">
                        <h4 class="font-bold text-lg text-gray-800">Trực quan hóa dữ liệu</h4>
                        <p class="text-gray-600 mt-2">Biến các bảng số liệu phức tạp thành các biểu đồ, đồ thị đẹp mắt. Điều này không chỉ giúp bạn dễ dàng nắm bắt thông tin mà còn thể hiện sự chuyên nghiệp khi trình bày báo cáo.</p>
                    </div>
                    <div class="bg-white/60 p-6 rounded-xl border border-white/30 shadow-sm">
                        <h4 class="font-bold text-lg text-gray-800">Định hướng và gợi ý phân tích</h4>
                        <p class="text-gray-600 mt-2">Với một tập dữ liệu lớn, Gemini có thể định hướng, gợi ý những trường dữ liệu quan trọng cần được chú trọng và phân tích sâu, giúp bạn nhanh chóng tìm ra những insight giá trị.</p>
                    </div>
                </div>
            </section>

            {{-- 3.4. Gemini và sáng tạo đa phương tiện --}}
            <section>
                <h2 class="text-2xl font-bold text-gray-800 mb-6 border-l-4 border-purple-500 pl-4">3.4. Gemini và sáng tạo đa phương tiện</h2>
                <div class="space-y-6">
                    <div class="feature-card bg-white/60 p-6 rounded-xl border border-white/30 shadow-md hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
                        <h4 class="font-bold text-lg text-gray-800">Biên tập hình ảnh</h4>
                        <p class="text-sm text-gray-600 mt-2">Tạo ra các công cụ chỉnh sửa hình ảnh theo ý muốn của bạn, giúp bạn thực hiện các thao tác phức tạp chỉ bằng vài câu lệnh đơn giản.</p>
                    </div>
                    <div class="feature-card bg-white/60 p-6 rounded-xl border border-white/30 shadow-md hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
                        <div class="gradient-tag-wrapper"><span class="gradient-tag-inner">PRO / ULTRA</span></div>
                        <h4 class="font-bold text-lg text-gray-800">Sản xuất video với Veo 3</h4>
                        <p class="text-sm text-gray-600 mt-2">Mô hình AI tạo video tiên tiến nhất của Google, ra mắt tại sự kiện Google I/O 2025. Nó có khả năng biến văn bản hoặc hình ảnh thành video chất lượng cao, chân thực, tích hợp âm thanh (lời thoại khớp miệng, hiệu ứng môi trường, nhạc nền). Với sự ra đời của Veo 3, bạn cũng có thể là một nhà làm phim chuyên nghiệp.</p>
                        <ul class="list-disc list-inside text-sm text-gray-600 mt-2 space-y-1 pl-4">
                            <li>Tạo video thông qua câu lệnh (prompt) trên chatbot Gemini, nhận về video dài 8 giây, độ phân giải 720p, định dạng MP4 tỷ lệ 16:9.</li>
                            <li>Có thể sử dụng ứng dụng Flow với giao diện làm phim chuyên nghiệp để tận dụng tối đa sức mạnh của Veo 3.</li>
                            <li>Tất cả video được tạo sẽ có ký hiệu mờ (watermark) và được nhúng ký hiệu số SynthID ẩn.</li>
                            <li><strong class="text-purple-700">Đã ra mắt tại Việt Nam từ 03/07/2025.</strong></li>
                        </ul>
                    </div>
                    <div class="feature-card bg-white/60 p-6 rounded-xl border border-white/30 shadow-md hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
                        <div class="gradient-tag-wrapper"><span class="gradient-tag-inner">PRO / ULTRA</span></div>
                        <h4 class="font-bold text-lg text-gray-800">Nghệ thuật tạo hình với Imagine 4</h4>
                        <p class="text-sm text-gray-600 mt-2">Biến những ý tưởng trừu tượng nhất của bạn thành những hình ảnh độc đáo, đầy tính nghệ thuật và chi tiết.</p>
                        <p class="text-sm text-gray-600 mt-2">Sử dụng trong Chat của Gemini hoặc Whisk tại labs.google.com</p>
                    
                    </div>
                     <div class="feature-card bg-white/60 p-6 rounded-xl border border-white/30 shadow-md hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
                        <div class="gradient-tag-wrapper"><span class="gradient-tag-inner">PRO / ULTRA</span></div>
                        <h4 class="font-bold text-lg text-gray-800">Sáng tạo âm thanh với Lyria 2</h4>
                        <p class="text-sm text-gray-600 mt-2">Tạo ra các bản nhạc nền, hiệu ứng âm thanh hoặc thậm chí là các đoạn giai điệu hoàn chỉnh cho video hoặc podcast của bạn.</p>
                        <p class="text-sm text-gray-600 mt-2">Sử dụng tại labs.google.com</p>

                    </div>
                    <div class="feature-card bg-white/60 p-6 rounded-xl border border-white/30 shadow-md hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
                        <div class="gradient-tag-wrapper"><span class="gradient-tag-inner">PRO / ULTRA</span></div>
                        <h4 class="font-bold text-lg text-gray-800">Trổ tài DJ với MusicFX DJ</h4>
                        <p class="text-sm text-gray-600 mt-2">Công cụ cho phép bạn pha trộn các bản nhạc, tạo ra những bản phối độc đáo và sáng tạo như một DJ chuyên nghiệp.</p>
                                            <p class="text-sm text-gray-600 mt-2">Sử dụng tại labs.google.com</p>

                    </div>
                </div>
            </section>

            {{-- 3.5. Thiết kế Chatbot cá nhân hóa với Gemini (Gems) --}}
            <section>
                <h2 class="text-2xl font-bold text-gray-800 mb-6 border-l-4 border-purple-500 pl-4">3.5. Thiết kế Chatbot cá nhân hóa (Gems)</h2>
                <p class="text-gray-700 mb-6 leading-relaxed">
                    Gems là tính năng cho phép bạn <strong class="text-purple-700">"huấn luyện" một trợ lý AI riêng</strong>, để nó hiểu rõ nhu cầu và phong cách làm việc của bạn. Đây là giải pháp hoàn hảo để tự động hóa các tác vụ lặp đi lặp lại và duy trì sự nhất quán.
                </p>
                
                <div class="bg-purple-50/70 p-6 rounded-xl border border-purple-200">
                    <h4 class="font-bold text-lg text-purple-800">Lợi ích khi tạo Chatbot với Gems</h4>
                    <ul class="list-disc list-inside mt-3 space-y-2 text-purple-900">
                        <li><strong>Tiết kiệm thời gian:</strong> Tự động hóa các tác vụ lặp lại, trả lời câu hỏi thường gặp.</li>
                        <li><strong>Tăng cường hiệu suất:</strong> Xử lý nhanh chóng các yêu cầu, giải phóng thời gian cho công việc phức tạp hơn.</li>
                        <li><strong>Cá nhân hóa:</strong> Tạo ra chatbot với phong cách và kiến thức chuyên biệt cho nhu cầu của bạn.</li>
                        <li><strong>Tối ưu hóa nội dung:</strong> Hỗ trợ tạo và tối ưu nội dung theo yêu cầu.</li>
                    </ul>
                </div>
                
                <div class="mt-8">
                    <h4 class="font-semibold text-xl text-gray-800 mb-4">Ví dụ về Gems</h4>
                    <div class="space-y-4">
                        <blockquote class="p-4 bg-white/60 border-l-4 border-purple-300 rounded-r-lg">
                            <h5 class="font-bold text-lg text-gray-800">Ví dụ điển hình: Trợ lý Content Facebook</h5>
                            <p class="text-gray-600 mt-2">Bạn là một content creator chuyên đăng bài quảng cáo. Thay vì mất thời gian suy nghĩ, bạn chỉ cần vào Gem và gõ "Khóa học Word cơ bản", một bài viết hoàn chỉnh sẽ được tạo ra sau 1 phút với đầy đủ: tiêu đề hấp dẫn, lợi ích, mô tả thu hút, địa chỉ và các hashtag liên quan.</p>
                        </blockquote>
                        <div>
                            <h5 class="font-semibold text-lg text-gray-800">Các ví dụ khác:</h5>
                            <ul class="list-disc list-inside text-gray-600 mt-2 space-y-1 pl-4">
                                <li><strong>Đầu bếp ảo:</strong> Nhập tên một món ăn, Gem sẽ gợi ý các bữa ăn tiếp theo để cân bằng dinh dưỡng.</li>
                                <li><strong>PT online:</strong> Nhập món ăn, Gem sẽ hiển thị số calo tiêu thụ và lượng calo còn lại có thể nạp trong ngày.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <h4 class="font-semibold text-xl text-gray-800 mb-4">Hướng dẫn tạo Chatbot cơ bản với Gems</h4>
                     <ol class="space-y-6">
                        <li class="flex items-start">
                            <span class="flex-shrink-0 flex items-center justify-center w-8 h-8 rounded-full bg-purple-500 text-white font-bold mr-4">1</span>
                            <div>
                                <h5 class="font-bold text-lg text-gray-800">Tạo Gem mới</h5>
                                <p class="text-gray-600">Truy cập Gemini, tìm mục <strong class="font-mono">Gems</strong> trên thanh sidebar và nhấp vào <strong class="font-mono">+ Create new Gem</strong>.</p>
                            </div>
                        </li>
                         <li class="flex items-start">
                            <span class="flex-shrink-0 flex items-center justify-center w-8 h-8 rounded-full bg-purple-500 text-white font-bold mr-4">2</span>
                            <div>
                                <h5 class="font-bold text-lg text-gray-800">Thiết lập "Nhân cách" và Chức năng</h5>
                                <p class="text-gray-600 mb-3">Đây là bước quan trọng nhất. Trong ô <strong class="font-mono">Hướng dẫn (Instructions)</strong>, bạn cần mô tả thật chi tiết. Hãy xác định:</p>
                                <ul class="list-disc list-inside text-sm text-gray-600 space-y-1">
                                    <li><strong class="font-semibold text-gray-700">Vai trò:</strong> "Bạn là ai?"</li>
                                    <li><strong class="font-semibold text-gray-700">Nhiệm vụ:</strong> "Bạn làm gì?"</li>
                                    <li><strong class="font-semibold text-gray-700">Giọng điệu:</strong> "Bạn nói chuyện như thế nào?"</li>
                                    <li><strong class="font-semibold text-gray-700">Giới hạn:</strong> "Bạn không làm gì?" (rất quan trọng)</li>
                                </ul>
                                <div class="mt-4 p-4 bg-gray-900 rounded-lg text-gray-200 font-mono text-sm shadow-inner">
                                    <p class="text-gray-400">// Ví dụ cho Gem "Trợ lý Hoa Tươi"</p>
                                    <p class="mt-2">                                "Bạn là Trợ Lý Hoa Tươi, một chatbot hỗ trợ khách hàng thân thiện và hữu ích của cửa hàng hoa 'Vườn Hoa Hạnh Phúc'."
</p>
                                    <p>"Nhiệm vụ của bạn là:
</p>
                                 <p>1. Cung cấp thông tin về các loại hoa, ý nghĩa của hoa, và cách chăm sóc hoa.

</p>
<p>




2. Trả lời các câu hỏi về dịch vụ của cửa hàng: giờ mở cửa, chính sách giao hàng, cách đặt hàng, và phương thức thanh toán.
</p><p>
3. Tư vấn chọn hoa phù hợp cho các dịp đặc biệt (sinh nhật, kỷ niệm, khai trương, tang lễ...). 4. Luôn giữ giọng điệu lịch sự, chuyên nghiệp và nhiệt tình.
</p><p>
5. Nếu câu hỏi nằm ngoài phạm vi kiến thức của bạn (ví dụ: yêu cầu tư vấn y tế, thông tin cá nhân của khách hàng khác), hãy lịch sự từ chối và hướng dẫn khách hàng liên hệ trực tiếp số hotline: 0987-654-321.
</p><p>
6. Không bao giờ hỏi thông tin cá nhân nhạy cảm của khách hàng (số thẻ tín dụng, mật khẩu).
</p><p>
7. Kết thúc mỗi cuộc trò chuyện bằng cách hỏi 'Bạn còn câu hỏi nào khác không?' hoặc 'Tôi có thể giúp gì thêm cho bạn?'."
                                
       </p>                         
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                </div>
                            </div>
                        </li>
                         <li class="flex items-start">
                            <span class="flex-shrink-0 flex items-center justify-center w-8 h-8 rounded-full bg-purple-500 text-white font-bold mr-4">3</span>
                            <div>
                                <h5 class="font-bold text-lg text-gray-800">Lưu và sử dụng</h5>
                                <p class="text-gray-600">Sau khi nhập hướng dẫn, nhấp <strong class="font-mono">Create Gem</strong>. Chatbot của bạn sẽ xuất hiện trong danh sách Gems và sẵn sàng để bạn tương tác.</p>
                            </div>
                        </li>
                    </ol>
                </div>

            </section>
        </div>
    </div>
</div>
@endsection