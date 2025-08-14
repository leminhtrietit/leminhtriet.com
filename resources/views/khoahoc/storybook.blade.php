@extends('application')

@section('title', 'Chuyên đề: Hướng dẫn sử dụng Gemini Storybook')

@section('content')
{{-- CSS nội bộ cho chủ đề "Khu vườn cổ tích" và hiệu ứng zoom mới --}}
<style>
    .fairy-gradient-text {
        background: linear-gradient(45deg, #f87171, #fb923c, #a855f7, #4ade80);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-fill-color: transparent;
    }
    .fairy-border {
        border-image-slice: 1;
        border-image-source: linear-gradient(to right, #a855f7, #ec4899, #facc15);
    }
    .step-marker {
        position: relative;
        background: linear-gradient(145deg, #a855f7, #ec4899);
        box-shadow: 0 4px 15px rgba(168, 85, 247, 0.4);
    }
    .step-marker::before {
        content: '✨';
        position: absolute;
        top: -10px;
        left: -10px;
        font-size: 1.2rem;
        transform: rotate(-15deg);
    }
    .view-sample-button {
        display: inline-block;
        background: linear-gradient(to right, #facc15, #fb923c);
        color: #374151;
        border: none;
        padding: 10px 20px;
        border-radius: 8px;
        font-weight: bold;
        cursor: pointer;
        box-shadow: 0 4px 10px rgba(251, 146, 60, 0.4);
        transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
        text-decoration: none;
    }
    .view-sample-button:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 12px rgba(251, 146, 60, 0.5);
    }
    .feature-annotation li {
        background-color: rgba(255, 255, 255, 0.5);
        padding: 0.75rem;
        border-radius: 0.5rem;
        border-left: 4px solid;
        transition: all 0.2s ease-in-out;
    }
     .feature-annotation li:hover {
        transform: translateX(5px);
        box-shadow: 0 4px 10px rgba(0,0,0,0.05);
     }

    .image-zoom-wrapper {
        position: relative;
        overflow: hidden;
    }

    .image-zoom-wrapper img {
        display: block;
        width: 100%;
        transition: transform 0.3s ease;
    }

    .image-zoom-wrapper:hover img {
        transform: scale(1.05);
    }

    .zoom-button {
        position: absolute;
        bottom: 1rem;
        right: 1rem;
        width: 44px;
        height: 44px;
        background-color: rgba(0, 0, 0, 0.6);
        backdrop-filter: blur(4px);
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        cursor: zoom-in;
        opacity: 0;
        transform: scale(0.8);
        transition: opacity 0.3s ease, transform 0.3s ease;
    }

    .image-zoom-wrapper:hover .zoom-button {
        opacity: 1;
        transform: scale(1);
    }
</style>

{{-- Container chính sử dụng Alpine.js để quản lý trạng thái modal zoom --}}
<div x-data="{ zoomedImageUrl: '' }" class="max-w-6xl mx-auto px-6 py-4">
    <div class="bg-gradient-to-br from-purple-50/80 via-pink-50/80 to-green-50/80 backdrop-blur-md p-8 rounded-2xl shadow-2xl border border-white/30">

        {{-- Header của chương --}}
        <div class="flex flex-col md:flex-row items-center justify-between mb-16">
            <div class="mb-4 md:mb-0 text-center md:text-left">
                <div class="flex items-center justify-center md:justify-start">
                    <a href="{{ route('course.index') }}" class="text-purple-500 hover:text-pink-500 mr-4 transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm.707-10.293a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L9.414 11H13a1 1 0 100-2H9.414l1.293-1.293z" clip-rule="evenodd" /></svg>
                    </a>
                    <h1 class="text-4xl font-extrabold fairy-gradient-text inline-block">Chuyên đề: Gemini Storybook</h1>
                </div>
                <p class="text-lg text-gray-600 mt-1 md:ml-14">Biến ý tưởng thành truyện tranh AI lung linh chỉ trong vài phút.</p>
            </div>
            <div>
                <a href="https://g.co/gemini/share/01c748b08711" target="_blank" rel="noopener noreferrer" class="view-sample-button">✨ Xem Tác Phẩm Mẫu ✨</a>
            </div>
        </div>

        <div class="space-y-20">
            <section>
                <h2 class="text-3xl font-bold text-gray-800 mb-6 border-l-8 pl-4 fairy-border">1. Gemini Storybook là gì?</h2>
                <p class="text-gray-700 mb-6 leading-relaxed text-base">
                    Hãy tưởng tượng bạn có một ý tưởng về một câu chuyện, nhưng bạn không phải là nhà văn hay họa sĩ. <strong class="text-pink-600 font-semibold">Storybook</strong> chính là người trợ lý AI đắc lực của bạn. Đây là một tính năng được tích hợp trong Gemini, giúp bạn biến ý tưởng thành những cuốn truyện tranh ngắn, có hình ảnh minh họa, lời kể và thậm chí là giọng đọc tự động.
                </p>
                <p class="text-gray-700 leading-relaxed text-base">
                    Bạn chỉ cần đưa ra một vài mô tả, Storybook sẽ đảm nhận phần còn lại: viết cốt truyện, vẽ tranh minh họa theo phong cách bạn chọn và "xuất bản" thành một cuốn sách kỹ thuật số hoàn chỉnh.
                </p>
            </section>

            <section>
                <h2 class="text-3xl font-bold text-gray-800 mb-8 border-l-8 pl-4 fairy-border">2. Những tính năng nổi bật</h2>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                     @php
                        $features = [
                            ['title' => 'Sáng tạo không giới hạn', 'desc' => 'Biến mọi ý tưởng, từ chuyện cười, kỷ niệm đến khái niệm phức tạp, thành một cuốn truyện sinh động.', 'icon' => '🎨'],
                            ['title' => 'Cá nhân hóa tối đa', 'desc' => 'Tải lên hình ảnh, bản vẽ của riêng bạn để AI lấy cảm hứng, tạo ra nhân vật và câu chuyện độc đáo.', 'icon' => '🖼️'],
                            ['title' => 'Chỉnh sửa dễ dàng', 'desc' => 'Thay vì sửa trực tiếp, bạn chỉ cần ra lệnh cho Gemini: "Làm cho câu chuyện hài hước hơn".', 'icon' => '🪄'],
                            ['title' => 'Trải nghiệm đa phương tiện', 'desc' => 'Mỗi câu chuyện đều có hình minh họa và giọng đọc tự động với nhiều lựa chọn.', 'icon' => '🎧'],
                            ['title' => 'Hỗ trợ đa ngôn ngữ', 'desc' => 'Hỗ trợ hơn 45 ngôn ngữ, bao gồm cả tiếng Việt, tuyệt vời cho việc học ngoại ngữ.', 'icon' => '🌍'],
                            ['title' => 'Chia sẻ & In ấn', 'desc' => 'Dễ dàng chia sẻ qua liên kết công khai hoặc in ra để làm một cuốn sách giấy thực thụ.', 'icon' => '📚']
                        ];
                    @endphp
                    @foreach ($features as $feature)
                    <div class="bg-white/60 p-6 rounded-xl border border-white/30 shadow-lg hover:shadow-purple-200 hover:-translate-y-2 transition-all duration-300">
                        <h4 class="font-bold text-lg text-gray-800"><span class="mr-2">{{ $feature['icon'] }}</span>{{ $feature['title'] }}</h4>
                        <p class="text-sm text-gray-600 mt-2">{{ $feature['desc'] }}</p>
                    </div>
                    @endforeach
                </div>
            </section>

            <section>
                <h2 class="text-3xl font-bold text-gray-800 mb-8 border-l-8 pl-4 fairy-border">3. Hướng dẫn sử dụng chi tiết</h2>
                <ol class="space-y-8">
                    <li class="flex items-start">
                        <span class="step-marker flex-shrink-0 flex items-center justify-center w-10 h-10 rounded-full text-white font-bold mr-5">1</span>
                        <div>
                            <h5 class="font-bold text-xl text-purple-700">Truy cập Storybook</h5>
                            <p class="text-gray-600">Mở Gemini, tìm mục <strong class="font-mono text-pink-600">"Khám phá Gem"</strong> và chọn <strong class="font-mono text-pink-600">Storybook</strong>.</p>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <span class="step-marker flex-shrink-0 flex items-center justify-center w-10 h-10 rounded-full text-white font-bold mr-5">2</span>
                        <div>
                            <h5 class="font-bold text-xl text-purple-700">Nêu ý tưởng</h5>
                            <p class="text-gray-600 mb-2">Tại ô nhập liệu, mô tả ý tưởng câu chuyện của bạn. Càng chi tiết, kết quả càng diệu kỳ.</p>
                            <blockquote class="p-4 bg-gradient-to-r from-yellow-100 to-amber-200 rounded-lg text-amber-900 italic text-sm border-l-4 border-amber-400">
                                "Viết một câu chuyện về một chú mèo mập tên Bư ở Sài Gòn, Bư rất thích ăn bánh mì và một ngày nọ chú quyết định đi tìm cửa hàng bánh mì ngon nhất thành phố."
                            </blockquote>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <span class="step-marker flex-shrink-0 flex items-center justify-center w-10 h-10 rounded-full text-white font-bold mr-5">3</span>
                        <div>
                            <h5 class="font-bold text-xl text-purple-700">(Tùy chọn) Tải lên tư liệu</h5>
                            <p class="text-gray-600">Nhấp vào biểu tượng dấu <strong class="font-mono text-pink-600">+</strong> để tải ảnh hoặc PDF làm tư liệu (ví dụ: ảnh chú mèo của bạn để AI vẽ nhân vật chính giống hơn).</p>
                        </div>
                    </li>
                     <li class="flex items-start">
                        <span class="step-marker flex-shrink-0 flex items-center justify-center w-10 h-10 rounded-full text-white font-bold mr-5">4</span>
                        <div>
                            <h5 class="font-bold text-xl text-purple-700">Tạo và Tinh chỉnh</h5>
                            <p class="text-gray-600">Nhấn gửi và chờ AI tạo truyện. Bạn có thể ra lệnh ở khung chat bên phải để chỉnh sửa tình tiết, nhân vật, phong cách nghệ thuật...</p>
                        </div>
                    </li>
                     <li class="flex items-start">
                        <span class="step-marker flex-shrink-0 flex items-center justify-center w-10 h-10 rounded-full text-white font-bold mr-5">5</span>
                        <div>
                            <h5 class="font-bold text-xl text-purple-700">Thưởng thức và Chia sẻ</h5>
                            <p class="text-gray-600">Đọc truyện, nghe giọng đọc tự động, và nhấn nút <strong class="font-mono text-pink-600">"Chia sẻ"</strong> hoặc <strong class="font-mono text-pink-600">"In"</strong> khi đã hài lòng.</p>
                        </div>
                    </li>
                </ol>
            </section>

            {{-- GIỚI THIỆU GIAO DIỆN CANVAS VỚI NÚT ZOOM ĐÃ CẬP NHẬT --}}
            <section>
                <h2 class="text-3xl font-bold text-center text-gray-800 mb-4">Khám phá Giao diện Tương tác</h2>
                <p class="text-center text-gray-600 mb-8">Đây là không gian kỳ diệu nơi câu chuyện của bạn thành hình.</p>
                <div class="grid lg:grid-cols-2 gap-8 items-center">
                    {{-- Hình ảnh giao diện với nút zoom ở góc --}}
                    <div class="image-zoom-wrapper rounded-lg shadow-xl border-2 border-white">
                        <img src="{{ asset('assets/images/course/image_2ef090.png') }}" alt="Giao diện Canvas Gemini Storybook">
                        <a 
                            href="#" 
                            @click.prevent="zoomedImageUrl = '{{ asset('assets/images/course/image_2ef090.png') }}'" 
                            class="zoom-button"
                        >
                            {{-- CẬP NHẬT: Thay thế <i> bằng SVG để đảm bảo icon hiển thị --}}
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path><path fill-rule="evenodd" d="M8 11a1 1 0 100-2H5a1 1 0 100 2h3zm2-4a1 1 0 10-2 0v3a1 1 0 102 0V7z" clip-rule="evenodd"></path></svg>
                        </a>
                    </div>
                    {{-- Chú thích các tính năng --}}
                    <div>
                        <ul class="space-y-4 feature-annotation">
                            <li style="border-color: #a855f7;">
                                <strong class="text-purple-700">Điều hướng trang:</strong> Dễ dàng lật qua lại giữa các trang truyện bằng nút "Trang trước" và "Trang sau".
                            </li>
                            <li style="border-color: #ec4899;">
                                <strong class="text-pink-600">Tùy chọn Nghe:</strong> Nhấn nút "Nghe" để mở ra menu cho phép bạn:
                                <ul class="list-disc pl-5 mt-2 text-sm text-gray-700">
                                    <li>Thay đổi giọng đọc (cao hơn, trầm hơn).</li>
                                    <li>Yêu cầu đọc lại từ đầu.</li>
                                    <li>Bật chế độ nghe toàn màn hình.</li>
                                </ul>
                            </li>
                            <li style="border-color: #4ade80;">
                                <strong class="text-green-600">Nút chức năng:</strong> Các biểu tượng ở góc trên bên phải cho phép bạn Toàn màn hình, In, và quan trọng nhất là nút **Chia sẻ** để gửi tác phẩm của mình cho bạn bè.
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            
            <section>
                <h2 class="text-3xl font-bold text-gray-800 mb-8 border-l-8 pl-4 fairy-border">4. So sánh với các công cụ tương đương</h2>
                <div class="relative overflow-x-auto shadow-2xl rounded-lg border border-gray-200/50">
                    <table class="w-full text-sm text-left text-gray-700">
                        <thead class="text-xs text-gray-800 uppercase bg-purple-100/70">
                            <tr>
                                <th scope="col" class="px-6 py-4">Tiêu Chí</th>
                                <th scope="col" class="px-6 py-4 bg-pink-100/70">Gemini Storybook</th>
                                <th scope="col" class="px-6 py-4">Jasper AI</th>
                                <th scope="col" class="px-6 py-4">Sudowrite</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200/50">
                             <tr class="hover:bg-purple-50/50 transition-colors">
                                <td class="px-6 py-4 font-semibold align-top">Đối tượng chính</td>
                                <td class="px-6 py-4 align-top bg-pink-50/50">Mọi người (phụ huynh, giáo viên, người sáng tạo...) muốn kể chuyện nhanh, vui.</td>
                                <td class="px-6 py-4 align-top">Marketer, copywriter, doanh nghiệp cần sản xuất nội dung văn bản hàng loạt.</td>
                                <td class="px-6 py-4 align-top">Nhà văn, tiểu thuyết gia, người viết kịch bản chuyên nghiệp.</td>
                            </tr>
                             <tr class="hover:bg-purple-50/50 transition-colors">
                                <td class="px-6 py-4 font-semibold align-top">Điểm mạnh cốt lõi</td>
                                <td class="px-6 py-4 align-top bg-pink-50/50">Tạo truyện tranh có hình ảnh và giọng đọc tự động, liền mạch, cực kỳ trực quan.</td>
                                <td class="px-6 py-4 align-top">Tạo nhiều loại nội dung văn bản chất lượng cao (bài blog, email, quảng cáo...).</td>
                                <td class="px-6 py-4 align-top">Công cụ chuyên sâu để phát triển cốt truyện, nhân vật, vượt qua "bí ý tưởng".</td>
                            </tr>
                            <tr class="hover:bg-purple-50/50 transition-colors">
                                <td class="px-6 py-4 font-semibold align-top">Khả năng tạo hình ảnh</td>
                                <td class="px-6 py-4 align-top bg-pink-50/50">Tích hợp sẵn và là tính năng chính, tự động minh họa cho mỗi trang.</td>
                                <td class="px-6 py-4 align-top">Có (Jasper Art) nhưng là phần riêng, không tự động tích hợp vào câu chuyện.</td>
                                <td class="px-6 py-4 align-top">Không có. Chỉ tập trung vào văn bản.</td>
                            </tr>
                            <tr class="hover:bg-purple-50/50 transition-colors">
                                <td class="px-6 py-4 font-semibold align-top">Mức giá</td>
                                <td class="px-6 py-4 align-top bg-pink-50/50">Miễn phí (tính đến hiện tại).</td>
                                <td class="px-6 py-4 align-top">Bắt đầu từ $39/tháng.</td>
                                <td class="px-6 py-4 align-top">Bắt đầu từ $10/tháng.</td>
                            </tr>
                             <tr class="hover:bg-purple-50/50 transition-colors">
                                <td class="px-6 py-4 font-semibold align-top">Phù hợp nhất cho</td>
                                <td class="px-6 py-4 align-top bg-pink-50/50">Tạo truyện kể, tài liệu học tập trực quan, quà tặng cá nhân hóa.</td>
                                <td class="px-6 py-4 align-top">Viết nội dung marketing, SEO, blog cho mục đích kinh doanh.</td>
                                <td class="px-6 py-4 align-top">Viết và hoàn thiện các tác phẩm văn học dài hơi (tiểu thuyết, truyện ngắn).</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
            
            <section>
                 <h2 class="text-3xl font-bold text-gray-800 mb-8 border-l-8 pl-4 fairy-border">Lời kết</h2>
                 <div class="p-8 bg-gradient-to-tr from-green-100 to-teal-100 border-l-4 border-green-400 rounded-r-lg shadow-lg">
                    <p class="text-teal-900 leading-relaxed italic text-lg">
                        Gemini Storybook là một công cụ đột phá, giúp dân chủ hóa khả năng sáng tạo. Nó không nhằm thay thế các nhà văn hay họa sĩ chuyên nghiệp mà để trao cho tất cả mọi người khả năng biến ý tưởng của mình thành những tác phẩm nhỏ xinh, ý nghĩa.
                    </p>
                 </div>
            </section>
        </div>
    </div>

    {{-- MODAL ĐỂ HIỂN THỊ HÌNH ẢNH ĐƯỢC ZOOM (ĐÃ CẬP NHẬT) --}}
    <div 
        x-show="zoomedImageUrl" 
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 bg-black bg-opacity-80 flex items-center justify-center z-50 p-4 pt-32" {{-- CẬP NHẬT: Thêm padding top để không bị header che --}}
        style="display: none;" 
        @click.self="zoomedImageUrl = ''"
        @keydown.escape.window="zoomedImageUrl = ''"
    >
        <div class="relative">
            <img :src="zoomedImageUrl" alt="Hình ảnh phóng to" class="max-w-full max-h-[85vh] rounded-lg shadow-2xl">
            <button @click="zoomedImageUrl = ''" class="absolute -top-5 -right-5 text-white bg-gray-800 rounded-full h-10 w-10 text-2xl leading-none flex items-center justify-center">&times;</button>
        </div>
    </div>
</div>
@endsection