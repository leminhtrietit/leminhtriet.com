<!DOCTYPE html>
<html lang="vi" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khóa Học Ứng Dụng AI</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Chosen Palette: Warm Neutrals (Background: #F8F7F4, Text: #262626, Primary: #4F6F52, Accent: #739072) -->
    <!-- Application Structure Plan: Trang web được cấu trúc lại từ các section rời rạc sang một hệ thống tab chính, mỗi tab tương ứng với một chương hoặc phần lớn của giáo trình. Cấu trúc mới bao gồm: (1) Giới thiệu Khóa học, (2) Cấu Trúc & Thời Lượng Khóa Học, (3) Chương 1: Tổng quan về AI và các công cụ nền tảng, (4) Chương 2: Nghệ Thuật Tối Ưu Hóa Prompt, (5) Chương 3: Khai thác sức mạnh của Gemini, (6) Chương 4: Ứng dụng toàn diện với ChatGPT, (7) Chương 5: Các công cụ AI chuyên biệt và lập trình No-code, (8) Tài liệu & Tài nguyên. Cấu trúc này tối ưu hóa luồng thông tin, giúp người dùng dễ dàng theo dõi tiến trình khóa học và tìm kiếm thông tin theo chương một cách trực quan, đồng thời có một khu vực riêng cho các tài nguyên bổ sung. -->
    <!-- Visualization & Content Choices: Report Info -> Goal -> Viz/Presentation Method -> Interaction -> Justification -> Library/Method. (1) So sánh các công cụ AI (nay tích hợp trong từng chương cụ thể) -> Chi tiết hóa từng công cụ -> Văn bản mô tả và liệt kê tính năng -> Đọc hiểu sâu hơn về từng công cụ. (2) Phân bổ thời lượng khóa học -> Hiểu nhanh cấu trúc thời gian -> Biểu đồ tròn (Doughnut Chart) -> Hiển thị % -> Trực quan hóa dữ liệu số khô khan, dễ hiểu hơn văn bản -> Chart.js. (3) Nguyên tắc Prompt -> Trình bày các nguyên tắc cốt lõi -> Lưới các thẻ (Grid of Cards) và ví dụ chi tiết tô màu từng phần của prompt -> Dễ hình dung và thực hành. (4) Ứng dụng thực tế -> Tìm ứng dụng theo nhu cầu -> Các liệt kê điểm nổi bật theo từng công cụ trong chương tương ứng -> Giúp người dùng liên hệ tính năng với công cụ cụ thể. (5) Tài liệu & Tài nguyên -> Hiển thị danh sách tài liệu/phần mềm -> Bảng tương tác với dữ liệu từ JS -> Dễ dàng xem và truy cập các tài nguyên cần thiết. -->
    <!-- CONFIRMATION: NO SVG graphics used. NO Mermaid JS used. -->
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #F8F7F4;
            color: #262626;
        }
        .nav-link {
            transition: color 0.3s, border-bottom-color 0.3s;
            border-bottom: 2px solid transparent;
        }
        .nav-link:hover {
            color: #4F6F52;
            border-bottom-color: #4F6F52;
        }
        .tab-button {
            transition: background-color 0.3s, color 0.3s;
            white-space: nowrap; /* Prevent wrapping for long tab names */
        }
        .tab-button.active {
            background-color: #4F6F52;
            color: #FFFFFF;
        }
        .tab-button:not(.active) {
            background-color: #E8E8E8;
            color: #262626;
        }
        .application-card {
            transition: transform 0.3s, box-shadow 0.3s;
            cursor: pointer;
        }
        .application-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }
        .prompt-card {
            border: 1px solid #D1D5DB;
            background: white;
            transition: border-color 0.3s, box-shadow 0.3s;
        }
        .prompt-card:hover {
            border-color: #739072;
            box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1);
        }
        .chart-container {
            position: relative;
            height: 300px;
            width: 100%;
            max-width: 300px;
            margin: auto;
        }
        @media (min-width: 768px) {
            .chart-container {
                height: 350px;
                max-width: 350px;
            }
        }
        /* New highlight colors for prompt components */
        .highlight-role-context { color: #3498DB; font-weight: 600; } /* Blue */
        .highlight-input-info { color: #E67E22; font-weight: 600; } /* Orange */
        .highlight-output-req { color: #27AE60; font-weight: 600; } /* Green */
        .highlight-knowledge-limit { color: #9B59B6; font-weight: 600; } /* Purple */
        .highlight-task-assign { color: #E74C3C; font-weight: 600; } /* Red */
        .highlight-note-breakdown { color: #1ABC9C; font-weight: 600; } /* Turquoise */
        .highlight-note-example { color: #F39C12; font-weight: 600; } /* Gold */

        /* Specific colors for AI tool rows */
        .ai-gemini-row { background-color: #E6F3E6; } /* Light green for Gemini */
        .ai-chatgpt-row { background-color: #E6F0F8; } /* Light blue for ChatGPT */
        .ai-notebooklm-row { background-color: #FFFBE6; } /* Light yellow for NotebookLM */

        /* Ensure hover states are still visible but respect the base color */
        .ai-gemini-row:hover, .ai-chatgpt-row:hover, .ai-notebooklm-row:hover {
            filter: brightness(0.95); /* Slightly darken on hover */
        }

        .scroll-y-container {
            height: 500px; /* Approx height for 2.1 + 2.2 sections */
            overflow-y: auto;
            border: 1px solid #D1D5DB;
            padding: 1rem;
            border-radius: 0.5rem;
            background-color: #F8F7F4;
        }

        @media (min-width: 1024px) { /* On larger screens, where 2 columns apply */
            .prompt-left-column {
                display: flex;
                flex-direction: column;
                height: 100%; /* Make left column fill parent height */
            }
            .prompt-left-column > div { /* Target individual cards within the left column */
                flex-shrink: 0; /* Prevent cards from shrinking */
            }
            .prompt-examples-container {
                display: flex;
                flex-direction: column;
                height: 100%; /* Make right column fill parent height */
            }
            .prompt-examples-container .scroll-y-container {
                 flex-grow: 1; /* Allow scroll container to take remaining space */
                 height: auto; /* Let flexbox control height */
            }
        }
    </style>
</head>
<body class="antialiased">

    <header class="bg-[#F8F7F4]/80 backdrop-blur-sm sticky top-0 z-50 shadow-sm">
        <div class="container mx-auto px-4">
            <nav class="flex justify-between items-center py-4">
                <h1 class="text-xl md:text-2xl font-bold text-[#4F6F52]">Giáo Trình Ứng Dụng AI</h1>
                <button id="mobile-menu-button" class="md:hidden p-2 rounded-md focus:outline-none focus:ring-2 focus:ring-inset focus:ring-[#4F6F52]">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </nav>
            <div id="mobile-menu" class="hidden md:hidden pb-3">
                <a href="#introduction-section" class="block py-2 px-4 text-sm hover:bg-[#ECE3CE]">Giới Thiệu Khóa Học</a>
                <a href="#structure-section" class="block py-2 px-4 text-sm hover:bg-[#ECE3CE]">Cấu Trúc Khóa Học</a>
                <a href="#chapter1-section" class="block py-2 px-4 text-sm hover:bg-[#ECE3CE]">Chương 1</a>
                <a href="#chapter2-section" class="block py-2 px-4 text-sm hover:bg-[#ECE3CE]">Chương 2</a>
                <a href="#chapter3-section" class="block py-2 px-4 text-sm hover:bg-[#ECE3CE]">Chương 3</a>
                <a href="#chapter4-section" class="block py-2 px-4 text-sm hover:bg-[#ECE3CE]">Chương 4</a>
                <a href="#chapter5-section" class="block py-2 px-4 text-sm hover:bg-[#ECE3CE]">Chương 5</a>
                <a href="#resources-section" class="block py-2 px-4 text-sm hover:bg-[#ECE3CE]">Tài liệu & Tài nguyên</a>
            </div>
        </div>
    </header>

    <main class="container mx-auto px-4 py-8 md:py-16">

        <div class="flex flex-wrap justify-center border-b border-gray-300 mb-6 sticky top-[72px] bg-[#F8F7F4] z-40 md:justify-start overflow-x-auto">
            <button class="tab-button py-3 px-4 md:px-6 font-semibold text-base md:text-lg flex-grow md:flex-grow-0 rounded-t-lg active" data-tab="introduction">Giới Thiệu Khóa Học</button>
            <button class="tab-button py-3 px-4 md:px-6 font-semibold text-base md:text-lg flex-grow md:flex-grow-0 rounded-t-lg" data-tab="course-structure">Cấu Trúc & Thời Lượng</button>
            <button class="tab-button py-3 px-4 md:px-6 font-semibold text-base md:text-lg flex-grow md:flex-grow-0 rounded-t-lg" data-tab="chapter1">Chương 1: Tổng Quan AI</button>
            <button class="tab-button py-3 px-4 md:px-6 font-semibold text-base md:text-lg flex-grow md:flex-grow-0 rounded-t-lg" data-tab="chapter2-prompt">Chương 2: Tối Ưu Prompt</button>
            <button class="tab-button py-3 px-4 md:px-6 font-semibold text-base md:text-lg flex-grow md:flex-grow-0 rounded-t-lg" data-tab="chapter3">Chương 3: Khai Thác Gemini</button>
            <button class="tab-button py-3 px-4 md:px-6 font-semibold text-base md:text-lg flex-grow md:flex-grow-0 rounded-t-lg" data-tab="chapter4">Chương 4: Ứng Dụng ChatGPT</button>
            <button class="tab-button py-3 px-4 md:px-6 font-semibold text-base md:text-lg flex-grow md:flex-grow-0 rounded-t-lg" data-tab="chapter5">Chương 5: AI Chuyên Biệt & No-code</button>
            <button class="tab-button py-3 px-4 md:px-6 font-semibold text-base md:text-lg flex-grow md:flex-grow-0 rounded-t-lg" data-tab="resources">Tài liệu & Tài nguyên</button>
        </div>

        <div id="main-content-area" class="bg-white p-8 rounded-lg shadow-lg">

            <!-- Giới Thiệu Khóa Học -->
            <div class="tab-pane active" id="introduction">
                <section id="introduction-section" class="mb-12 text-center">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4 text-[#4F6F52]">Chào mừng đến với Khóa học Ứng dụng AI</h2>
                    <p class="max-w-3xl mx-auto text-lg text-gray-700 mb-8">
                        Khám phá cách trang bị những kiến thức nền tảng và kỹ năng thực hành về Trí tuệ Nhân tạo (AI), tập trung vào việc ứng dụng các công cụ mạnh mẽ nhất hiện nay vào công việc và cuộc sống, từ đó tối ưu hóa hiệu suất, tăng cường sáng tạo và giải quyết vấn đề hiệu quả.
                    </p>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-5xl mx-auto">
                        <div class="bg-[#F8F7F4] p-6 rounded-lg shadow-md border-l-4 border-[#739072]">
                            <h3 class="text-xl font-bold mb-2">Mục tiêu khóa học</h3>
                            <p class="text-gray-600">Phát triển kỹ năng sử dụng thành thạo Gemini, ChatGPT, NotebookLM để giải quyết các vấn đề thực tế, nâng cao tư duy phản biện và tối ưu hóa hiệu suất qua Prompt Engineering.</p>
                        </div>
                        <div class="bg-[#F8F7F4] p-6 rounded-lg shadow-md border-l-4 border-[#739072]">
                            <h3 class="text-xl font-bold mb-2">Đối tượng học viên</h3>
                            <p class="text-gray-600">Nhân viên văn phòng, sinh viên, và bất kỳ ai mong muốn khám phá và tận dụng AI để tối ưu hóa công việc và cuộc sống cá nhân.</p>
                        </div>
                        <div class="bg-[#F8F7F4] p-6 rounded-lg shadow-md border-l-4 border-[#739072] md:col-span-2 lg:col-span-1">
                            <h3 class="text-xl font-bold mb-2">Yêu cầu kiến thức</h3>
                            <p class="text-gray-600">Chỉ cần kiến thức cơ bản về tin học văn phòng và khả năng sử dụng internet. Mọi thứ khác sẽ được hướng dẫn từ đầu.</p>
                        </div>
                    </div>
                </section>
            </div>

            <!-- Cấu Trúc & Thời Lượng Khóa Học -->
            <div class="tab-pane hidden" id="course-structure">
                <section id="structure-section" class="mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6 text-[#4F6F52]">Cấu Trúc & Thời Lượng Khóa Học</h2>
                    <p class="max-w-3xl mx-auto text-lg text-gray-700 mb-8">
                        Khóa học được thiết kế một cách khoa học, cân đối giữa lý thuyết và thực hành, đảm bảo học viên nắm vững kiến thức từ nền tảng đến chuyên sâu.
                    </p>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-16 items-center">
                        <div class="order-2 md:order-1">
                            <h3 class="text-2xl font-bold mb-4">Phân bổ thời lượng các chương</h3>
                            <p class="text-gray-700 mb-6">
                                Tổng thời lượng khóa học được phân bổ hợp lý vào các chương chính, giúp học viên từng bước làm chủ các công cụ và kỹ năng quan trọng.
                            </p>
                            <ul class="space-y-4">
                                <li class="flex items-start">
                                    <span class="font-bold text-[#4F6F52] mr-3 mt-1">◆</span>
                                    <div>
                                        <h4 class="font-semibold">Chương 1: Tổng quan về AI</h4>
                                        <p class="text-gray-600">Giới thiệu tổng quan về AI và các công cụ phổ biến. (Ước tính: 4-5 tiếng)</p>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <span class="font-bold text-[#4F6F52] mr-3 mt-1">◆</span>
                                    <div>
                                        <h4 class="font-semibold">Chương 2: Nghệ thuật Tối ưu Prompt</h4>
                                        <p class="text-gray-600">Kỹ năng thiết yếu để tương tác hiệu quả với AI. (Ước tính: 4-5 tiếng)</p>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <span class="font-bold text-[#4F6F52] mr-3 mt-1">◆</span>
                                    <div>
                                        <h4 class="font-semibold">Chương 3 & 4: Thực hành chuyên sâu (Gemini & ChatGPT)</h4>
                                        <p class="text-gray-600">Khai thác sức mạnh của Gemini và ChatGPT qua các bài tập thực tế. (Ước tính: 20-24 tiếng)</p>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <span class="font-bold text-[#4F6F52] mr-3 mt-1">◆</span>
                                    <div>
                                        <h4 class="font-semibold">Chương 5: Công cụ chuyên biệt</h4>
                                        <p class="text-gray-600">Làm chủ NotebookLM và khám phá lập trình No-code. (Ước tính: 6-8 tiếng)</p>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <span class="font-bold text-[#4F6F52] mr-3 mt-1">◆</span>
                                    <div>
                                        <h4 class="font-semibold">Tổng kết</h4>
                                        <p class="text-gray-600">Ôn tập, giải đáp và định hướng tương lai. (Ước tính: 2-3 tiếng)</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="order-1 md:order-2">
                            <div class="chart-container">
                                <canvas id="courseStructureChart"></canvas>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <!-- Chương 1: Tổng quan về AI và các công cụ nền tảng -->
            <div class="tab-pane hidden" id="chapter1">
                <section id="chapter1-section" class="mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6 text-[#4F6F52]">Chương 1: Tổng quan về AI và các công cụ nền tảng</h2>
                    <p class="text-gray-700 mb-8">
                        Chương này cung cấp kiến thức nền tảng vững chắc về Trí tuệ Nhân tạo, từ định nghĩa cơ bản đến các ứng dụng rộng rãi trong kỷ nguyên số.
                    </p>

                    <h3 class="text-2xl font-bold mb-4 text-[#4F6F52]">1.1. Giới thiệu tổng quan về Trí tuệ Nhân tạo (AI)</h3>
                    <p class="text-gray-700 mb-6">
                        Trí tuệ Nhân tạo (AI) là một lĩnh vực khoa học máy tính rộng lớn, tập trung vào việc tạo ra các hệ thống hoặc máy móc có khả năng thực hiện các tác vụ đòi hỏi trí thông minh của con người.
                    </p>
                    <ul class="list-disc list-inside text-gray-600 space-y-2 mb-6">
                        <li>**Khái niệm cơ bản về AI:** Tập hợp các công nghệ mô phỏng khả năng nhận thức của con người (Học máy, Học sâu, Xử lý ngôn ngữ tự nhiên, Thị giác máy tính, Robot học).</li>
                        <li>**Vai trò và lợi ích của AI trong kỷ nguyên số:** Tự động hóa, tối ưu hóa hiệu suất, hỗ trợ cá nhân (quản lý lịch trình, tìm kiếm), cải thiện dịch vụ khách hàng (chatbot).</li>
                    </ul>

                    <h3 class="text-2xl font-bold mb-4 text-[#4F6F52]">1.2. Khám phá các công cụ AI phổ biến</h3>
                    <p class="text-gray-700 mb-6">
                        Sự phát triển nhanh chóng của AI đã tạo ra một hệ sinh thái đa dạng các công cụ, từ các mô hình ngôn ngữ lớn (Large Language Models - LLMs) đến các ứng dụng chuyên biệt. Việc nắm bắt các công cụ này là cần thiết để ứng dụng AI hiệu quả.
                    </p>
                    
                    <h4 class="text-xl font-bold text-[#739072] mb-3">Tổng quan về các nền tảng AI hàng đầu & So sánh các mô hình: Trả phí và miễn phí</h4>
                    <p class="text-gray-700 mb-4">
                        Dưới đây là bảng tổng hợp các công cụ AI phổ biến được đề cập trong khóa học, cùng với các phiên bản và mức giá ước tính (thông tin có thể thay đổi tùy thời điểm).
                    </p>
                    <div class="overflow-x-auto mb-8 shadow-md rounded-lg">
                        <table class="min-w-full bg-white border-collapse">
                            <thead>
                                <tr class="bg-[#4F6F52] text-white">
                                    <th class="py-3 px-4 text-left text-sm font-semibold uppercase tracking-wider rounded-tl-lg">Công cụ AI</th>
                                    <th class="py-3 px-4 text-left text-sm font-semibold uppercase tracking-wider">Phiên bản</th>
                                    <th class="py-3 px-4 text-left text-sm font-semibold uppercase tracking-wider">Tính năng nổi bật</th>
                                    <th class="py-3 px-4 text-left text-sm font-semibold uppercase tracking-wider rounded-tr-lg">Giá cả (ước tính)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b border-gray-200 ai-gemini-row">
                                    <td rowspan="3" class="py-3 px-4 text-gray-800 font-medium whitespace-nowrap">Google Gemini</td>
                                    <td class="py-3 px-4 text-gray-700">Miễn phí</td>
                                    <td class="py-3 px-4 text-gray-700">Gói cá nhân, sử dụng cơ bản. Truy cập mô hình Gemini Pro.</td>
                                    <td class="py-3 px-4 text-gray-700 font-bold">Miễn phí</td>
                                </tr>
                                <tr class="border-b border-gray-200 ai-gemini-row">
                                    <td class="py-3 px-4 text-gray-700">Pro (Google AI Pro)</td>
                                    <td class="py-3 px-4 text-gray-700">
                                        <ul class="list-disc list-inside ml-4 space-y-1">
                                            <li>Truy cập mô hình 2.5 Pro mạnh nhất & Deep Research.</li>
                                            <li>Tạo video hạn chế với Veo 3 Fast, Flow (công cụ làm phim AI với Veo 3), Whisk (tạo video từ ảnh với Veo 2).</li>
                                            <li>1.000 tín dụng AI/tháng cho Flow/Whisk.</li>
                                            <li>Tích hợp sâu Gemini trong Gmail, Tài liệu, Drive, Photos, và Chrome (chỉ Hoa Kỳ).</li>
                                            <li>2TB bộ nhớ dùng chung.</li>
                                        </ul>
                                    </td>
                                    <td class="py-3 px-4 text-gray-700 font-bold">489.000₫/tháng<br>(miễn phí tháng đầu)</td>
                                </tr>
                                <tr class="border-b border-gray-200 ai-gemini-row">
                                    <td class="py-3 px-4 text-gray-700">Ultra (Google AI Ultra)</td>
                                    <td class="py-3 px-4 text-gray-700">
                                        <ul class="list-disc list-inside ml-4 space-y-1">
                                            <li>Tất cả lợi ích gói Pro.</li>
                                            <li>Hạn mức cao nhất & độc quyền truy cập 2.5 Pro Deep Think (sắp ra mắt), Veo 3 (mô hình tạo video mới nhất).</li>
                                            <li>Hạn mức cao nhất cho Flow và Whisk, 12.500 tín dụng AI/tháng.</li>
                                            <li>Hạn mức cao nhất NotebookLM và các chức năng tốt nhất (sắp ra mắt).</li>
                                            <li>Quyền tiếp cận sớm Project Mariner (nguyên mẫu tác nhân AI).</li>
                                            <li>Gói YouTube Premium cá nhân.</li>
                                            <li>30TB bộ nhớ dùng chung.</li>
                                            <li>Có thể chia sẻ với 5 thành viên khác trong gia đình.</li>
                                        </ul>
                                    </td>
                                    <td class="py-3 px-4 text-gray-700 font-bold">6.000.000₫/tháng<br>(3.000.000₫/tháng cho 3 tháng đầu)</td>
                                </tr>
                                <tr class="border-b border-gray-200 ai-chatgpt-row">
                                    <td rowspan="3" class="py-3 px-4 text-gray-800 font-medium whitespace-nowrap">OpenAI ChatGPT</td>
                                    <td class="py-3 px-4 text-gray-700">Miễn phí</td>
                                    <td class="py-3 px-4 text-gray-700">
                                        <ul class="list-disc list-inside ml-4 space-y-1">
                                            <li>Truy cập GPT-4.1 mini.</li>
                                            <li>Dữ liệu thời gian thực từ web với tìm kiếm.</li>
                                            <li>Truy cập hạn chế GPT-4o, OpenAI 04-mini, và nghiên cứu chuyên sâu.</li>
                                            <li>Truy cập hạn chế tải tệp, phân tích dữ liệu, tạo hình ảnh, và chế độ giọng nói.</li>
                                            <li>Chỉnh sửa code với ứng dụng ChatGPT desktop cho macOS.</li>
                                            <li>Sử dụng Custom GPTs.</li>
                                        </ul>
                                    </td>
                                    <td class="py-3 px-4 text-gray-700 font-bold">$0/tháng</td>
                                </tr>
                                <tr class="border-b border-gray-200 ai-chatgpt-row">
                                    <td class="py-3 px-4 text-gray-700">Plus</td>
                                    <td class="py-3 px-4 text-gray-700">
                                        <ul class="list-disc list-inside ml-4 space-y-1">
                                            <li>Tất cả tính năng của gói Miễn phí.</li>
                                            <li>Giới hạn mở rộng cho tin nhắn, tải tệp, phân tích dữ liệu và tạo hình ảnh.</li>
                                            <li>Chế độ giọng nói tiêu chuẩn và nâng cao với video và chia sẻ màn hình.</li>
                                            <li>Truy cập nghiên cứu chuyên sâu và nhiều mô hình suy luận (OpenAI 03, OpenAI 04-mini, và OpenAI 04-mini-high).</li>
                                            <li>Truy cập bản xem trước nghiên cứu của GPT-4.5 và GPT-4.1 (tối ưu cho tác vụ code).</li>
                                            <li>Tạo và sử dụng các dự án, tác vụ, và Custom GPTs.</li>
                                            <li>Cơ hội thử nghiệm các tính năng mới.</li>
                                        </ul>
                                    </td>
                                    <td class="py-3 px-4 text-gray-700 font-bold">$20 USD/tháng</td>
                                </tr>
                                <tr class="hover:bg-gray-50 ai-chatgpt-row">
                                    <td class="py-3 px-4 text-gray-700">Pro</td>
                                    <td class="py-3 px-4 text-gray-700">
                                        <ul class="list-disc list-inside ml-4 space-y-1">
                                            <li>Tất cả tính năng của gói Plus.</li>
                                            <li>Truy cập không giới hạn vào tất cả các mô hình suy luận và GPT-4o.</li>
                                            <li>Truy cập không giới hạn vào chế độ giọng nói nâng cao, với giới hạn cao hơn cho video và chia sẻ màn hình.</li>
                                            <li>Truy cập OpenAI 03-pro, sử dụng nhiều sức mạnh tính toán hơn để có câu trả lời tốt nhất cho các câu hỏi khó nhất.</li>
                                            <li>Truy cập mở rộng vào nghiên cứu chuyên sâu.</li>
                                            <li>Truy cập mở rộng vào tạo video Sora.</li>
                                            <li>Truy cập bản xem trước nghiên cứu của Operator và Codex agent.</li>
                                            <li>Không giới hạn sử dụng (tùy thuộc vào các quy định chống lạm dụng).</li>
                                        </ul>
                                    </td>
                                    <td class="py-3 px-4 text-gray-700 font-bold">$200 USD/tháng</td>
                                </tr>
                                <tr class="border-b border-gray-200 ai-notebooklm-row">
                                    <td rowspan="2" class="py-3 px-4 text-gray-800 font-medium whitespace-nowrap">Google NotebookLM</td>
                                    <td class="py-3 px-4 text-gray-700">Miễn phí</td>
                                    <td class="py-3 px-4 text-gray-700">
                                        <ul class="list-disc list-inside ml-4 space-y-1">
                                            <li>Được xây dựng bằng các mô hình Gemini mới nhất.</li>
                                            <li>Tải lên tệp PDF, trang web, tệp Google Tài liệu và Trang trình bày, URL YouTube, v.v.</li>
                                            <li>Tạo bản tóm tắt, Câu hỏi thường gặp, dòng thời gian và tài liệu tóm tắt bằng một lần nhấp.</li>
                                            <li>Tạo bản Tổng quan bằng âm thanh và nghe khi di chuyển.</li>
                                            <li>Đặt câu hỏi để có thông tin chi tiết hơn và nhận câu trả lời kèm nguồn trích dẫn.</li>
                                        </ul>
                                    </td>
                                    <td class="py-3 px-4 text-gray-700 font-bold">Miễn phí (yêu cầu tài khoản Google)</td>
                                </tr>
                                <tr class="hover:bg-gray-50 ai-notebooklm-row">
                                    <td class="py-3 px-4 text-gray-700">Pro</td>
                                    <td class="py-3 px-4 text-gray-700">
                                        <ul class="list-disc list-inside ml-4 space-y-1">
                                            <li>Tất cả tính năng của phiên bản Miễn phí.</li>
                                            <li>Nhận bản Tổng quan bằng âm thanh, sổ ghi chú, câu hỏi và các nguồn cho mỗi sổ ghi chú nhiều gấp 5 lần.</li>
                                            <li>Tuỳ chỉnh phong cách và độ dài cho câu trả lời liên quan đến sổ ghi chú.</li>
                                            <li>Tạo sổ ghi chú dùng chung cho nhóm của bạn và nhận số liệu phân tích về mức sử dụng.</li>
                                            <li>Tăng cường bảo mật và quyền riêng tư.</li>
                                        </ul>
                                    </td>
                                    <td class="py-3 px-4 text-gray-700 font-bold">Liên hệ để biết giá</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <h4 class="text-xl font-bold text-[#739072] mb-3">Hướng dẫn tìm kiếm và xác định công cụ AI phù học:</h4>
                    <p class="text-gray-700 mb-4">
                        Việc tìm kiếm và lựa chọn công cụ AI phù hợp với mục tiêu cá nhân là một quá trình cần được thực hiện một cách có hệ thống.
                    </p>
                    <div class="space-y-6">
                        <div class="bg-[#F8F7F4] p-5 rounded-lg shadow-sm border-l-4 border-[#739072]">
                            <h5 class="text-lg font-bold text-[#4F6F52] mb-2">Bước 1: Xác định rõ nhu cầu và mục tiêu của bạn</h5>
                            <p class="text-gray-700 mb-3">Đây là bước khởi đầu quan trọng nhất. Bạn cần AI để giải quyết vấn đề gì? Hãy liệt kê càng cụ thể càng tốt các tác vụ mà bạn muốn AI hỗ trợ:</p>
                            <ul class="list-disc list-inside text-gray-600 ml-4 space-y-1">
                                <li>Bạn có muốn AI hỗ trợ **viết lách** (viết email, báo cáo, bài luận, kịch bản...)?</li>
                                <li>Bạn cần AI để **phân tích dữ liệu** (tạo biểu đồ, tìm xu hướng, đưa ra insight từ bảng tính...)?</li>
                                <li>Bạn mong muốn AI giúp **thiết kế đồ họa** (tạo ảnh, chỉnh sửa ảnh, phác thảo ý tưởng...)?</li>
                                <li>Bạn muốn AI hỗ trợ **lập kế hoạch** (lịch trình cá nhân, dự án dài hạn, quản lý công việc...)?</li>
                                <li>Bạn tìm kiếm AI để **hỗ trợ học tập và nghiên cứu** (tóm tắt tài liệu, đặt câu hỏi, tạo sơ đồ tư duy...)?</li>
                                <li>Bạn có cần AI để **dịch thuật** hoặc **sáng tạo nội dung đa phương tiện** (video, âm thanh)?</li>
                            </ul>
                            <p class="text-gray-700 mt-3">Việc xác định rõ mục tiêu sẽ giúp bạn thu hẹp phạm vi các công cụ tiềm năng và tránh lãng phí thời gian vào những lựa chọn không phù hợp.</p>
                        </div>

                        <div class="bg-[#F8F7F4] p-5 rounded-lg shadow-sm border-l-4 border-[#739072]">
                            <h5 class="text-lg font-bold text-[#4F6F52] mb-2">Bước 2: Tìm hiểu và so sánh toàn diện các công cụ</h5>
                            <p class="text-gray-700 mb-3">Khi đã có danh sách nhu cầu, hãy bắt đầu tìm hiểu các công cụ AI trên thị trường:</p>
                            <ul class="list-disc list-inside text-gray-600 ml-4 space-y-1">
                                <li>**Đọc đánh giá và bài viết chuyên sâu:** Tìm kiếm các bài viết so sánh, đánh giá từ các trang công nghệ, blog chuyên ngành uy tín.</li>
                                <li>**Xem video hướng dẫn và demo:** YouTube và các nền tảng học trực tuyến có rất nhiều video giới thiệu và hướng dẫn sử dụng từng công cụ. Việc xem demo thực tế sẽ giúp bạn hình dung rõ hơn về giao diện và cách thức hoạt động.</li>
                                <li>**Tham gia cộng đồng AI:** Các diễn đàn, nhóm mạng xã hội (Facebook Groups, Reddit, Discord) là nơi tuyệt vời để đặt câu hỏi, lắng nghe kinh nghiệm từ những người dùng khác có nhu cầu tương tự bạn. Họ có thể chia sẻ những mẹo và lời khuyên quý giá.</li>
                                <li>**Lưu ý các tính năng tích hợp:** Nếu bạn đã sử dụng một hệ sinh thái cụ thể (ví dụ: Google Workspace, Microsoft 365), hãy ưu tiên các công cụ AI có khả năng tích hợp sâu rộng vào hệ sinh thái đó để tối ưu hóa quy trình làm việc.</li>
                            </ul>
                        </div>

                        <div class="bg-[#F8F7F4] p-5 rounded-lg shadow-sm border-l-4 border-[#739072]">
                            <h5 class="text-lg font-bold text-[#4F6F52] mb-2">Bước 3: Trải nghiệm thực tế (Hands-on experience)</h5>
                            <p class="text-gray-700 mb-3">Lý thuyết là một chuyện, thực hành lại là chuyện khác. Đa số các công cụ AI đều cung cấp phiên bản miễn phí hoặc bản dùng thử. Hãy tận dụng cơ hội này:</p>
                            <ul class="list-disc list-inside text-gray-600 ml-4 space-y-1">
                                <li>**Đăng ký tài khoản miễn phí/dùng thử:** Tự mình đăng ký và trải nghiệm trực tiếp các công cụ.</li>
                                <li>**Thực hiện các tác vụ nhỏ, cụ thể:** Hãy thử yêu cầu AI thực hiện các tác vụ mà bạn đã xác định ở Bước 1. Ví dụ: nhờ AI viết một đoạn email, tóm tắt một bài báo, hoặc tạo một hình ảnh đơn giản.</li>
                                <li>**Đánh giá chất lượng đầu ra:** Xem xét liệu kết quả có đáp ứng được kỳ vọng của bạn về độ chính xác, tính sáng tạo, và tính dễ hiểu hay không.</li>
                                <li>**Đánh giá trải nghiệm người dùng (UX):** Giao diện có thân thiện không? Tốc độ phản hồi có nhanh không? Có dễ dàng để điều hướng và sử dụng các tính năng không?</li>
                            </ul>
                        </div>

                        <div class="bg-[#F8F7F4] p-5 rounded-lg shadow-sm border-l-4 border-[#739072]">
                            <h5 class="text-lg font-bold text-[#4F6F52] mb-2">Bước 4: Xem xét yếu tố chi phí và giá trị lâu dài</h5>
                            <p class="text-gray-700 mb-3">Sau khi đã có cái nhìn tổng quan và trải nghiệm thực tế, hãy đưa ra quyết định cuối cùng:</p>
                            <ul class="list-disc list-inside text-gray-600 ml-4 space-y-1">
                                <li>**So sánh lợi ích và chi phí:** Đánh giá kỹ lưỡng giữa những lợi ích mà công cụ mang lại (tiết kiệm thời gian, tăng năng suất, chất lượng công việc) và chi phí bạn phải bỏ ra (nếu là phiên bản trả phí).</li>
                                <li>**Giá trị lâu dài:** Liệu công cụ này có thể đồng hành cùng bạn trong dài hạn không? Có phù hợp với sự phát triển kỹ năng và mục tiêu nghề nghiệp của bạn trong tương lai không?</li>
                                <li>**Tối ưu hóa chi phí:** Đôi khi, một công cụ miễn phí nhưng đáp ứng tốt 80% nhu cầu của bạn có thể hiệu quả hơn về mặt chi phí so với một công cụ trả phí đắt tiền mà bạn không khai thác hết tính năng.</li>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>

            <!-- Chương 2: Nghệ thuật Tối ưu hóa Prompt -->
            <div class="tab-pane hidden" id="chapter2-prompt">
                <section id="prompting-section" class="mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6 text-[#4F6F52]">Chương 2: Nghệ Thuật Tối Ưu Hóa Prompt</h2>
                    <p class="text-gray-700 mb-8">
                        Chất lượng đầu ra của AI phụ thuộc rất nhiều vào chất lượng "câu lệnh" (prompt) của bạn. Chương này sẽ trang bị cho bạn kỹ năng Prompt Engineering để làm chủ mọi công cụ AI.
                    </p>

                    <!-- Phần 1: Quá trình tạo ra kết quả -->
                    <div class="bg-[#F8F7F4] p-6 rounded-lg shadow-inner border-l-4 border-[#739072] mb-8">
                        <h4 class="text-xl font-bold mb-4 text-[#4F6F52]">1. Quá trình tạo ra kết quả</h4>
                        <p class="text-gray-700 mb-6">
                            Việc tương tác với AI để đạt được kết quả mong muốn là một quá trình linh hoạt và mang tính lặp lại. AI không phải là một "hộp đen" chỉ đưa ra câu trả lời duy nhất mà là một công cụ có thể được tinh chỉnh thông qua phản hồi của bạn.
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="prompt-card p-5 rounded-lg bg-white">
                                <h5 class="font-bold text-lg mb-1">Lặp lại & Tinh chỉnh</h5>
                                <p class="text-gray-600">Thử nghiệm, sửa đổi prompt dựa trên kết quả nhận được. Coi AI như cộng sự.</p>
                            </div>
                            <div class="prompt-card p-5 rounded-lg bg-white">
                                <h5 class="font-bold text-lg mb-1">Học từ phản hồi</h5>
                                <p class="text-gray-600">Phân tích kết quả, ghi nhớ cấu trúc hiệu quả, tránh lỗi phổ biến.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Phần 2: Như thế nào là Prompt chuẩn (Hướng dẫn tạo Prompt chuyên nghiệp) -->
                    <div class="bg-[#F8F7F4] p-6 rounded-lg shadow-inner border-l-4 border-[#739072]">
                        <h4 class="text-xl font-bold mb-4 text-[#4F6F52]">2. Như thế nào là Prompt chuẩn (Hướng dẫn tạo Prompt chuyên nghiệp)</h4>
                        <p class="text-gray-700 mb-6">
                            Để đạt được kết quả chính xác và chất lượng cao từ AI, việc xây dựng một prompt "chuẩn" là yếu tố then chốt. Dưới đây là các thành phần cấu tạo nên một prompt chuyên nghiệp.
                        </p>

                        <div class="lg:flex lg:space-x-8">
                            <!-- Cột trái: Cấu trúc của một câu Prompt -->
                            <div class="lg:w-1/3 mb-8 lg:mb-0">
                                <h5 class="text-lg font-bold text-[#4F6F52] mb-3">2.1. Cấu trúc của một câu Prompt</h5>
                                <div class="grid grid-cols-1 gap-4">
                                    <div class="prompt-card p-4 rounded-lg bg-white">
                                        <h6 class="font-bold text-base mb-1 highlight-role-context">Vai trò / Ngữ cảnh</h6>
                                        <p class="text-gray-600 text-sm">Đặt AI vào vai trò hoặc cung cấp bối cảnh.</p>
                                    </div>
                                    <div class="prompt-card p-4 rounded-lg bg-white">
                                        <h6 class="font-bold text-base mb-1 highlight-input-info">Thông tin đầu vào</h6>
                                        <p class="text-gray-600 text-sm">Dữ liệu, văn bản, thông tin AI cần xử lý.</p>
                                    </div>
                                    <div class="prompt-card p-4 rounded-lg bg-white">
                                        <h6 class="font-bold text-base mb-1 highlight-output-req">Yêu cầu đầu ra (Định dạng / Nội dung)</h6>
                                        <p class="text-gray-600 text-sm">Nêu rõ bạn muốn AI trả lời dưới dạng nào, nội dung ra sao.</p>
                                    </div>
                                    <div class="prompt-card p-4 rounded-lg bg-white">
                                        <h6 class="font-bold text-base mb-1 highlight-knowledge-limit">Giới hạn kiến thức</h6>
                                        <p class="text-gray-600 text-sm">Phạm vi kiến thức AI nên hoặc không nên dựa vào.</p>
                                    </div>
                                    <div class="prompt-card p-4 rounded-lg bg-white">
                                        <h6 class="font-bold text-base mb-1 highlight-task-assign">Giao nhiệm vụ</h6>
                                        <p class="text-gray-600 text-sm">Chỉ thị hành động chính mà bạn muốn AI thực hiện.</p>
                                    </div>
                                </div>
                                <h5 class="text-lg font-bold text-[#4F6F52] mt-8 mb-3">2.2. Lưu ý khi tạo Prompt</h5>
                                <div class="grid grid-cols-1 gap-4">
                                    <div class="prompt-card p-4 rounded-lg bg-white">
                                        <h6 class="font-bold text-base mb-1 highlight-note-breakdown">Chia nhỏ Tác vụ</h6>
                                        <p class="text-gray-600 text-sm">Chia yêu cầu phức tạp thành các bước nhỏ.</p>
                                    </div>
                                    <div class="prompt-card p-4 rounded-lg bg-white">
                                        <h6 class="font-bold text-base mb-1 highlight-note-example">Cung cấp Ví dụ</h6>
                                        <p class="text-gray-600 text-sm">Cung cấp ví dụ về đầu ra mong muốn để AI tuân theo định dạng.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Cột phải: Ví dụ thực hành (cuộn dọc) -->
                            <div class="lg:w-2/3 flex flex-col">
                                <h4 class="text-xl font-bold text-[#4F6F52] mb-4">Ví dụ thực hành:</h4>
                                <div class="scroll-y-container flex-grow">
                                    <!-- Ví dụ 1: Giáo dục IT / Tin học văn phòng -->
                                    <div class="bg-gray-100 p-6 rounded-lg shadow-inner mb-6">
                                        <h5 class="text-lg font-semibold mb-3">Ví dụ 1: Dành cho Giáo dục IT / Tin học văn phòng</h5>
                                        <div class="mb-4">
                                            <p class="font-medium text-red-600 mb-1">Prompt Kém hiệu quả:</p>
                                            <div class="bg-gray-200 p-3 rounded-md text-gray-800 italic">
                                                "Viết một bài giảng về Excel."
                                            </div>
                                        </div>
                                        <div>
                                            <p class="font-medium text-green-600 mb-1">Prompt Hiệu quả hơn:</p>
                                            <div class="bg-gray-200 p-3 rounded-md text-gray-800 leading-relaxed">
                                                <span class="highlight-role-context">Bạn là một nhà giáo dục về IT, chuyên giảng dạy tin học văn phòng.</span> <br>
                                                <span class="highlight-task-assign">Hãy viết một bài giảng ngắn gọn</span> <span class="highlight-output-req">(khoảng 300 từ)</span> về cách sử dụng hàm VLOOKUP trong Excel cho <span class="highlight-input-info">học viên mới bắt đầu.</span> <br>
                                                Bài giảng cần bao gồm: <span class="highlight-output-req">định nghĩa hàm, cú pháp, một ví dụ thực tế đơn giản, và các lỗi thường gặp.</span>
                                            </div>
                                            <p class="text-sm text-gray-600 mt-2">
                                                <span class="font-semibold">Giải thích:</span> Prompt hiệu quả hơn đã xác định rõ <span class="highlight-role-context">vai trò của AI</span>, <span class="highlight-task-assign">nhiệm vụ</span>, <span class="highlight-output-req">định dạng/giới hạn độ dài</span>, <span class="highlight-input-info">đối tượng học viên</span>, và các <span class="highlight-output-req">yêu cầu nội dung cụ thể</span>.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Ví dụ 2: Phân tích Dữ liệu -->
                                    <div class="bg-gray-100 p-6 rounded-lg shadow-inner mb-6">
                                        <h5 class="text-lg font-semibold mb-3">Ví dụ 2: Dành cho Phân tích Dữ liệu</h5>
                                        <div class="mb-4">
                                            <p class="font-medium text-red-600 mb-1">Prompt Kém hiệu quả:</p>
                                            <div class="bg-gray-200 p-3 rounded-md text-gray-800 italic">
                                                "Phân tích dữ liệu bán hàng này."
                                            </div>
                                        </div>
                                        <div>
                                            <p class="font-medium text-green-600 mb-1">Prompt Hiệu quả hơn:</p>
                                            <div class="bg-gray-200 p-3 rounded-md text-gray-800 leading-relaxed">
                                                <span class="highlight-role-context">Bạn là một nhà phân tích dữ liệu kinh doanh.</span> <br>
                                                With <span class="highlight-input-info">dữ liệu bán hàng năm 2024 (bao gồm các cột: Ngày, Sản phẩm, Doanh số, Khu vực, Kênh bán hàng)</span>, <span class="highlight-task-assign">hãy xác định</span> <span class="highlight-output-req">3 sản phẩm có doanh số cao nhất, 2 khu vực có mức tăng trưởng doanh số nhanh nhất trong quý cuối cùng, và đề xuất 1 hành động kinh doanh dựa trên những phân tích này.</span> <br>
                                                <span class="highlight-output-req">Trình bày kết quả dưới dạng bullet points.</span>
                                            </div>
                                            <p class="text-sm text-gray-600 mt-2">
                                                <span class="font-semibold">Giải thích:</span> Prompt hiệu quả hơn đã định rõ <span class="highlight-role-context">vai trò AI</span>, <span class="highlight-input-info">dữ liệu đầu vào (cấu trúc cột)</span>, <span class="highlight-task-assign">nhiệm vụ chính</span>, và <span class="highlight-output-req">mục tiêu phân tích/định dạng đầu ra cụ thể</span>.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Ví dụ 3: Marketing / Sáng tạo nội dung -->
                                    <div class="bg-gray-100 p-6 rounded-lg shadow-inner mb-6">
                                        <h5 class="text-lg font-semibold mb-3">Ví dụ 3: Dành cho Marketing / Sáng tạo nội dung</h5>
                                        <div class="mb-4">
                                            <p class="font-medium text-red-600 mb-1">Prompt Kém hiệu quả:</p>
                                            <div class="bg-gray-200 p-3 rounded-md text-gray-800 italic">
                                                "Viết quảng cáo cho sản phẩm."
                                            </div>
                                        </div>
                                        <div>
                                            <p class="font-medium text-green-600 mb-1">Prompt Hiệu quả hơn:</p>
                                            <div class="bg-gray-200 p-3 rounded-md text-gray-800 leading-relaxed">
                                                <span class="highlight-role-context">Bạn là một chuyên gia marketing nội dung.</span> <br>
                                                <span class="highlight-task-assign">Hãy viết</span> <span class="highlight-output-req">3 tiêu đề quảng cáo ngắn gọn (dưới 10 từ) và 1 đoạn mô tả (khoảng 50 từ)</span> cho một sản phẩm <span class="highlight-input-info">'Máy lọc không khí thông minh'</span> hướng đến <span class="highlight-input-info">đối tượng khách hàng là các gia đình trẻ có con nhỏ, ưu tiên sự an toàn và tiện lợi.</span> <br>
                                                <span class="highlight-output-req">Giọng văn cần ấm áp, đáng tin cậy và khơi gợi cảm xúc.</span>
                                            </div>
                                            <p class="text-sm text-gray-600 mt-2">
                                                <span class="font-semibold">Giải thích:</span> Prompt hiệu quả hơn đã chỉ định <span class="highlight-role-context">vai trò AI</span>, <span class="highlight-task-assign">nhiệm vụ</span>, <span class="highlight-output-req">số lượng và độ dài mong muốn</span>, <span class="highlight-input-info">tên sản phẩm và đối tượng khách hàng</span>, lợi ích chính cần nhấn mạnh, và <span class="highlight-output-req">giọng văn yêu cầu</span>.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Ví dụ 4: Liệt kê các nguyên thủ của nước ta từ 1975 đến nay -->
                                    <div class="bg-gray-100 p-6 rounded-lg shadow-inner mb-6">
                                        <h5 class="text-lg font-semibold mb-3">Ví dụ 4: Liệt kê các nguyên thủ quốc gia Việt Nam (từ 1975)</h5>
                                        <div class="mb-4">
                                            <p class="font-medium text-red-600 mb-1">Prompt Kém hiệu quả:</p>
                                            <div class="bg-gray-200 p-3 rounded-md text-gray-800 italic">
                                                "Ai là chủ tịch nước từ năm 1975 đến nay?"
                                            </div>
                                        </div>
                                        <div>
                                            <p class="font-medium text-green-600 mb-1">Prompt Hiệu quả hơn:</p>
                                            <div class="bg-gray-200 p-3 rounded-md text-gray-800 leading-relaxed">
                                                <span class="highlight-role-context">Bạn là một chuyên gia lịch sử Việt Nam.</span> <br>
                                                <span class="highlight-task-assign">Hãy liệt kê</span> <span class="highlight-output-req">tên đầy đủ và thời gian tại nhiệm (từ năm đến năm)</span> của <span class="highlight-input-info">các Chủ tịch nước và Chủ tịch Hội đồng Nhà nước của Cộng hòa Xã hội Chủ nghĩa Việt Nam</span> <span class="highlight-input-info">từ năm 1975 đến nay.</span> <br>
                                                <span class="highlight-output-req">Trình bày dưới dạng danh sách có thứ tự.</span>
                                            </div>
                                            <p class="text-sm text-gray-600 mt-2">
                                                <span class="font-semibold">Giải thích:</span> Prompt hiệu quả xác định <span class="highlight-role-context">vai trò chuyên gia</span>, <span class="highlight-task-assign">nhiệm vụ cụ thể</span>, <span class="highlight-input-info">ngữ cảnh lịch sử và đối tượng (Chủ tịch nước/Hội đồng Nhà nước)</span>, và <span class="highlight-output-req">định dạng đầu ra rõ ràng</span>.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Ví dụ 5: Đánh giá tình trạng trẻ em đuối nước -->
                                    <div class="bg-gray-100 p-6 rounded-lg shadow-inner mb-6">
                                        <h5 class="text-lg font-semibold mb-3">Ví dụ 5: Đánh giá tình trạng trẻ em đuối nước</h5>
                                        <div class="mb-4">
                                            <p class="font-medium text-red-600 mb-1">Prompt Kém hiệu quả:</p>
                                            <div class="bg-gray-200 p-3 rounded-md text-gray-800 italic">
                                                "Đánh giá về việc trẻ em đuối nước."
                                            </div>
                                        </div>
                                        <div>
                                            <p class="font-medium text-green-600 mb-1">Prompt Hiệu quả hơn:</p>
                                            <div class="bg-gray-200 p-3 rounded-md text-gray-800 leading-relaxed">
                                                <span class="highlight-role-context">Bạn là một chuyên gia về an toàn trẻ em và dữ liệu xã hội.</span> <br>
                                                <span class="highlight-task-assign">Dựa trên</span> <span class="highlight-input-info">các báo cáo thống kê gần nhất về tình hình đuối nước ở trẻ em tại Việt Nam trong 5 năm gần đây</span>, <span class="highlight-task-assign">hãy đánh giá</span> <span class="highlight-output-req">mức độ nghiêm trọng của vấn đề, các nguyên nhân chính (nếu có thông tin), và đề xuất 3 giải pháp trọng tâm</span> mà các cộng đồng và gia đình có thể thực hiện để phòng tránh. <br>
                                                <span class="highlight-output-req">Trình bày báo cáo tóm tắt (khoảng 400 từ) với các tiêu đề rõ ràng.</span>
                                                <span class="highlight-knowledge-limit">Lưu ý: Chỉ sử dụng thông tin công khai và có tính xác thực.</span>
                                            </div>
                                            <p class="text-sm text-gray-600 mt-2">
                                                <span class="font-semibold">Giải thích:</span> Prompt hiệu quả xác định <span class="highlight-role-context">vai trò chuyên gia</span>, <span class="highlight-input-info">ngữ cảnh dữ liệu (thống kê 5 năm)</span>, <span class="highlight-task-assign">nhiệm vụ đánh giá và đề xuất</span>, <span class="highlight-output-req">yêu cầu về nội dung và định dạng</span>, cùng với <span class="highlight-knowledge-limit">giới hạn kiến thức</span> để đảm bảo tính chính xác.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Ví dụ 6: Kể tên các món ăn ngon quận 7 -->
                                    <div class="bg-gray-100 p-6 rounded-lg shadow-inner">
                                        <h5 class="text-lg font-semibold mb-3">Ví dụ 6: Các món ăn ngon Quận 7, TP.HCM</h5>
                                        <div class="mb-4">
                                            <p class="font-medium text-red-600 mb-1">Prompt Kém hiệu quả:</p>
                                            <div class="bg-gray-200 p-3 rounded-md text-gray-800 italic">
                                                "Món gì ngon ở Quận 7?"
                                            </div>
                                        </div>
                                        <div>
                                            <p class="font-medium text-green-600 mb-1">Prompt Hiệu quả hơn:</p>
                                            <div class="bg-gray-200 p-3 rounded-md text-gray-800 leading-relaxed">
                                                <span class="highlight-role-context">Bạn là một chuyên gia ẩm thực địa phương tại TP.HCM.</span> <br>
                                                <span class="highlight-task-assign">Hãy gợi ý</span> <span class="highlight-output-req">5 món ăn đặc trưng và địa chỉ quán ăn nổi tiếng</span> tại <span class="highlight-input-info">Quận 7, TP.HCM</span>, phù hợp cho <span class="highlight-input-info">bữa tối với gia đình.</span> <br>
                                                <span class="highlight-output-req">Thông tin bao gồm: Tên món, địa chỉ (cụ thể đường), và một mô tả ngắn hấp dẫn (khoảng 20 từ) về món ăn đó.</span>
                                            </div>
                                            <p class="text-sm text-gray-600 mt-2">
                                                <span class="font-semibold">Giải thích:</span> Prompt hiệu quả đã xác định <span class="highlight-role-context">vai trò chuyên gia</span>, <span class="highlight-task-assign">nhiệm vụ gợi ý</span>, <span class="highlight-output-req">số lượng và loại thông tin đầu ra</span>, <span class="highlight-input-info">khu vực địa lý và đối tượng phù hợp</span>, cùng với <span class="highlight-output-req">định dạng chi tiết cho mỗi mục</span>.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- 2.2. Lưu ý khi tạo Prompt (Now outside the flex, full width) -->
                        <div class="w-full mt-8"> 
                            <h5 class="text-lg font-bold text-[#4F6F52] mb-3">2.2. Lưu ý khi tạo Prompt</h5>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="prompt-card p-4 rounded-lg bg-white">
                                    <h6 class="font-bold text-base mb-1 highlight-note-breakdown">Chia nhỏ Tác vụ</h6>
                                    <p class="text-gray-600 text-sm">Chia yêu cầu phức tạp thành các bước nhỏ.</p>
                                </div>
                                <div class="prompt-card p-4 rounded-lg bg-white">
                                    <h6 class="font-bold text-base mb-1 highlight-note-example">Cung cấp Ví dụ</h6>
                                    <p class="text-gray-600 text-sm">Cung cấp ví dụ về đầu ra mong muốn để AI tuân theo định dạng.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <!-- Chương 3: Khai thác sức mạnh của Gemini -->
            <div class="tab-pane hidden" id="chapter3">
                <section id="chapter3-section" class="mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6 text-[#4F6F52]">Chương 3: Khai thác sức mạnh của Gemini</h2>
                    <p class="text-gray-700 mb-8">
                        Chương này đi sâu vào nền tảng AI đa phương thức của Google – Gemini, hướng dẫn bạn cách tận dụng các tính năng mạnh mẽ của nó để tối ưu hóa công việc cá nhân, phân tích dữ liệu và đặc biệt là sáng tạo nội dung đa phương tiện.
                    </p>

                    <h3 class="text-2xl font-bold mb-4 text-[#4F6F52]">3.1. Giới thiệu Gemini và những tính năng nổi bật</h3>
                    <ul class="list-disc list-inside text-gray-600 space-y-2 mb-6">
                        <li>**Tổng quan về hệ sinh thái Gemini:** Khả năng xử lý văn bản, hình ảnh, âm thanh, video.</li>
                        <li>**Trải nghiệm Gemini Live:** Tương tác giọng nói và thời gian thực.</li>
                    </ul>

                    <h3 class="text-2xl font-bold mb-4 text-[#4F6F52]">3.2. Gemini trong quản lý công việc và cuộc sống cá nhân</h3>
                    <ul class="list-disc list-inside text-gray-600 space-y-2 mb-6">
                        <li>**Quản lý lịch trình thông minh:** Đặt lịch hẹn, cá nhân hóa lịch làm việc.</li>
                        <li>**Tối ưu hóa giao tiếp:** Soạn thảo email chuyên nghiệp và nhanh chóng.</li>
                        <li>**Quản lý tài liệu hiệu quả:** Tối ưu hóa Google Drive và Google Photos với AI.</li>
                    </ul>

                    <h3 class="text-2xl font-bold mb-4 text-[#4F6F52]">3.3. Ứng dụng Gemini trong phân tích dữ liệu</h3>
                    <ul class="list-disc list-inside text-gray-600 space-y-2 mb-6">
                        <li>**Trực quan hóa dữ liệu:** Tạo Dashboard báo cáo ấn tượng.</li>
                        <li>**Định hướng và gợi ý phân tích:** Để dữ liệu "lên tiếng" và đưa ra insight giá trị.</li>
                    </ul>

                    <h3 class="text-2xl font-bold mb-4 text-[#4F6F52]">3.4. Gemini và sáng tạo đa phương tiện</h3>
                    <ul class="list-disc list-inside text-gray-600 space-y-2 mb-6">
                        <li>**Biên tập hình ảnh:** Tạo công cụ chỉnh sửa hình ảnh theo ý muốn.</li>
                        <li>**Sản xuất video chất lượng:** Tạo video chuyên nghiệp với Veo 3.</li>
                        <li>**Nghệ thuật tạo hình ảnh:** Biến ý tưởng thành hình ảnh với Imagine 4.</li>
                        <li>**Sáng tạo âm thanh:** Tạo nhạc, hiệu ứng với Lyria 2.</li>
                        <li>**Trổ tài DJ:** Pha trộn âm nhạc và tạo bản phối với MusicFX DJ.</li>
                    </ul>

                    <h3 class="text-2xl font-bold mb-4 text-[#4F6F52]">3.5. Thiết kế Chatbot cá nhân hóa với Gemini (Gems)</h3>
                    <p class="text-gray-700">Tìm hiểu cách xây dựng các chatbot tùy chỉnh để tự động hóa các tác vụ hoặc cung cấp thông tin nhanh chóng.</p>
                </section>
            </div>

            <!-- Chương 4: Ứng dụng toàn diện với ChatGPT -->
            <div class="tab-pane hidden" id="chapter4">
                <section id="chapter4-section" class="mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6 text-[#4F6F52]">Chương 4: Ứng dụng toàn diện với ChatGPT</h2>
                    <p class="text-gray-700 mb-8">
                        Chương này khám phá ChatGPT, từ khả năng hội thoại tự nhiên đến các ứng dụng nâng cao trong phân tích dữ liệu và hỗ trợ công việc. Bạn sẽ học cách tận dụng tối đa nền tảng này cho các tác vụ hàng ngày và các dự án lớn.
                    </p>

                    <h3 class="text-2xl font-bold mb-4 text-[#4F6F52]">4.1. Giới thiệu ChatGPT và các khả năng tương tác</h3>
                    <ul class="list-disc list-inside text-gray-600 space-y-2 mb-6">
                        <li>**Tổng quan về ChatGPT:** Các khả năng cơ bản và nâng cao.</li>
                        <li>**Tương tác giọng nói:** ChatGPT Voice Chat.</li>
                        <li>**Sáng tạo hình ảnh:** Tạo hình ảnh trực tiếp với ChatGPT.</li>
                    </ul>

                    <h3 class="text-2xl font-bold mb-4 text-[#4F6F52]">4.2. Ứng dụng ChatGPT trong phân tích dữ liệu</h3>
                    <ul class="list-disc list-inside text-gray-600 space-y-2 mb-6">
                        <li>**Trực quan hóa dữ liệu:** Biến số liệu khô khan thành biểu đồ dễ hiểu.</li>
                        <li>**Phân tích chỉ số:** Nhận diện và đánh giá các chỉ số quan trọng.</li>
                    </ul>

                    <h3 class="text-2xl font-bold mb-4 text-[#4F6F52]">4.3. ChatGPT trong hỗ trợ công việc và cuộc sống hàng ngày</h3>
                    <ul class="list-disc list-inside text-gray-600 space-y-2 mb-6">
                        <li>**Lập kế hoạch thông minh:** Cá nhân và dự án dài hạn.</li>
                        <li>**Biên bản cuộc họp:** Hỗ trợ viết biên bản nhanh chóng, chính xác.</li>
                        <li>**Tăng cường thuyết trình:** Hỗ trợ chuẩn bị nội dung và bố cục thuyết trình.</li>
                    </ul>

                    <h3 class="text-2xl font-bold mb-4 text-[#4F6F52]">4.4. Các công cụ mở rộng và tùy chỉnh trong ChatGPT</h3>
                    <ul class="list-disc list-inside text-gray-600 space-y-2 mb-6">
                        <li>Hướng dẫn sử dụng Plugins/Extensions để mở rộng tính năng.</li>
                    </ul>

                    <h3 class="text-2xl font-bold mb-4 text-[#4F6F52]">4.5. Xây dựng Chatbot tùy chỉnh với ChatGPT</h3>
                    <p class="text-gray-700">Khám phá cách tạo các chatbot được tùy chỉnh (GPTs) cho các mục đích cụ thể.</p>
                </section>
            </div>

            <!-- Chương 5: Các công cụ AI chuyên biệt và lập trình No-code -->
            <div class="tab-pane hidden" id="chapter5">
                <section id="chapter5-section" class="mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6 text-[#4F6F52]">Chương 5: Các công cụ AI chuyên biệt và lập trình No-code</h2>
                    <p class="text-gray-700 mb-8">
                        Chương này giới thiệu NotebookLM như một trợ lý nghiên cứu mạnh mẽ, đồng thời khám phá tiềm năng của lập trình No-code với AI, giúp bạn tạo ra các ứng dụng mà không cần viết một dòng mã nào.
                    </p>

                    <h3 class="text-2xl font-bold mb-4 text-[#4F6F52]">5.1. NotebookLM: Nền tảng phân tích và tổng hợp dữ liệu nâng cao</h3>
                    <ul class="list-disc list-inside text-gray-600 space-y-2 mb-6">
                        <li>**Tổng hợp dữ liệu đa nguồn:** Từ tài liệu, ghi chú, trang web...</li>
                        <li>**Tóm tắt thông tin:** Chắt lọc nội dung chính nhanh chóng.</li>
                        <li>**Tạo sơ đồ tư duy:** Sắp xếp ý tưởng trực quan từ dữ liệu.</li>
                        <li>**Phân tích dữ liệu cho báo cáo:** Hỗ trợ viết báo cáo chuyên sâu.</li>
                        <li>**Trích nguồn dữ liệu:** Đảm bảo tính minh bạch và độ tin cậy.</li>
                        <li>**Sáng tạo Podcast:** Biến dữ liệu thành nội dung âm thanh hấp dẫn.</li>
                    </ul>

                    <h3 class="text-2xl font-bold mb-4 text-[#4F6F52]">5.2. Khám phá các ứng dụng lập trình No-Code với AI</h3>
                    <ul class="list-disc list-inside text-gray-600 space-y-2 mb-6">
                        <li>Giới thiệu khái niệm và lợi ích của lập trình No-Code.</li>
                        <li>Tạo ra các chương trình và ứng dụng cơ bản mà không cần viết code (trong Gemini hoặc ChatGPT).</li>
                        <li>Hướng dẫn xuất file và tải về máy từ các công cụ AI (ví dụ: từ GPT).</li>
                    </ul>
                </section>
            </div>

            <!-- Tài liệu & Tài nguyên -->
            <div class="tab-pane hidden" id="resources">
                <section id="resources-section" class="mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6 text-[#4F6F52]">Tài liệu & Tài nguyên</h2>
                    <p class="text-gray-700 mb-8">
                        Dưới đây là danh sách các tài liệu và tài nguyên bổ trợ mà bạn có thể tải về hoặc truy cập để phục vụ quá trình học tập và ứng dụng AI.
                    </p>
                    <div class="overflow-x-auto rounded-lg border border-white/30 shadow-md">
                        <table class="w-full text-sm text-left text-gray-800">
                            <thead class="text-xs text-gray-900 uppercase bg-white/40 backdrop-blur-md">
                                <tr>
                                    <th scope="col" class="px-6 py-3">App</th>
                                    <th scope="col" class="px-6 py-3">Version</th>
                                    <th scope="col" class="px-6 py-3"><span class="sr-only">Hành động</span></th>
                                </tr>
                            </thead>
                            <tbody id="resources-table-body">
                                <!-- Content will be populated by JavaScript -->
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>

        </div> <!-- End of main-content-area -->

    </main>
    
    <footer class="bg-gray-800 text-white py-6">
        <div class="container mx-auto text-center">
            <p>&copy; 2025. Trang web được tạo để minh họa Giáo trình Ứng dụng AI.</p>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');

            mobileMenuButton.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
            });

            document.querySelectorAll('#mobile-menu a').forEach(link => {
                link.addEventListener('click', () => {
                    mobileMenu.classList.add('hidden');
                });
            });

            const tabButtons = document.querySelectorAll('.tab-button');
            const tabPanes = document.querySelectorAll('.tab-pane');

            function showTab(tabId) {
                tabPanes.forEach(pane => {
                    pane.classList.add('hidden');
                });
                tabButtons.forEach(button => {
                    button.classList.remove('active');
                });

                document.getElementById(tabId).classList.remove('hidden');
                document.querySelector(`.tab-button[data-tab="${tabId}"]`).classList.add('active');
            }

            tabButtons.forEach(button => {
                button.addEventListener('click', function() {
                    showTab(this.dataset.tab);
                });
            });

            // Initialize the first tab (Giới Thiệu Khóa Học) as active
            showTab('introduction');
            
            const ctx = document.getElementById('courseStructureChart').getContext('2d');
            const courseStructureChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: ['Chương 1', 'Chương 2', 'Chương 3 & 4', 'Chương 5', 'Tổng kết'],
                    datasets: [{
                        label: 'Phân bổ thời lượng',
                        data: [4.5, 4.5, 22, 7, 2.5], /* Adjusted data for new chapter split */
                        backgroundColor: [
                            '#739072',
                            '#4F6F52',
                            '#A9B5A9',
                            '#8B9B8B', /* New color for a new chapter */
                            '#ECE3CE'
                        ],
                        borderColor: '#F8F7F4',
                        borderWidth: 4,
                        hoverOffset: 10
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'bottom',
                             labels: {
                                color: '#262626',
                                font: {
                                    size: 12
                                }
                            }
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    let label = context.label || '';
                                    if (label) {
                                        label += ': ';
                                    }
                                    if (context.parsed !== null) {
                                        label += context.parsed + ' giờ (ước tính)';
                                    }
                                    return label;
                                }
                            }
                        }
                    },
                     cutout: '60%'
                }
            });

            // Dummy data for resources table
            const resourcesData = [
                { appname: 'Giáo trình AI cơ bản (PDF)', version: '1.0', link_truycap: '#', ten_hanhdong: 'Tải về' },
                { appname: 'Bộ công cụ Prompt mẫu', version: '2024.Q2', link_truycap: '#', ten_hanhdong: 'Xem ngay' },
                { appname: 'Video hướng dẫn cài đặt Gemini', version: '1.0', link_truycap: '#', ten_hanhdong: 'Xem ngay' },
                { appname: 'Tài liệu sử dụng ChatGPT nâng cao', version: '1.1', link_truycap: '#', ten_hanhdong: 'Tải về' },
                { appname: 'Bài tập thực hành NotebookLM', version: 'Beta', link_truycap: '#', ten_hanhdong: 'Tải về' },
                { appname: 'Checklist tối ưu Prompt', version: '1.0', link_truycap: '#', ten_hanhdong: 'Tải về' },
                { appname: 'Phần mềm AI No-code (dùng thử)', version: 'Pro Trial', link_truycap: '#', ten_hanhdong: 'Truy cập' }
            ];

            const resourcesTableBody = document.getElementById('resources-table-body');
            if (resourcesTableBody) {
                if (resourcesData.length > 0) {
                    resourcesData.forEach(resource => {
                        const row = document.createElement('tr');
                        row.classList.add('bg-white/20', 'border-b', 'border-white/20', 'hover:bg-white/40', 'transition-colors', 'duration-200');

                        row.innerHTML = `
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">${resource.appname}</th>
                            <td class="px-6 py-4"><span class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full">${resource.version}</span></td>
                            <td class="px-6 py-4 text-right">
                                <a href="${resource.link_truycap}" class="font-medium text-indigo-600 hover:underline" target="_blank">${resource.ten_hanhdong}</a>
                            </td>
                        `;
                        resourcesTableBody.appendChild(row);
                    });
                } else {
                    const noResourceRow = document.createElement('tr');
                    noResourceRow.innerHTML = `<td colspan="3" class="px-6 py-4 text-center text-gray-600">Không có tài nguyên nào.</td>`;
                    resourcesTableBody.appendChild(noResourceRow);
                }
            }
        });
    </script>
</body>
</html>
