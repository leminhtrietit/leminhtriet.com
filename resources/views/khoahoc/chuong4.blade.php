@extends('application')

@section('title', 'Chương 4: Các ứng dụng AI trong Văn phòng')

@section('content')

<div class="max-w-7xl mx-auto px-6 py-12">
    <div class="bg-white/80 backdrop-blur-md p-8 rounded-lg shadow-lg border border-white/20">

        {{-- Header của chương --}}
        <div class="flex items-center mb-12">
            <a href="{{ route('course.index') }}" class="text-blue-600 hover:text-blue-800 mr-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm.707-10.293a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L9.414 11H13a1 1 0 100-2H9.414l1.293-1.293z" clip-rule="evenodd" /></svg>
            </a>
            <div>
                <h1 class="text-3xl font-bold text-gray-900">Chương 4: Các ứng dụng AI trong Văn phòng</h1>
                <p class="text-lg text-gray-600">Khám phá cách AI trở thành trợ lý đắc lực trong các công việc hàng ngày.</p>
            </div>
        </div>
        
        <div class="space-y-16">

            {{-- 1. Tóm tắt nội dung với Gemini --}}
            <section>
                <h2 class="text-2xl font-bold text-gray-800 mb-4 border-l-4 border-blue-500 pl-4">1. Tóm tắt nội dung với Gemini</h2>
                <p class="text-gray-700 mb-8 leading-relaxed">
                    Trong môi trường văn phòng hiện đại, chúng ta thường xuyên phải tiếp nhận một lượng lớn thông tin từ báo cáo, bài viết, hay video. Việc đọc hết tất cả là không khả thi. Đây chính là lúc AI phát huy sức mạnh, giúp bạn tóm tắt nội dung một cách nhanh chóng và hiệu quả.
                </p>

                {{-- 1.1 Các kiểu tóm tắt phổ biến với AI --}}
                <div class="space-y-8">
                    <h3 class="text-xl font-bold text-gray-800">1.1. Các kiểu tóm tắt phổ biến với AI</h3>
                    <p class="text-gray-700 leading-relaxed -mt-4">
                        Tùy thuộc vào mục đích sử dụng, chúng ta có thể yêu cầu AI tóm tắt theo nhiều phong cách khác nhau. Dưới đây là các kiểu phổ biến bạn có thể áp dụng:
                    </p>
                    <div class="relative overflow-x-auto shadow-md rounded-lg border border-gray-200/50">
                        <table class="w-full text-sm text-left text-gray-700">
                            <thead class="text-xs text-gray-800 uppercase bg-gray-50/70">
                                <tr>
                                    <th scope="col" class="px-6 py-3">Kiểu tóm tắt</th>
                                    <th scope="col" class="px-6 py-3">Mô tả</th>
                                    <th scope="col" class="px-6 py-3">Prompt mẫu gửi AI</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200/50">
                                <tr class="hover:bg-white/50 transition-colors">
                                    <td class="px-6 py-4 font-semibold align-top">Theo độ dài/số lượng</td>
                                    <td class="px-6 py-4 align-top">Rút gọn nội dung thành một số lượng câu, đoạn, hoặc từ nhất định.</td>
                                    <td class="px-6 py-4 align-top italic">"Tóm tắt văn bản này trong 3 câu."</td>
                                </tr>
                                <tr class="hover:bg-white/50 transition-colors">
                                    <td class="px-6 py-4 font-semibold align-top">Các ý chính (Gist)</td>
                                    <td class="px-6 py-4 align-top">Trích xuất những thông tin cốt lõi, quan trọng nhất của văn bản.</td>
                                    <td class="px-6 py-4 align-top italic">"Nêu các ý chính của tài liệu này."</td>
                                </tr>
                                <tr class="hover:bg-white/50 transition-colors">
                                    <td class="px-6 py-4 font-semibold align-top">Theo định dạng</td>
                                    <td class="px-6 py-4 align-top">Trình bày bản tóm tắt dưới dạng gạch đầu dòng, bảng biểu, hoặc hỏi đáp.</td>
                                    <td class="px-6 py-4 align-top italic">"Tóm tắt báo cáo này dưới dạng bullet points."</td>
                                </tr>
                                <tr class="hover:bg-white/50 transition-colors">
                                    <td class="px-6 py-4 font-semibold align-top">Theo đối tượng/mục đích</td>
                                    <td class="px-6 py-4 align-top">Điều chỉnh văn phong và mức độ chi tiết cho phù hợp với người đọc.</td>
                                    <td class="px-6 py-4 align-top italic">"Tóm tắt bài nghiên cứu này cho một người không có kiến thức chuyên môn."</td>
                                </tr>
                                <tr class="hover:bg-white/50 transition-colors">
                                    <td class="px-6 py-4 font-semibold align-top">Theo mô hình 5W1H</td>
                                    <td class="px-6 py-4 align-top">Trích xuất thông tin "Ai, Cái gì, Ở đâu, Khi nào, Tại sao, Như thế nào".</td>
                                    <td class="px-6 py-4 align-top italic">"Tóm tắt sự kiện này theo mô hình 5W1H."</td>
                                </tr>
                                <tr class="hover:bg-white/50 transition-colors">
                                    <td class="px-6 py-4 font-semibold align-top">Có chọn lọc</td>
                                    <td class="px-6 py-4 align-top">Chỉ tóm tắt hoặc trích xuất những phần thông tin bạn quan tâm.</td>
                                    <td class="px-6 py-4 align-top italic">"Từ hợp đồng này, liệt kê các điều khoản liên quan đến nghĩa vụ của bên B."</td>
                                </tr>
                                <tr class="hover:bg-white/50 transition-colors">
                                    <td class="px-6 py-4 font-semibold align-top">So sánh/đối chiếu</td>
                                    <td class="px-6 py-4 align-top">Tóm tắt và so sánh các điểm tương đồng hoặc khác biệt giữa hai nguồn.</td>
                                    <td class="px-6 py-4 align-top italic">"So sánh và tóm tắt ưu và nhược điểm của Gemini và ChatGPT."</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                {{-- 1.2 Tóm tắt các loại nội dung phổ biến --}}
                <div class="mt-12 space-y-8">
                    <h3 class="text-xl font-bold text-gray-800">1.2. Tóm tắt các loại nội dung phổ biến</h3>
                    <div class="relative overflow-x-auto shadow-md rounded-lg border border-gray-200/50">
                        <table class="w-full text-sm text-left text-gray-700">
                            <thead class="text-xs text-gray-800 uppercase bg-gray-50/70">
                                <tr>
                                    <th scope="col" class="px-6 py-3">Loại nội dung</th>
                                    <th scope="col" class="px-6 py-3">Cách thực hiện với Gemini</th>
                                    <th scope="col" class="px-6 py-3">Ví dụ so sánh hiệu quả</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200/50">
                                <tr class="hover:bg-white/50 transition-colors">
                                    <td class="px-6 py-4 font-semibold">Văn bản (trực tiếp)</td>
                                    <td class="px-6 py-4">Sao chép và dán toàn bộ văn bản (ví dụ: báo cáo, tài liệu Word, nội dung email dài) trực tiếp vào ô nhập prompt của Gemini.</td>
                                    <td class="px-6 py-4"><strong class="font-semibold">Tiết kiệm 99% thời gian:</strong> Từ 30 phút đọc báo cáo 10 trang xuống còn 5 giây để nhận kết quả.</td>
                                </tr>
                                <tr class="hover:bg-white/50 transition-colors">
                                    <td class="px-6 py-4 font-semibold">Trang web (URL)</td>
                                    <td class="px-6 py-4">Sao chép địa chỉ URL của trang web, dán vào Gemini và yêu cầu: "Tóm tắt nội dung trang web này."</td>
                                    <td class="px-6 py-4"><strong class="font-semibold">Nhanh chóng:</strong> Thay vì mở nhiều tab và đọc lướt, nhận tóm tắt ngay lập tức, tiết kiệm hàng giờ.</td>
                                </tr>
                                <tr class="hover:bg-white/50 transition-colors">
                                    <td class="px-6 py-4 font-semibold">Video YouTube (URL)</td>
                                    <td class="px-6 py-4">Sao chép địa chỉ URL của video, dán vào Gemini và yêu cầu: "Tóm tắt video YouTube này."</td>
                                    <td class="px-6 py-4"><strong class="font-semibold">Hiệu quả cao:</strong> Từ 30 phút xem video xuống dưới 1 phút để nắm nội dung cốt lõi và các mốc thời gian.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

            {{-- 2. Hỗ trợ trong soạn thảo văn bản --}}
            <section>
                <h2 class="text-2xl font-bold text-gray-800 mb-6 border-l-4 border-blue-500 pl-4">2. Hỗ trợ trong soạn thảo văn bản</h2>
                <p class="text-gray-700 mb-6 leading-relaxed">
                    AI có thể là "người đồng hành" giúp bạn từ khâu lên ý tưởng, cấu trúc cho đến sửa lỗi chính tả, ngữ pháp, và cải thiện văn phong cho các loại tài liệu như báo cáo, hợp đồng, kế hoạch...
                </p>
                <div class="relative overflow-x-auto shadow-md rounded-lg border border-gray-200/50">
                    <table class="w-full text-sm text-left text-gray-700">
                        <thead class="text-xs text-gray-800 uppercase bg-gray-50/70">
                            <tr>
                                <th scope="col" class="px-6 py-3">Tính năng</th>
                                <th scope="col" class="px-6 py-3">Cách AI hỗ trợ</th>
                                <th scope="col" class="px-6 py-3">Ví dụ thực tế</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200/50">
                            <tr class="hover:bg-white/50 transition-colors">
                                <td class="px-6 py-4 font-semibold">Lên ý tưởng và cấu trúc</td>
                                <td class="px-6 py-4">Gợi ý các chủ đề, dàn ý, và các phần cần có trong một văn bản.</td>
                                <td class="px-6 py-4"><strong class="font-semibold text-blue-700">Yêu cầu:</strong> "Lên dàn ý cho báo cáo thường niên quý 2." <br>→ <strong class="text-green-700">Kết quả:</strong> Dàn ý chi tiết, chuyên nghiệp trong vài phút.</td>
                            </tr>
                             <tr class="hover:bg-white/50 transition-colors">
                                <td class="px-6 py-4 font-semibold">Viết nháp nội dung</td>
                                <td class="px-6 py-4">Viết các đoạn văn, giới thiệu, kết luận hoặc toàn bộ bản nháp.</td>
                                <td class="px-6 py-4"><strong class="font-semibold text-blue-700">Yêu cầu:</strong> "Viết đoạn giới thiệu cho kế hoạch marketing sản phẩm mới." <br>→ <strong class="text-green-700">Kết quả:</strong> Có bản nháp chất lượng cao ngay lập tức.</td>
                            </tr>
                            <tr class="hover:bg-white/50 transition-colors">
                                <td class="px-6 py-4 font-semibold">Kiểm tra & Cải thiện</td>
                                <td class="px-6 py-4">Rà soát lỗi chính tả, ngữ pháp, và đề xuất cách cải thiện câu từ.</td>
                                <td class="px-6 py-4"><strong class="font-semibold text-blue-700">Yêu cầu:</strong> "Kiểm tra và sửa lỗi đoạn văn sau..." <br>→ <strong class="text-green-700">Kết quả:</strong> Phát hiện lỗi tinh vi, gợi ý cải thiện văn phong chuyên nghiệp.</td>
                            </tr>
                             <tr class="hover:bg-white/50 transition-colors">
                                <td class="px-6 py-4 font-semibold">Dịch thuật</td>
                                <td class="px-6 py-4">Dịch thuật văn bản giữa các ngôn ngữ một cách nhanh chóng và chính xác.</td>
                                <td class="px-6 py-4"><strong class="font-semibold text-blue-700">Yêu cầu:</strong> "Dịch đoạn văn sau sang tiếng Anh..." <br>→ <strong class="text-green-700">Kết quả:</strong> Dịch nhanh, ngữ pháp chuẩn, giúp giao tiếp quốc tế dễ dàng.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

            {{-- 3. Hỗ trợ trong viết email --}}
            <section>
                <h2 class="text-2xl font-bold text-gray-800 mb-6 border-l-4 border-blue-500 pl-4">3. Hỗ trợ trong viết email</h2>
                <p class="text-gray-700 mb-6 leading-relaxed">
                    AI giúp bạn tạo ra bản nháp email nhanh chóng, phù hợp với từng tình huống và đối tượng (sếp, đồng nghiệp, khách hàng), đảm bảo văn phong chuyên nghiệp và không sai sót.
                </p>
                <div class="relative overflow-x-auto shadow-md rounded-lg border border-gray-200/50">
                    <table class="w-full text-sm text-left text-gray-700">
                        <thead class="text-xs text-gray-800 uppercase bg-gray-50/70">
                            <tr>
                                <th scope="col" class="px-6 py-3">Tính năng</th>
                                <th scope="col" class="px-6 py-3">Cách AI hỗ trợ</th>
                                <th scope="col" class="px-6 py-3">Ví dụ thực tế</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200/50">
                             <tr class="hover:bg-white/50 transition-colors">
                                <td class="px-6 py-4 font-semibold">Soạn thảo email từ đầu</td>
                                <td class="px-6 py-4">Viết toàn bộ một email dựa trên yêu cầu và các thông tin cơ bản.</td>
                                <td class="px-6 py-4"><strong class="font-semibold text-blue-700">Yêu cầu:</strong> "Viết email thông báo khuyến mãi 20%." <br>→ <strong class="text-green-700">Kết quả:</strong> Email hoàn chỉnh với tiêu đề, lời chào, nội dung và CTA.</td>
                            </tr>
                             <tr class="hover:bg-white/50 transition-colors">
                                <td class="px-6 py-4 font-semibold">Viết lại email với văn phong khác</td>
                                <td class="px-6 py-4">Thay đổi văn phong từ trang trọng sang thân thiện, hoặc ngược lại.</td>
                                <td class="px-6 py-4"><strong class="font-semibold text-blue-700">Yêu cầu:</strong> "Viết lại email hoãn họp này bằng văn phong thân thiện hơn." <br>→ <strong class="text-green-700">Kết quả:</strong> Thay đổi văn phong nhanh chóng, phù hợp ngữ cảnh.</td>
                            </tr>
                             <tr class="hover:bg-white/50 transition-colors">
                                <td class="px-6 py-4 font-semibold">Gợi ý trả lời email</td>
                                <td class="px-6 py-4">Đưa ra các gợi ý trả lời phù hợp khi bạn nhận được email.</td>
                                <td class="px-6 py-4"><strong class="font-semibold text-blue-700">Yêu cầu:</strong> "Gợi ý trả lời email hỏi về tiến độ dự án X." <br>→ <strong class="text-green-700">Kết quả:</strong> Gợi ý trả lời chuyên nghiệp, giúp bạn phản hồi tự tin.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
            
            {{-- PHẦN BÀI TẬP THỰC HÀNH --}}
            <section class="mt-16 pt-12 border-t-2 border-dashed border-blue-300">
                <h2 class="text-3xl font-bold text-center text-gray-800 mb-2">Bài tập thực hành Chương 4</h2>
                <p class="text-center text-gray-600 mb-10">Hãy áp dụng kiến thức đã học để hoàn thành các bài tập dưới đây!</p>

                {{-- Phần 1 --}}
                <div class="mb-12">
                    <h3 class="text-xl font-bold text-gray-800 mb-4 border-l-4 border-gray-400 pl-4">Phần 1: Tóm tắt nội dung với Gemini</h3>
                    <p class="text-sm text-gray-600 mb-6 ml-5"><strong>Mục tiêu:</strong> Thực hành tóm tắt các loại nội dung khác nhau bằng Gemini với các kiểu tóm tắt đa dạng.</p>
                    <div class="space-y-6">
                        <div class="p-6 bg-white/60 rounded-lg border border-gray-200/80 shadow-sm">
                            <h4 class="font-semibold text-lg text-gray-800">Bài tập 1: Tóm tắt văn bản</h4>
                            <p class="mt-2 text-gray-600">Bạn được giao một tài liệu báo cáo nội bộ dài. Hãy thực hiện các yêu cầu sau:</p>
                            <ol class="list-decimal pl-5 mt-3 space-y-2 text-gray-700">
                                <li><strong>Tóm tắt tổng quan:</strong> Dán nội dung vào Gemini và yêu cầu: <blockquote class="mt-1 p-2 bg-gray-100 rounded-md text-gray-800 italic">"Tóm tắt báo cáo này trong 5 câu."</blockquote></li>
                                <li><strong>Tóm tắt ý chính:</strong> Yêu cầu Gemini liệt kê <blockquote class="mt-1 p-2 bg-gray-100 rounded-md text-gray-800 italic">"3 ý chính quan trọng nhất"</blockquote> từ báo cáo dưới dạng gạch đầu dòng.</li>
                                <li><strong>Tóm tắt cho đối tượng cụ thể:</strong> Yêu cầu Gemini tóm tắt báo cáo <blockquote class="mt-1 p-2 bg-gray-100 rounded-md text-gray-800 italic">"dành cho một người không có nền tảng về tài chính."</blockquote></li>
                            </ol>
                        </div>
                        <div class="p-6 bg-white/60 rounded-lg border border-gray-200/80 shadow-sm">
                            <h4 class="font-semibold text-lg text-gray-800">Bài tập 2: Tóm tắt trang web</h4>
                             <p class="mt-2 text-gray-600">Tìm một bài viết công nghệ và thực hành:</p>
                             <ol class="list-decimal pl-5 mt-3 space-y-2 text-gray-700">
                                <li>Sao chép URL và yêu cầu Gemini: <blockquote class="mt-1 p-2 bg-gray-100 rounded-md text-gray-800 italic">"Tóm tắt trang web này thành một đoạn văn ngắn gọn (khoảng 80 từ)."</blockquote></li>
                                <li>Tiếp tục với cùng URL, yêu cầu: <blockquote class="mt-1 p-2 bg-gray-100 rounded-md text-gray-800 italic">"Trang web này trả lời các câu hỏi 5W1H như thế nào?"</blockquote></li>
                            </ol>
                        </div>
                         <div class="p-6 bg-white/60 rounded-lg border border-gray-200/80 shadow-sm">
                            <h4 class="font-semibold text-lg text-gray-800">Bài tập 3: Tóm tắt video YouTube</h4>
                             <p class="mt-2 text-gray-600">Tìm một video về kỹ năng mềm và thực hành:</p>
                             <ol class="list-decimal pl-5 mt-3 space-y-2 text-gray-700">
                                <li>Sao chép URL và yêu cầu: <blockquote class="mt-1 p-2 bg-gray-100 rounded-md text-gray-800 italic">"Tóm tắt nội dung chính của video YouTube này dưới dạng bullet points."</blockquote></li>
                                <li><span class="font-bold text-blue-600">(Nâng cao)</span> Yêu cầu: <blockquote class="mt-1 p-2 bg-gray-100 rounded-md text-gray-800 italic">"Liệt kê các mốc thời gian quan trọng trong video này và tóm tắt nội dung tại mỗi mốc."</blockquote></li>
                            </ol>
                        </div>
                    </div>
                </div>

                {{-- Phần 2 --}}
                 <div class="mb-12">
                    <h3 class="text-xl font-bold text-gray-800 mb-4 border-l-4 border-gray-400 pl-4">Phần 2: Hỗ trợ trong soạn thảo văn bản</h3>
                    <p class="text-sm text-gray-600 mb-6 ml-5"><strong>Mục tiêu:</strong> Sử dụng Gemini để hỗ trợ các giai đoạn khác nhau trong quá trình soạn thảo văn bản.</p>
                     <div class="space-y-6">
                        <div class="p-6 bg-white/60 rounded-lg border border-gray-200/80 shadow-sm">
                            <h4 class="font-semibold text-lg text-gray-800">Bài tập 1: Lên dàn ý báo cáo</h4>
                            <p class="mt-2 text-gray-600">Yêu cầu Gemini:</p>
                             <blockquote class="mt-1 p-2 bg-gray-100 rounded-md text-gray-800 italic">"Lên dàn ý chi tiết cho một báo cáo về kế hoạch phát triển sản phẩm mới cho năm 2026. Báo cáo cần bao gồm các phần: Tóm tắt điều hành, Phân tích thị trường, Mục tiêu sản phẩm, Chiến lược phát triển, Kế hoạch tài chính, và Rủi ro tiềm ẩn."</blockquote>
                        </div>
                         <div class="p-6 bg-white/60 rounded-lg border border-gray-200/80 shadow-sm">
                            <h4 class="font-semibold text-lg text-gray-800">Bài tập 2: Viết nháp đoạn văn</h4>
                             <p class="mt-2 text-gray-600">Dựa vào dàn ý trên, yêu cầu Gemini:</p>
                            <blockquote class="mt-1 p-2 bg-gray-100 rounded-md text-gray-800 italic">"Viết một đoạn nháp khoảng 150 từ cho phần 'Phân tích thị trường' trong báo cáo phát triển sản phẩm, tập trung vào xu hướng tăng trưởng của ngành và nhu cầu người dùng hiện tại."</blockquote>
                        </div>
                        <div class="p-6 bg-white/60 rounded-lg border border-gray-200/80 shadow-sm">
                            <h4 class="font-semibold text-lg text-gray-800">Bài tập 3: Kiểm tra và cải thiện văn phong</h4>
                             <p class="mt-2 text-gray-600">Yêu cầu Gemini:</p>
                            <blockquote class="mt-1 p-2 bg-gray-100 rounded-md text-gray-800 italic">"Kiểm tra lỗi ngữ pháp, chính tả và viết lại đoạn văn sau theo văn phong chuyên nghiệp, lịch sự để đưa vào báo cáo chính thức: 'Chúng tôi đã hoàn thành mục tiêu. Nhưng có một vài vấn đề cần xem xét lại. Chất lượng sản phẩm còn cần cải thiện.'"</blockquote>
                        </div>
                    </div>
                </div>

                {{-- Phần 3 --}}
                 <div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4 border-l-4 border-gray-400 pl-4">Phần 3: Hỗ trợ trong viết email</h3>
                    <p class="text-sm text-gray-600 mb-6 ml-5"><strong>Mục tiêu:</strong> Sử dụng Gemini để soạn thảo và cải thiện email cho các tình huống công việc khác nhau.</p>
                     <div class="space-y-6">
                        <div class="p-6 bg-white/60 rounded-lg border border-gray-200/80 shadow-sm">
                            <h4 class="font-semibold text-lg text-gray-800">Bài tập 1: Soạn email thông báo cuộc họp</h4>
                             <p class="mt-2 text-gray-600">Yêu cầu Gemini:</p>
                            <blockquote class="mt-1 p-2 bg-gray-100 rounded-md text-gray-800 italic">"Soạn một email gửi toàn thể nhân viên phòng ban để thông báo về cuộc họp giao ban tuần vào 9:00 sáng thứ Hai tuần tới (22/07/2025) tại phòng họp lớn. Yêu cầu mọi người chuẩn bị báo cáo công việc cá nhân. Tiêu đề email cần rõ ràng."</blockquote>
                        </div>
                        <div class="p-6 bg-white/60 rounded-lg border border-gray-200/80 shadow-sm">
                            <h4 class="font-semibold text-lg text-gray-800">Bài tập 2: Viết email xin lỗi khách hàng</h4>
                             <p class="mt-2 text-gray-600">Yêu cầu Gemini:</p>
                             <blockquote class="mt-1 p-2 bg-gray-100 rounded-md text-gray-800 italic">"Viết email xin lỗi một khách hàng (tên khách hàng: Anh Nguyễn Văn A, mã đơn hàng: #12345) về sự chậm trễ 2 ngày trong việc giao sản phẩm X do lỗi vận chuyển. Đề xuất tặng voucher giảm giá 10% cho lần mua hàng tiếp theo để bày tỏ sự xin lỗi."</blockquote>
                        </div>
                        <div class="p-6 bg-white/60 rounded-lg border border-gray-200/80 shadow-sm">
                            <h4 class="font-semibold text-lg text-gray-800">Bài tập 3: Gợi ý trả lời email</h4>
                             <p class="mt-2 text-gray-600">Với email nhận được: <span class="italic">"Chào bạn, tôi là Hùng từ Công ty B. Tôi muốn hỏi về tiến độ dự án Y của chúng ta. Khi nào thì có thể có bản cập nhật?"</span>, hãy yêu cầu Gemini:</p>
                             <blockquote class="mt-1 p-2 bg-gray-100 rounded-md text-gray-800 italic">"Gợi ý một email trả lời lịch sự cho email trên, thông báo rằng dự án Y đang được triển khai và bạn sẽ cung cấp bản cập nhật chi tiết vào cuối tuần này."</blockquote>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection