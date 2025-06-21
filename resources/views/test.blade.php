<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'MinhTrietEras')</title>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" href="{{ asset('assets/images/logo_tron.png') }}" type="image/x-icon" />

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Liên kết đến file CSS tùy chỉnh -->
    <link rel="stylesheet" href="assets/css/liquid_glass.css">

</head>
<body class="bg-gray-100 text-gray-800">

    <!-- ======================= 1. NAVBAR SECTION (ADVANCED GLASS STYLE) ======================= -->
    <header class="custom-shadow bg-white/25 backdrop-blur-xl fixed top-4 left-1/2 -translate-x-1/2 w-11/12 max-w-6xl z-50 rounded-3xl border border-white/30 transition-all duration-300 py-5">
        <div class="container mx-auto px-6 flex justify-between items-center">
            <a href="{{ route('login') }}" class="text-2xl font-bold text-gray-900">
                <img src="{{ asset('assets/images/logo.png') }}" alt="MinhTrietEras" class="h-10 w-auto">
            </a>
            <nav class="hidden md:flex items-center space-x-2">
                <a href="{{ route('home') }}" class="mouse-track-gradient group relative transition-all duration-300 hover:-translate-y-1">
                    <div class="glow-effect absolute -inset-0.5 rounded-xl blur-sm opacity-0 group-hover:opacity-75 transition duration-300"></div>
                    <div class="relative px-4 py-2 bg-transparent rounded-xl border border-transparent group-hover:bg-white/40 group-hover:border-white/40 transition-all duration-300">
                        <span class="font-medium text-gray-800 group-hover:text-gray-900">Home</span>
                    </div>
                </a>
                <a href="{{ route('posts.index') }}" class="mouse-track-gradient group relative transition-all duration-300 hover:-translate-y-1">
                    <div class="glow-effect absolute -inset-0.5 rounded-xl blur-sm opacity-0 group-hover:opacity-75 transition duration-300"></div>
                    <div class="relative px-4 py-2 bg-transparent rounded-xl border border-transparent group-hover:bg-white/40 group-hover:border-white/40 transition-all duration-300">
                        <span class="font-medium text-gray-800 group-hover:text-gray-900">Tutorials</span>
                    </div>
                </a>
                <a href="{{ route('tools.index') }}" class="mouse-track-gradient group relative transition-all duration-300 hover:-translate-y-1">
                    <div class="glow-effect absolute -inset-0.5 rounded-xl blur-sm opacity-0 group-hover:opacity-75 transition duration-300"></div>
                    <div class="relative px-4 py-2 bg-transparent rounded-xl border border-transparent group-hover:bg-white/40 group-hover:border-white/40 transition-all duration-300">
                        <span class="font-medium text-gray-800 group-hover:text-gray-900">Tools</span>
                    </div>
                </a>
                <a href="{{ route('portfolio') }}" class="mouse-track-gradient group relative transition-all duration-300 hover:-translate-y-1">
                    <div class="glow-effect absolute -inset-0.5 rounded-xl blur-sm opacity-0 group-hover:opacity-75 transition duration-300"></div>
                    <div class="relative px-4 py-2 bg-transparent rounded-xl border border-transparent group-hover:bg-white/40 group-hover:border-white/40 transition-all duration-300">
                        <span class="font-medium text-gray-800 group-hover:text-gray-900">Portfolio</span>
                    </div>
                </a>
                <a href="{{ route('resource') }}" class="mouse-track-gradient group relative transition-all duration-300 hover:-translate-y-1">
                    <div class="glow-effect absolute -inset-0.5 rounded-xl blur-sm opacity-0 group-hover:opacity-75 transition duration-300"></div>
                    <div class="relative px-4 py-2 bg-transparent rounded-xl border border-transparent group-hover:bg-white/40 group-hover:border-white/40 transition-all duration-300">
                        <span class="font-medium text-gray-800 group-hover:text-gray-900">Download</span>
                    </div>
                </a>

                <!-- Google Calendar Appointment Scheduling begin -->
<link href="https://calendar.google.com/calendar/scheduling-button-script.css" rel="stylesheet">
<script src="https://calendar.google.com/calendar/scheduling-button-script.js" async></script>
<script>
(function() {
  var target = document.currentScript;
  window.addEventListener('load', function() {
    calendar.schedulingButton.load({
      url: 'https://calendar.google.com/calendar/appointments/schedules/AcZssZ1IBcQOunErCs-s-ZDkuhAiPxgmOe-_M4WR6PvK1XxnJ7pvAj53AsDTkVVpDTbhoxqcTAYVzo6N?gv=true',
      color: '#070954',
      label: 'Booking',
      target,
    });
  });
})();
</script>
<!-- end Google Calendar Appointment Scheduling -->
            </nav>
            <button class="md:hidden text-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </div>
    </header>

    <!-- ======================= 2. CONTENT SECTION (LIQUID GLASS STYLE) ======================= -->
    <main class="w-full">
            <div class="max-w-6xl mx-auto px-6 py-12">
        <div class="bg-white/80 backdrop-blur-md p-8 md:p-12 rounded-lg shadow-lg border border-white/20">

 <div id="app-container" style="max-width: 1280px; margin-left: auto; margin-right: auto; padding: 2rem 1rem; width: 100%;">
        <div id="main-content-area" style="padding: 2rem; border-radius: 0.5rem; min-height: 100vh;">
            <!-- Internal styles for glassmorphism and specific element behaviors -->
            <style>
                .glass-background {
                    background-color: rgba(255, 255, 255, 0.2);
                    backdrop-filter: blur(8px);
                    border: 1px solid rgba(255, 255, 255, 0.3);
                    box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.15);
                }
                .glass-card {
                    background-color: rgba(255, 255, 255, 0.4);
                    backdrop-filter: blur(5px);
                    border: 1px solid rgba(255, 255, 255, 0.2);
                    box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1), 0 2px 4px -2px rgba(0,0,0,0.1);
                    transition: transform 0.3s ease-out, box-shadow 0.3s ease-out, background-color 0.3s ease-out;
                }
                .glass-card:hover {
                    transform: translateY(-5px);
                    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.2), 0 4px 6px -2px rgba(0, 0, 0, 0.1);
                    background-color: rgba(255, 255, 255, 0.6);
                }

                .ai-gemini-row, .ai-chatgpt-row, .ai-notebooklm-row {
                    transition: filter 0.3s ease-out;
                }
                .ai-gemini-row { background-color: rgba(230, 243, 230, 0.7); }
                .ai-chatgpt-row { background-color: rgba(230, 240, 248, 0.7); }
                .ai-notebooklm-row { background-color: rgba(255, 251, 230, 0.7); }
                .ai-gemini-row:hover, .ai-chatgpt-row:hover, .ai-notebooklm-row:hover {
                    filter: brightness(0.95);
                }

                .scroll-y-container {
                    height: 500px;
                    overflow-y: auto;
                    border: 1px solid #D1D5DB;
                    padding: 1rem;
                    border-radius: 0.5rem;
                    background-color: #F8F7F4;
                }

                .chart-container {
                    position: relative;
                    height: 300px;
                    width: 100%;
                    max-width: 300px;
                    margin-left: auto;
                    margin-right: auto;
                }
                @media (min-width: 768px) {
                    .chart-container {
                        height: 350px;
                        max-width: 350px;
                    }
                }
                /* New highlight colors for prompt components */
                .highlight-role-context { color: #3498DB; font-weight: 600; }
                .highlight-input-info { color: #E67E22; font-weight: 600; }
                .highlight-output-req { color: #27AE60; font-weight: 600; }
                .highlight-knowledge-limit { color: #9B59B6; font-weight: 600; }
                .highlight-task-assign { color: #E74C3C; font-weight: 600; }
                .highlight-note-breakdown { color: #1ABC9C; font-weight: 600; }
                .highlight-note-example { color: #F39C12; font-weight: 600; }
            </style>

            <!-- Chapter Selection Grid -->
            <div id="chapter-selection-grid" class="tab-pane" style="display: block;">
                <h2 style="font-size: 1.875rem; font-weight: 700; margin-bottom: 1rem; color: #4F6F52; text-align: center;">Chào mừng đến với Khóa học Ứng dụng AI</h2>
                <p style="max-width: 48rem; margin-left: auto; margin-right: auto; font-size: 1.125rem; color: #4A5568; margin-bottom: 3rem; text-align: center;">
                    Khám phá cách tối ưu hóa hiệu suất làm việc, tăng cường sáng tạo và giải quyết vấn đề hiệu quả bằng cách tận dụng sức mạnh của Trí tuệ Nhân tạo. Chọn một chương để bắt đầu hành trình của bạn!
                </p>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem;">
                    <button class="chapter-grid-button glass-card" data-tab-target="introduction" style="padding: 1.5rem; border-radius: 0.5rem; border-left: 4px solid #739072; text-align: left; cursor: pointer; display: block; width: 100%;">
                        <h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 0.5rem; color: #4F6F52;">🏠 Giới Thiệu Khóa Học</h3>
                        <p style="color: #4A5568;">Tổng quan, mục tiêu, đối tượng và yêu cầu khóa học.</p>
                    </button>
                    <button class="chapter-grid-button glass-card" data-tab-target="course-structure" style="padding: 1.5rem; border-radius: 0.5rem; border-left: 4px solid #739072; text-align: left; cursor: pointer; display: block; width: 100%;">
                        <h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 0.5rem; color: #4F6F52;">📊 Cấu Trúc & Thời Lượng</h3>
                        <p style="color: #4A5568;">Phân bổ thời gian và tổng quan các chương.</p>
                    </button>
                    <button class="chapter-grid-button glass-card" data-tab-target="chapter1" style="padding: 1.5rem; border-radius: 0.5rem; border-left: 4px solid #739072; text-align: left; cursor: pointer; display: block; width: 100%;">
                        <h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 0.5rem; color: #4F6F52;">📚 Chương 1: Tổng Quan AI & Nền Tảng</h3>
                        <p style="color: #4A5568;">Giới thiệu AI, công cụ phổ biến & cách lựa chọn.</p>
                    </button>
                    <button class="chapter-grid-button glass-card" data-tab-target="chapter2-prompt" style="padding: 1.5rem; border-radius: 0.5rem; border-left: 4px solid #739072; text-align: left; cursor: pointer; display: block; width: 100%;">
                        <h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 0.5rem; color: #4F6F52;">✍️ Chương 2: Nghệ Thuật Tối Ưu Prompt</h3>
                        <p style="color: #4A5568;">Kỹ thuật viết prompt hiệu quả với ví dụ minh họa.</p>
                    </button>
                    <button class="chapter-grid-button glass-card" data-tab-target="chapter3" style="padding: 1.5rem; border-radius: 0.5rem; border-left: 4px solid #739072; text-align: left; cursor: pointer; display: block; width: 100%;">
                        <h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 0.5rem; color: #4F6F52;">♊ Chương 3: Khai Thác Gemini</h3>
                        <p style="color: #4A5568;">Ứng dụng Gemini trong công việc và sáng tạo.</p>
                    </button>
                    <button class="chapter-grid-button glass-card" data-tab-target="chapter4" style="padding: 1.5rem; border-radius: 0.5rem; border-left: 4px solid #739072; text-align: left; cursor: pointer; display: block; width: 100%;">
                        <h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 0.5rem; color: #4F6F52;">💬 Chương 4: Ứng Dụng ChatGPT</h3>
                        <p style="color: #4A5568;">Sử dụng ChatGPT cho phân tích dữ liệu và cuộc sống.</p>
                    </button>
                    <button class="chapter-grid-button glass-card" data-tab-target="chapter5" style="padding: 1.5rem; border-radius: 0.5rem; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1), 0 2px 4px -2px rgba(0,0,0,0.1); border-left: 4px solid #739072; text-align: left; background-color: #F8F7F4; border: 1px solid #D1D5DB; cursor: pointer;">
                        <h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 0.5rem; color: #4F6F52;">💻 Chương 5: AI Chuyên Biệt & No-code</h3>
                        <p style="color: #4A5568;">Tìm hiểu NotebookLM và lập trình không cần mã.</p>
                    </button>
                    <button class="chapter-grid-button glass-card" data-tab-target="resources" style="padding: 1.5rem; border-radius: 0.5rem; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1), 0 2px 4px -2px rgba(0,0,0,0.1); border-left: 4px solid #739072; text-align: left; background-color: #F8F7F4; border: 1px solid #D1D5DB; cursor: pointer;">
                        <h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 0.5rem; color: #4F6F52;">🗂️ Tài liệu & Tài nguyên</h3>
                        <p style="color: #4A5568;">Các tài liệu bổ trợ và công cụ liên quan.</p>
                    </button>
                </div>
            </div>

            <!-- Individual Chapter Panes -->
            <!-- Giới Thiệu Khóa Học -->
            <div class="tab-pane" id="introduction" style="display: none;">
                <button class="back-to-chapters-button" style="background-color: #4F6F52; color: white; padding: 0.5rem 1rem; border-radius: 0.375rem; transition: background-color 0.3s; margin-bottom: 1.5rem; display: flex; align-items: center; gap: 0.5rem; cursor: pointer;">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" style="width: 1.25rem; height: 1.25rem;">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                    </svg>
                    <span>Về Trang Chọn Chương</span>
                </button>
                <section id="introduction-section" style="margin-bottom: 3rem; text-align: center;">
                    <h2 style="font-size: 1.875rem; font-weight: 700; margin-bottom: 1rem; color: #4F6F52;">Chào mừng đến với Khóa học Ứng dụng AI</h2>
                    <p style="max-width: 48rem; margin-left: auto; margin-right: auto; font-size: 1.125rem; color: #4A5568; margin-bottom: 2rem;">
                        Khám phá cách trang bị những kiến thức nền tảng và kỹ năng thực hành về Trí tuệ Nhân tạo (AI), tập trung vào việc ứng dụng các công cụ mạnh mẽ nhất hiện nay vào công việc và cuộc sống, từ đó tối ưu hóa hiệu suất, tăng cường sáng tạo và giải quyết vấn đề hiệu quả.
                    </p>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem; max-width: 80rem; margin-left: auto; margin-right: auto;">
                        <div style="background-color: #F8F7F4; padding: 1.5rem; border-radius: 0.5rem; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1), 0 2px 4px -2px rgba(0,0,0,0.1); border-left: 4px solid #739072;">
                            <h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 0.5rem;">Mục tiêu khóa học</h3>
                            <p style="color: #4A5568;">Phát triển kỹ năng sử dụng thành thạo Gemini, ChatGPT, NotebookLM để giải quyết các vấn đề thực tế, nâng cao tư duy phản biện và tối ưu hóa hiệu suất qua Prompt Engineering.</p>
                        </div>
                        <div style="background-color: #F8F7F4; padding: 1.5rem; border-radius: 0.5rem; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1), 0 2px 4px -2px rgba(0,0,0,0.1); border-left: 4px solid #739072;">
                            <h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 0.5rem;">Đối tượng học viên</h3>
                            <p style="color: #4A5568;">Nhân viên văn phòng, sinh viên, và bất kỳ ai mong muốn khám phá và tận dụng AI để tối ưu hóa công việc và cuộc sống cá nhân.</p>
                        </div>
                        <div style="background-color: #F8F7F4; padding: 1.5rem; border-radius: 0.5rem; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1), 0 2px 4px -2px rgba(0,0,0,0.1); border-left: 4px solid #739072; grid-column: span 1 / span 1;">
                            <h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 0.5rem;">Yêu cầu kiến thức</h3>
                            <p style="color: #4A5568;">Chỉ cần kiến thức cơ bản về tin học văn phòng và khả năng sử dụng internet. Mọi thứ khác sẽ được hướng dẫn từ đầu.</p>
                        </div>
                    </div>
                </section>
            </div>

            <!-- Cấu Trúc & Thời Lượng Khóa Học -->
            <div class="tab-pane hidden" id="course-structure" style="display: none;">
                <button class="back-to-chapters-button" style="background-color: #4F6F52; color: white; padding: 0.5rem 1rem; border-radius: 0.375rem; transition: background-color 0.3s; margin-bottom: 1.5rem; display: flex; align-items: center; gap: 0.5rem; cursor: pointer;">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" style="width: 1.25rem; height: 1.25rem;">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                    </svg>
                    <span>Về Trang Chọn Chương</span>
                </button>
                <section id="structure-section" style="margin-bottom: 3rem;">
                    <h2 style="font-size: 1.875rem; font-weight: 700; margin-bottom: 1.5rem; color: #4F6F52;">Cấu Trúc & Thời Lượng Khóa Học</h2>
                    <p style="max-width: 48rem; margin-left: auto; margin-right: auto; font-size: 1.125rem; color: #4A5568; margin-bottom: 2rem;">
                        Khóa học được thiết kế một cách khoa học, cân đối giữa lý thuyết và thực hành, đảm bảo học viên nắm vững kiến thức từ nền tảng đến chuyên sâu.
                    </p>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; align-items: center;">
                        <div style="order: 2;">
                            <h3 style="font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem;">Phân bổ thời lượng các chương</h3>
                            <p style="color: #4A5568; margin-bottom: 1.5rem;">
                                Tổng thời lượng khóa học được phân bổ hợp lý vào các chương chính, giúp học viên từng bước làm chủ các công cụ và kỹ năng quan trọng.
                            </p>
                            <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 1rem;">
                                <li style="display: flex; align-items: flex-start;">
                                    <span style="font-weight: 700; color: #4F6F52; margin-right: 0.75rem; margin-top: 0.25rem;">◆</span>
                                    <div>
                                        <h4 style="font-weight: 600;">Chương 1: Tổng quan về AI</h4>
                                        <p style="color: #4A5568;">Giới thiệu tổng quan về AI và các công cụ phổ biến. (Ước tính: 4-5 tiếng)</p>
                                    </div>
                                </li>
                                <li style="display: flex; align-items: flex-start;">
                                    <span style="font-weight: 700; color: #4F6F52; margin-right: 0.75rem; margin-top: 0.25rem;">◆</span>
                                    <div>
                                        <h4 style="font-weight: 600;">Chương 2: Nghệ thuật Tối ưu Prompt</h4>
                                        <p style="color: #4A5568;">Kỹ năng thiết yếu để tương tác hiệu quả với AI. (Ước tính: 4-5 tiếng)</p>
                                    </div>
                                </li>
                                <li style="display: flex; align-items: flex-start;">
                                    <span style="font-weight: 700; color: #4F6F52; margin-right: 0.75rem; margin-top: 0.25rem;">◆</span>
                                    <div>
                                        <h4 style="font-weight: 600;">Chương 3 & 4: Thực hành chuyên sâu (Gemini & ChatGPT)</h4>
                                        <p style="color: #4A5568;">Khai thác sức mạnh của Gemini và ChatGPT qua các bài tập thực tế. (Ước tính: 20-24 tiếng)</p>
                                    </div>
                                </li>
                                <li style="display: flex; align-items: flex-start;">
                                    <span style="font-weight: 700; color: #4F6F52; margin-right: 0.75rem; margin-top: 0.25rem;">◆</span>
                                    <div>
                                        <h4 style="font-weight: 600;">Chương 5: Công cụ chuyên biệt</h4>
                                        <p style="color: #4A5568;">Làm chủ NotebookLM và khám phá lập trình No-code. (Ước tính: 6-8 tiếng)</p>
                                    </div>
                                </li>
                                <li style="display: flex; align-items: flex-start;">
                                    <span style="font-weight: 700; color: #4F6F52; margin-right: 0.75rem; margin-top: 0.25rem;">◆</span>
                                    <div>
                                        <h4 style="font-weight: 600;">Tổng kết</h4>
                                        <p style="color: #4A5568;">Ôn tập, giải đáp và định hướng tương lai. (Ước tính: 2-3 tiếng)</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div style="order: 1;">
                            <div class="chart-container" style="position: relative; height: 350px; width: 100%; max-width: 350px; margin: auto;">
                                <canvas id="courseStructureChart"></canvas>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <!-- Chương 1: Tổng quan về AI và các công cụ nền tảng -->
            <div class="tab-pane hidden" id="chapter1" style="display: none;">
                <button class="back-to-chapters-button" style="background-color: #4F6F52; color: white; padding: 0.5rem 1rem; border-radius: 0.375rem; transition: background-color 0.3s; margin-bottom: 1.5rem; display: flex; align-items: center; gap: 0.5rem; cursor: pointer;">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" style="width: 1.25rem; height: 1.25rem;">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                    </svg>
                    <span>Về Trang Chọn Chương</span>
                </button>
                <section id="chapter1-section" style="margin-bottom: 3rem;">
                    <h2 style="font-size: 1.875rem; font-weight: 700; margin-bottom: 1.5rem; color: #4F6F52;">Chương 1: Tổng quan về AI và các công cụ nền tảng</h2>
                    <p style="color: #4A5568; margin-bottom: 2rem;">
                        Chương này cung cấp kiến thức nền tảng vững chắc về Trí tuệ Nhân tạo, từ định nghĩa cơ bản đến các ứng dụng rộng rãi trong kỷ nguyên số.
                    </p>

                    <h3 style="font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem; color: #4F6F52;">1.1. Giới thiệu tổng quan về Trí tuệ Nhân tạo (AI)</h3>
                    <p style="color: #4A5568; margin-bottom: 1.5rem;">
                        Trí tuệ Nhân tạo (AI) là một lĩnh vực khoa học máy tính rộng lớn, tập trung vào việc tạo ra các hệ thống hoặc máy móc có khả năng thực hiện các tác vụ đòi hỏi trí thông minh của con người.
                    </p>
                    <ul style="list-style-type: disc; list-style-position: inside; color: #4A5568; margin-bottom: 1.5rem; padding-left: 1rem; display: flex; flex-direction: column; gap: 0.5rem;">
                        <li>**Khái niệm cơ bản về AI:** Tập hợp các công nghệ mô phỏng khả năng nhận thức của con người (Học máy, Học sâu, Xử lý ngôn ngữ tự nhiên, Thị giác máy tính, Robot học).</li>
                        <li>**Vai trò và lợi ích của AI trong kỷ nguyên số:** Tự động hóa, tối ưu hóa hiệu suất, hỗ trợ cá nhân (quản lý lịch trình, tìm kiếm), cải thiện dịch vụ khách hàng (chatbot).</li>
                    </ul>

                    <h3 style="font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem; color: #4F6F52;">1.2. Khám phá các công cụ AI phổ biến</h3>
                    <p style="color: #4A5568; margin-bottom: 1.5rem;">
                        Sự phát triển nhanh chóng của AI đã tạo ra một hệ sinh thái đa dạng các công cụ, từ các mô hình ngôn ngữ lớn (Large Language Models - LLMs) đến các ứng dụng chuyên biệt. Việc nắm bắt các công cụ này là cần thiết để ứng dụng AI hiệu quả.
                    </p>
                    
                    <h4 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 0.75rem; color: #739072;">Tổng quan về các nền tảng AI hàng đầu & So sánh các mô hình: Trả phí và miễn phí</h4>
                    <p style="color: #4A5568; margin-bottom: 1rem;">
                        Dưới đây là bảng tổng hợp các công cụ AI phổ biến được đề cập trong khóa học, cùng với các phiên bản và mức giá ước tính (thông tin có thể thay đổi tùy thời điểm).
                    </p>
                    <div style="overflow-x: auto; margin-bottom: 2rem; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1), 0 2px 4px -2px rgba(0,0,0,0.1); border-radius: 0.5rem;">
                        <table style="min-width: 100%; background-color: white; border-collapse: collapse;">
                            <thead>
                                <tr style="background-color: #4F6F52; color: white;">
                                    <th style="padding: 0.75rem 1rem; text-align: left; font-size: 0.875rem; font-weight: 600; text-transform: uppercase; letter-spacing: 0.05em; border-top-left-radius: 0.5rem;">Công cụ AI</th>
                                    <th style="padding: 0.75rem 1rem; text-align: left; font-size: 0.875rem; font-weight: 600; text-transform: uppercase; letter-spacing: 0.05em;">Phiên bản</th>
                                    <th style="padding: 0.75rem 1rem; text-align: left; font-size: 0.875rem; font-weight: 600; text-transform: uppercase; letter-spacing: 0.05em;">Tính năng nổi bật</th>
                                    <th style="padding: 0.75rem 1rem; text-align: left; font-size: 0.875rem; font-weight: 600; text-transform: uppercase; letter-spacing: 0.05em; border-top-right-radius: 0.5rem;">Giá cả (ước tính)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="border-bottom: 1px solid #E5E7EB; background-color: rgba(230, 243, 230, 0.7);">
                                    <td rowspan="3" style="padding: 0.75rem 1rem; color: #374151; font-weight: 500; white-space: nowrap;">Google Gemini</td>
                                    <td style="padding: 0.75rem 1rem; color: #4A5568;">Miễn phí</td>
                                    <td style="padding: 0.75rem 1rem; color: #4A5568;">Gói cá nhân, sử dụng cơ bản. Truy cập mô hình Gemini Pro.</td>
                                    <td style="padding: 0.75rem 1rem; color: #4A5568; font-weight: 700;">Miễn phí</td>
                                </tr>
                                <tr style="border-bottom: 1px solid #E5E7EB; background-color: rgba(230, 243, 230, 0.7);">
                                    <td style="padding: 0.75rem 1rem; color: #4A5568;">Pro (Google AI Pro)</td>
                                    <td style="padding: 0.75rem 1rem; color: #4A5568;">
                                        <ul style="list-style-type: disc; list-style-position: inside; margin-left: 1rem; display: flex; flex-direction: column; gap: 0.25rem;">
                                            <li>Truy cập mô hình 2.5 Pro mạnh nhất & Deep Research.</li>
                                            <li>Tạo video hạn chế với Veo 3 Fast, Flow (công cụ làm phim AI với Veo 3), Whisk (tạo video từ ảnh với Veo 2).</li>
                                            <li>1.000 tín dụng AI/tháng cho Flow/Whisk.</li>
                                            <li>Tích hợp sâu Gemini trong Gmail, Tài liệu, Drive, Photos, và Chrome (chỉ Hoa Kỳ).</li>
                                            <li>2TB bộ nhớ dùng chung.</li>
                                        </ul>
                                    </td>
                                    <td style="padding: 0.75rem 1rem; color: #4A5568; font-weight: 700;">489.000₫/tháng<br>(miễn phí tháng đầu)</td>
                                </tr>
                                <tr style="border-bottom: 1px solid #E5E7EB; background-color: rgba(230, 243, 230, 0.7);">
                                    <td style="padding: 0.75rem 1rem; color: #4A5568;">Ultra (Google AI Ultra)</td>
                                    <td style="padding: 0.75rem 1rem; color: #4A5568;">
                                        <ul style="list-style-type: disc; list-style-position: inside; margin-left: 1rem; display: flex; flex-direction: column; gap: 0.25rem;">
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
                                    <td style="padding: 0.75rem 1rem; color: #4A5568; font-weight: 700;">6.000.000₫/tháng<br>(3.000.000₫/tháng cho 3 tháng đầu)</td>
                                </tr>
                                <tr style="border-bottom: 1px solid #E5E7EB; background-color: rgba(230, 240, 248, 0.7);">
                                    <td rowspan="3" style="padding: 0.75rem 1rem; color: #374151; font-weight: 500; white-space: nowrap;">OpenAI ChatGPT</td>
                                    <td style="padding: 0.75rem 1rem; color: #4A5568;">Miễn phí</td>
                                    <td style="padding: 0.75rem 1rem; color: #4A5568;">
                                        <ul style="list-style-type: disc; list-style-position: inside; margin-left: 1rem; display: flex; flex-direction: column; gap: 0.25rem;">
                                            <li>Truy cập GPT-4.1 mini.</li>
                                            <li>Dữ liệu thời gian thực từ web với tìm kiếm.</li>
                                            <li>Truy cập hạn chế GPT-4o, OpenAI 04-mini, và nghiên cứu chuyên sâu.</li>
                                            <li>Truy cập hạn chế tải tệp, phân tích dữ liệu, tạo hình ảnh, và chế độ giọng nói.</li>
                                            <li>Chỉnh sửa code với ứng dụng ChatGPT desktop cho macOS.</li>
                                            <li>Sử dụng Custom GPTs.</li>
                                        </ul>
                                    </td>
                                    <td style="padding: 0.75rem 1rem; color: #4A5568; font-weight: 700;">$0/tháng</td>
                                </tr>
                                <tr style="border-bottom: 1px solid #E5E7EB; background-color: rgba(230, 240, 248, 0.7);">
                                    <td style="padding: 0.75rem 1rem; color: #4A5568;">Plus</td>
                                    <td style="padding: 0.75rem 1rem; color: #4A5568;">
                                        <ul style="list-style-type: disc; list-style-position: inside; margin-left: 1rem; display: flex; flex-direction: column; gap: 0.25rem;">
                                            <li>Tất cả tính năng của gói Miễn phí.</li>
                                            <li>Giới hạn mở rộng cho tin nhắn, tải tệp, phân tích dữ liệu và tạo hình ảnh.</li>
                                            <li>Chế độ giọng nói tiêu chuẩn và nâng cao với video và chia sẻ màn hình.</li>
                                            <li>Truy cập nghiên cứu chuyên sâu và nhiều mô hình suy luận (OpenAI 03, OpenAI 04-mini, và OpenAI 04-mini-high).</li>
                                            <li>Truy cập bản xem trước nghiên cứu của GPT-4.5 và GPT-4.1 (tối ưu cho tác vụ code).</li>
                                            <li>Tạo và sử dụng các dự án, tác vụ, và Custom GPTs.</li>
                                            <li>Cơ hội thử nghiệm các tính năng mới.</li>
                                        </ul>
                                    </td>
                                    <td style="padding: 0.75rem 1rem; color: #4A5568; font-weight: 700;">$20 USD/tháng</td>
                                </tr>
                                <tr style="border-bottom: 1px solid #E5E7EB; background-color: rgba(230, 240, 248, 0.7);">
                                    <td style="padding: 0.75rem 1rem; color: #4A5568;">Pro</td>
                                    <td style="padding: 0.75rem 1rem; color: #4A5568;">
                                        <ul style="list-style-type: disc; list-style-position: inside; margin-left: 1rem; display: flex; flex-direction: column; gap: 0.25rem;">
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
                                    <td style="padding: 0.75rem 1rem; color: #4A5568; font-weight: 700;">$200 USD/tháng</td>
                                </tr>
                                <tr style="border-bottom: 1px solid #E5E7EB; background-color: rgba(255, 251, 230, 0.7);">
                                    <td rowspan="2" style="padding: 0.75rem 1rem; color: #374151; font-weight: 500; white-space: nowrap;">Google NotebookLM</td>
                                    <td style="padding: 0.75rem 1rem; color: #4A5568;">Miễn phí</td>
                                    <td style="padding: 0.75rem 1rem; color: #4A5568;">
                                        <ul style="list-style-type: disc; list-style-position: inside; margin-left: 1rem; display: flex; flex-direction: column; gap: 0.25rem;">
                                            <li>Được xây dựng bằng các mô hình Gemini mới nhất.</li>
                                            <li>Tải lên tệp PDF, trang web, tệp Google Tài liệu và Trang trình bày, URL YouTube, v.v.</li>
                                            <li>Tạo bản tóm tắt, Câu hỏi thường gặp, dòng thời gian và tài liệu tóm tắt bằng một lần nhấp.</li>
                                            <li>Tạo bản Tổng quan bằng âm thanh và nghe khi di chuyển.</li>
                                            <li>Đặt câu hỏi để có thông tin chi tiết hơn và nhận câu trả lời kèm nguồn trích dẫn.</li>
                                        </ul>
                                    </td>
                                    <td style="padding: 0.75rem 1rem; color: #4A5568; font-weight: 700;">Miễn phí (yêu cầu tài khoản Google)</td>
                                </tr>
                                <tr style="background-color: rgba(255, 251, 230, 0.7);">
                                    <td style="padding: 0.75rem 1rem; color: #4A5568;">Pro</td>
                                    <td style="padding: 0.75rem 1rem; color: #4A5568;">
                                        <ul style="list-style-type: disc; list-style-position: inside; margin-left: 1rem; display: flex; flex-direction: column; gap: 0.25rem;">
                                            <li>Tất cả tính năng của phiên bản Miễn phí.</li>
                                            <li>Nhận bản Tổng quan bằng âm thanh, sổ ghi chú, câu hỏi và các nguồn cho mỗi sổ ghi chú nhiều gấp 5 lần.</li>
                                            <li>Tuỳ chỉnh phong cách và độ dài cho câu trả lời liên quan đến sổ ghi chú.</li>
                                            <li>Tạo sổ ghi chú dùng chung cho nhóm của bạn và nhận số liệu phân tích về mức sử dụng.</li>
                                            <li>Tăng cường bảo mật và quyền riêng tư.</li>
                                        </ul>
                                    </td>
                                    <td style="padding: 0.75rem 1rem; color: #4A5568; font-weight: 700;">Liên hệ để biết giá</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <h4 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 0.75rem; color: #739072;">Hướng dẫn tìm kiếm và xác định công cụ AI phù học:</h4>
                    <p style="color: #4A5568; margin-bottom: 1rem;">
                        Việc tìm kiếm và lựa chọn công cụ AI phù hợp với mục tiêu cá nhân là một quá trình cần được thực hiện một cách có hệ thống.
                    </p>
                    <div style="display: flex; flex-direction: column; gap: 1.5rem;">
                        <div style="background-color: #F8F7F4; padding: 1.25rem; border-radius: 0.5rem; box-shadow: 0 1px 3px 0 rgba(0,0,0,0.1), 0 1px 2px 0 rgba(0,0,0,0.06); border-left: 4px solid #739072;">
                            <h5 style="font-size: 1.125rem; font-weight: 700; color: #4F6F52; margin-bottom: 0.5rem;">Bước 1: Xác định rõ nhu cầu và mục tiêu của bạn</h5>
                            <p style="color: #4A5568; margin-bottom: 0.75rem;">Đây là bước khởi đầu quan trọng nhất. Bạn cần AI để giải quyết vấn đề gì? Hãy liệt kê càng cụ thể càng tốt các tác vụ mà bạn muốn AI hỗ trợ:</p>
                            <ul style="list-style-type: disc; list-style-position: inside; color: #4A5568; margin-left: 1rem; display: flex; flex-direction: column; gap: 0.25rem;">
                                <li>Bạn có muốn AI hỗ trợ **viết lách** (viết email, báo cáo, bài luận, kịch bản...)?</li>
                                <li>Bạn cần AI để **phân tích dữ liệu** (tạo biểu đồ, tìm xu hướng, đưa ra insight từ bảng tính...)?</li>
                                <li>Bạn mong muốn AI giúp **thiết kế đồ họa** (tạo ảnh, chỉnh sửa ảnh, phác thảo ý tưởng...)?</li>
                                <li>Bạn muốn AI hỗ trợ **lập kế hoạch** (lịch trình cá nhân, dự án dài hạn, quản lý công việc...)?</li>
                                <li>Bạn tìm kiếm AI để **hỗ trợ học tập và nghiên cứu** (tóm tắt tài liệu, đặt câu hỏi, tạo sơ đồ tư duy...)?</li>
                                <li>Bạn có cần AI để **dịch thuật** hoặc **sáng tạo nội dung đa phương tiện** (video, âm thanh)?</li>
                            </ul>
                            <p style="color: #4A5568; margin-top: 0.75rem;">Việc xác định rõ mục tiêu sẽ giúp bạn thu hẹp phạm vi các công cụ tiềm năng và tránh lãng phí thời gian vào những lựa chọn không phù hợp.</p>
                        </div>

                        <div style="background-color: #F8F7F4; padding: 1.25rem; border-radius: 0.5rem; box-shadow: 0 1px 3px 0 rgba(0,0,0,0.1), 0 1px 2px 0 rgba(0,0,0,0.06); border-left: 4px solid #739072;">
                            <h5 style="font-size: 1.125rem; font-weight: 700; color: #4F6F52; margin-bottom: 0.5rem;">Bước 2: Tìm hiểu và so sánh toàn diện các công cụ</h5>
                            <p style="color: #4A5568; margin-bottom: 0.75rem;">Khi đã có danh sách nhu cầu, hãy bắt đầu tìm hiểu các công cụ AI trên thị trường:</p>
                            <ul style="list-style-type: disc; list-style-position: inside; color: #4A5568; margin-left: 1rem; display: flex; flex-direction: column; gap: 0.25rem;">
                                <li>**Đọc đánh giá và bài viết chuyên sâu:** Tìm kiếm các bài viết so sánh, đánh giá từ các trang công nghệ, blog chuyên ngành uy tín.</li>
                                <li>**Xem video hướng dẫn và demo:** YouTube và các nền tảng học trực tuyến có rất nhiều video giới thiệu và hướng dẫn sử dụng từng công cụ. Việc xem demo thực tế sẽ giúp bạn hình dung rõ hơn về giao diện và cách thức hoạt động.</li>
                                <li>**Tham gia cộng đồng AI:** Các diễn đàn, nhóm mạng xã hội (Facebook Groups, Reddit, Discord) là nơi tuyệt vời để đặt câu hỏi, lắng nghe kinh nghiệm từ những người dùng khác có nhu cầu tương tự bạn. Họ có thể chia sẻ những mẹo và lời khuyên quý giá.</li>
                                <li>**Lưu ý các tính năng tích hợp:** Nếu bạn đã sử dụng một hệ sinh thái cụ thể (ví dụ: Google Workspace, Microsoft 365), hãy ưu tiên các công cụ AI có khả năng tích hợp sâu rộng vào hệ sinh thái đó để tối ưu hóa quy trình làm việc.</li>
                            </ul>
                        </div>

                        <div style="background-color: #F8F7F4; padding: 1.25rem; border-radius: 0.5rem; box-shadow: 0 1px 3px 0 rgba(0,0,0,0.1), 0 1px 2px 0 rgba(0,0,0,0.06); border-left: 4px solid #739072;">
                            <h5 style="font-size: 1.125rem; font-weight: 700; color: #4F6F52; margin-bottom: 0.5rem;">Bước 3: Trải nghiệm thực tế (Hands-on experience)</h5>
                            <p style="color: #4A5568; margin-bottom: 0.75rem;">Lý thuyết là một chuyện, thực hành lại là chuyện khác. Đa số các công cụ AI đều cung cấp phiên bản miễn phí hoặc bản dùng thử. Hãy tận dụng cơ hội này:</p>
                            <ul style="list-style-type: disc; list-style-position: inside; color: #4A5568; margin-left: 1rem; display: flex; flex-direction: column; gap: 0.25rem;">
                                <li>**Đăng ký tài khoản miễn phí/dùng thử:** Tự mình đăng ký và trải nghiệm trực tiếp các công cụ.</li>
                                <li>**Thực hiện các tác vụ nhỏ, cụ thể:** Hãy thử yêu cầu AI thực hiện các tác vụ mà bạn đã xác định ở Bước 1. Ví dụ: nhờ AI viết một đoạn email, tóm tắt một bài báo, hoặc tạo một hình ảnh đơn giản.</li>
                                <li>**Đánh giá chất lượng đầu ra:** Xem xét liệu kết quả có đáp ứng được kỳ vọng của bạn về độ chính xác, tính sáng tạo, và tính dễ hiểu hay không.</li>
                                <li>**Đánh giá trải nghiệm người dùng (UX):** Giao diện có thân thiện không? Tốc độ phản hồi có nhanh không? Có dễ dàng để điều hướng và sử dụng các tính năng không?</li>
                            </ul>
                        </div>

                        <div style="background-color: #F8F7F4; padding: 1.25rem; border-radius: 0.5rem; box-shadow: 0 1px 3px 0 rgba(0,0,0,0.1), 0 1px 2px 0 rgba(0,0,0,0.06); border-left: 4px solid #739072;">
                            <h5 style="font-size: 1.125rem; font-weight: 700; color: #4F6F52; margin-bottom: 0.5rem;">Bước 4: Xem xét yếu tố chi phí và giá trị lâu dài</h5>
                            <p style="color: #4A5568; margin-bottom: 0.75rem;">Sau khi đã có cái nhìn tổng quan và trải nghiệm thực tế, hãy đưa ra quyết định cuối cùng:</p>
                            <ul style="list-style-type: disc; list-style-position: inside; color: #4A5568; margin-left: 1rem; display: flex; flex-direction: column; gap: 0.25rem;">
                                <li>**So sánh lợi ích và chi phí:** Đánh giá kỹ lưỡng giữa những lợi ích mà công cụ mang lại (tiết kiệm thời gian, tăng năng suất, chất lượng công việc) và chi phí bạn phải bỏ ra (nếu là phiên bản trả phí).</li>
                                <li>**Giá trị lâu dài:** Liệu công cụ này có thể đồng hành cùng bạn trong dài hạn không? Có phù hợp với sự phát triển kỹ năng và mục tiêu nghề nghiệp của bạn trong tương lai không?</li>
                                <li>**Tối ưu hóa chi phí:** Đôi khi, một công cụ miễn phí nhưng đáp ứng tốt 80% nhu cầu của bạn có thể hiệu quả hơn về mặt chi phí so với một công cụ trả phí đắt tiền mà bạn không khai thác hết tính năng.</li>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>

            <!-- Chương 2: Nghệ thuật Tối ưu hóa Prompt -->
            <div class="tab-pane hidden" id="chapter2-prompt" style="display: none;">
                <button class="back-to-chapters-button" style="background-color: #4F6F52; color: white; padding: 0.5rem 1rem; border-radius: 0.375rem; transition: background-color 0.3s; margin-bottom: 1.5rem; display: flex; align-items: center; gap: 0.5rem; cursor: pointer;">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" style="width: 1.25rem; height: 1.25rem;">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                    </svg>
                    <span>Về Trang Chọn Chương</span>
                </button>
                <section id="prompting-section" style="margin-bottom: 3rem;">
                    <h2 style="font-size: 1.875rem; font-weight: 700; margin-bottom: 1.5rem; color: #4F6F52;">Chương 2: Nghệ Thuật Tối Ưu Hóa Prompt</h2>
                    <p style="color: #4A5568; margin-bottom: 2rem;">
                        Chất lượng đầu ra của AI phụ thuộc rất nhiều vào chất lượng "câu lệnh" (prompt) của bạn. Chương này sẽ trang bị cho bạn kỹ năng Prompt Engineering để làm chủ mọi công cụ AI.
                    </p>

                    <!-- Phần 1: Quá trình tạo ra kết quả -->
                    <div style="background-color: #F8F7F4; padding: 1.5rem; border-radius: 0.5rem; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1), 0 2px 4px -2px rgba(0,0,0,0.1); border-left: 4px solid #739072; margin-bottom: 2rem;">
                        <h4 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 1rem; color: #4F6F52;">1. Quá trình tạo ra kết quả</h4>
                        <p style="color: #4A5568; margin-bottom: 1.5rem;">
                            Việc tương tác với AI để đạt được kết quả mong muốn là một quá trình linh hoạt và mang tính lặp lại. AI không phải là một "hộp đen" chỉ đưa ra câu trả lời duy nhất mà là một công cụ có thể được tinh chỉnh thông qua phản hồi của bạn.
                        </p>
                        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem;">
                            <div class="prompt-card" style="padding: 1.25rem; border-radius: 0.5rem; background-color: white; border: 1px solid #D1D5DB;">
                                <h5 style="font-size: 1.125rem; font-weight: 700; margin-bottom: 0.25rem;">Lặp lại & Tinh chỉnh</h5>
                                <p style="color: #4A5568;">Thử nghiệm, sửa đổi prompt dựa trên kết quả nhận được. Coi AI như cộng sự.</p>
                            </div>
                            <div class="prompt-card" style="padding: 1.25rem; border-radius: 0.5rem; background-color: white; border: 1px solid #D1D5DB;">
                                <h5 style="font-size: 1.125rem; font-weight: 700; margin-bottom: 0.25rem;">Học từ phản hồi</h5>
                                <p style="color: #4A5568;">Phân tích kết quả, ghi nhớ cấu trúc hiệu quả, tránh lỗi phổ biến.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Phần 2: Như thế nào là Prompt chuẩn (Hướng dẫn tạo Prompt chuyên nghiệp) -->
                    <div style="background-color: #F8F7F4; padding: 1.5rem; border-radius: 0.5rem; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1), 0 2px 4px -2px rgba(0,0,0,0.1); border-left: 4px solid #739072;">
                        <h4 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 1rem; color: #4F6F52;">2. Như thế nào là Prompt chuẩn (Hướng dẫn tạo Prompt chuyên nghiệp)</h4>
                        <p style="color: #4A5568; margin-bottom: 1.5rem;">
                            Để đạt được kết quả chính xác và chất lượng cao từ AI, việc xây dựng một prompt "chuẩn" là yếu tố then chốt. Dưới đây là các thành phần cấu tạo nên một prompt chuyên nghiệp.
                        </p>

                        <div style="display: flex; flex-wrap: wrap; gap: 2rem;">
                            <!-- Cột trái: Cấu trúc của một câu Prompt -->
                            <div style="flex: 1 1 300px; display: flex; flex-direction: column;">
                                <h5 style="font-size: 1.125rem; font-weight: 700; color: #4F6F52; margin-bottom: 0.75rem;">2.1. Cấu trúc của một câu Prompt</h5>
                                <div style="display: grid; grid-template-columns: 1fr; gap: 1rem; flex-grow: 1;">
                                    <div class="prompt-card" style="padding: 1rem; border-radius: 0.5rem; background-color: white; border: 1px solid #D1D5DB;">
                                        <h6 style="font-weight: 700; font-size: 1rem; margin-bottom: 0.25rem; color: #3498DB;">Vai trò / Ngữ cảnh</h6>
                                        <p style="color: #4A5568; font-size: 0.875rem;">Đặt AI vào vai trò hoặc cung cấp bối cảnh.</p>
                                    </div>
                                    <div class="prompt-card" style="padding: 1rem; border-radius: 0.5rem; background-color: white; border: 1px solid #D1D5DB;">
                                        <h6 style="font-weight: 700; font-size: 1rem; margin-bottom: 0.25rem; color: #E67E22;">Thông tin đầu vào</h6>
                                        <p style="color: #4A5568; font-size: 0.875rem;">Dữ liệu, văn bản, thông tin AI cần xử lý.</p>
                                    </div>
                                    <div class="prompt-card" style="padding: 1rem; border-radius: 0.5rem; background-color: white; border: 1px solid #D1D5DB;">
                                        <h6 style="font-weight: 700; font-size: 1rem; margin-bottom: 0.25rem; color: #27AE60;">Yêu cầu đầu ra (Định dạng / Nội dung)</h6>
                                        <p style="color: #4A5568; font-size: 0.875rem;">Nêu rõ bạn muốn AI trả lời dưới dạng nào, nội dung ra sao.</p>
                                    </div>
                                    <div class="prompt-card" style="padding: 1rem; border-radius: 0.5rem; background-color: white; border: 1px solid #D1D5DB;">
                                        <h6 style="font-weight: 700; font-size: 1rem; margin-bottom: 0.25rem; color: #9B59B6;">Giới hạn kiến thức</h6>
                                        <p style="color: #4A5568; font-size: 0.875rem;">Phạm vi kiến thức AI nên hoặc không nên dựa vào.</p>
                                    </div>
                                    <div class="prompt-card" style="padding: 1rem; border-radius: 0.5rem; background-color: white; border: 1px solid #D1D5DB;">
                                        <h6 style="font-weight: 700; font-size: 1rem; margin-bottom: 0.25rem; color: #E74C3C;">Giao nhiệm vụ</h6>
                                        <p style="color: #4A5568; font-size: 0.875rem;">Chỉ thị hành động chính mà bạn muốn AI thực hiện.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Cột phải: Ví dụ thực hành (cuộn dọc) -->
                            <div style="flex: 1 1 600px; display: flex; flex-direction: column;">
                                <h4 style="font-size: 1.25rem; font-weight: 700; color: #4F6F52; margin-bottom: 1rem;">Ví dụ thực hành:</h4>
                                <div class="scroll-y-container" style="height: 500px; overflow-y: auto; border: 1px solid #D1D5DB; padding: 1rem; border-radius: 0.5rem; background-color: #F8F7F4; flex-grow: 1;">
                                    <!-- Ví dụ 1: Giáo dục IT / Tin học văn phòng -->
                                    <div style="background-color: #F0F0F0; padding: 1.5rem; border-radius: 0.5rem; box-shadow: 0 1px 3px 0 rgba(0,0,0,0.1), 0 1px 2px 0 rgba(0,0,0,0.06); margin-bottom: 1.5rem;">
                                        <h5 style="font-size: 1.125rem; font-weight: 600; margin-bottom: 0.75rem;">Ví dụ 1: Dành cho Giáo dục IT / Tin học văn phòng</h5>
                                        <div style="margin-bottom: 1rem;">
                                            <p style="font-weight: 500; color: #DC2626; margin-bottom: 0.25rem;">Prompt Kém hiệu quả:</p>
                                            <div style="background-color: #E5E7EB; padding: 0.75rem; border-radius: 0.25rem; color: #4A5568; font-style: italic;">
                                                "Viết một bài giảng về Excel."
                                            </div>
                                        </div>
                                        <div>
                                            <p style="font-weight: 500; color: #16A34A; margin-bottom: 0.25rem;">Prompt Hiệu quả hơn:</p>
                                            <div style="background-color: #E5E7EB; padding: 0.75rem; border-radius: 0.25rem; color: #4A5568; line-height: 1.6;">
                                                <span style="color: #3498DB; font-weight: 600;">Bạn là một nhà giáo dục về IT, chuyên giảng dạy tin học văn phòng.</span> <br>
                                                <span style="color: #E74C3C; font-weight: 600;">Hãy viết một bài giảng ngắn gọn</span> <span style="color: #27AE60; font-weight: 600;">(khoảng 300 từ)</span> về cách sử dụng hàm VLOOKUP trong Excel cho <span style="color: #E67E22; font-weight: 600;">học viên mới bắt đầu.</span> <br>
                                                Bài giảng cần bao gồm: <span style="color: #27AE60; font-weight: 600;">định nghĩa hàm, cú pháp, một ví dụ thực tế đơn giản, và các lỗi thường gặp.</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Ví dụ 2: Phân tích Dữ liệu -->
                                    <div style="background-color: #F0F0F0; padding: 1.5rem; border-radius: 0.5rem; box-shadow: 0 1px 3px 0 rgba(0,0,0,0.1), 0 1px 2px 0 rgba(0,0,0,0.06); margin-bottom: 1.5rem;">
                                        <h5 style="font-size: 1.125rem; font-weight: 600; margin-bottom: 0.75rem;">Ví dụ 2: Dành cho Phân tích Dữ liệu</h5>
                                        <div style="margin-bottom: 1rem;">
                                            <p style="font-weight: 500; color: #DC2626; margin-bottom: 0.25rem;">Prompt Kém hiệu quả:</p>
                                            <div style="background-color: #E5E7EB; padding: 0.75rem; border-radius: 0.25rem; color: #4A5568; font-style: italic;">
                                                "Phân tích dữ liệu bán hàng này."
                                            </div>
                                        </div>
                                        <div>
                                            <p style="font-weight: 500; color: #16A34A; margin-bottom: 0.25rem;">Prompt Hiệu quả hơn:</p>
                                            <div style="background-color: #E5E7EB; padding: 0.75rem; border-radius: 0.25rem; color: #4A5568; line-height: 1.6;">
                                                <span style="color: #3498DB; font-weight: 600;">Bạn là một nhà phân tích dữ liệu kinh doanh.</span> <br>
                                                Với <span style="color: #E67E22; font-weight: 600;">dữ liệu bán hàng năm 2024 (bao gồm các cột: Ngày, Sản phẩm, Doanh số, Khu vực, Kênh bán hàng)</span>, <span style="color: #E74C3C; font-weight: 600;">hãy xác định</span> <span style="color: #27AE60; font-weight: 600;">3 sản phẩm có doanh số cao nhất, 2 khu vực có mức tăng trưởng doanh số nhanh nhất trong quý cuối cùng, và đề xuất 1 hành động kinh doanh dựa trên những phân tích này.</span> <br>
                                                <span style="color: #27AE60; font-weight: 600;">Trình bày kết quả dưới dạng bullet points.</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Ví dụ 3: Marketing / Sáng tạo nội dung -->
                                    <div style="background-color: #F0F0F0; padding: 1.5rem; border-radius: 0.5rem; box-shadow: 0 1px 3px 0 rgba(0,0,0,0.1), 0 1px 2px 0 rgba(0,0,0,0.06); margin-bottom: 1.5rem;">
                                        <h5 style="font-size: 1.125rem; font-weight: 600; margin-bottom: 0.75rem;">Ví dụ 3: Dành cho Marketing / Sáng tạo nội dung</h5>
                                        <div style="margin-bottom: 1rem;">
                                            <p style="font-weight: 500; color: #DC2626; margin-bottom: 0.25rem;">Prompt Kém hiệu quả:</p>
                                            <div style="background-color: #E5E7EB; padding: 0.75rem; border-radius: 0.25rem; color: #4A5568; font-style: italic;">
                                                "Viết quảng cáo cho sản phẩm."
                                            </div>
                                        </div>
                                        <div>
                                            <p style="font-weight: 500; color: #16A34A; margin-bottom: 0.25rem;">Prompt Hiệu quả hơn:</p>
                                            <div style="background-color: #E5E7EB; padding: 1.5rem; border-radius: 0.5rem; color: #4A5568; line-height: 1.6;">
                                                <span style="color: #3498DB; font-weight: 600;">Bạn là một chuyên gia marketing nội dung.</span> <br>
                                                <span style="color: #E74C3C; font-weight: 600;">Hãy viết</span> <span style="color: #27AE60; font-weight: 600;">3 tiêu đề quảng cáo ngắn gọn (dưới 10 từ) và 1 đoạn mô tả (khoảng 50 từ)</span> cho một sản phẩm <span style="color: #E67E22; font-weight: 600;">'Máy lọc không khí thông minh'</span> hướng đến <span style="color: #E67E22; font-weight: 600;">đối tượng khách hàng là các gia đình trẻ có con nhỏ, ưu tiên sự an toàn và tiện lợi.</span> <br>
                                                <span style="color: #27AE60; font-weight: 600;">Giọng văn cần ấm áp, đáng tin cậy và khơi gợi cảm xúc.</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Ví dụ 4: Liệt kê các nguyên thủ của nước ta từ 1975 đến nay -->
                                    <div style="background-color: #F0F0F0; padding: 1.5rem; border-radius: 0.5rem; box-shadow: 0 1px 3px 0 rgba(0,0,0,0.1), 0 1px 2px 0 rgba(0,0,0,0.06); margin-bottom: 1.5rem;">
                                        <h5 style="font-size: 1.125rem; font-weight: 600; margin-bottom: 0.75rem;">Ví dụ 4: Liệt kê các nguyên thủ quốc gia Việt Nam (từ 1975)</h5>
                                        <div style="margin-bottom: 1rem;">
                                            <p style="font-weight: 500; color: #DC2626; margin-bottom: 0.25rem;">Prompt Kém hiệu quả:</p>
                                            <div style="background-color: #E5E7EB; padding: 0.75rem; border-radius: 0.25rem; color: #4A5568; font-style: italic;">
                                                "Ai là chủ tịch nước từ năm 1975 đến nay?"
                                            </div>
                                        </div>
                                        <div>
                                            <p style="font-weight: 500; color: #16A34A; margin-bottom: 0.25rem;">Prompt Hiệu quả hơn:</p>
                                            <div style="background-color: #E5E7EB; padding: 0.75rem; border-radius: 0.25rem; color: #4A5568; line-height: 1.6;">
                                                <span style="color: #3498DB; font-weight: 600;">Bạn là một chuyên gia lịch sử Việt Nam.</span> <br>
                                                <span style="color: #E74C3C; font-weight: 600;">Hãy liệt kê</span> <span style="color: #27AE60; font-weight: 600;">tên đầy đủ và thời gian tại nhiệm (từ năm đến năm)</span> của <span style="color: #E67E22; font-weight: 600;">các Chủ tịch nước và Chủ tịch Hội đồng Nhà nước của Cộng hòa Xã hội Chủ nghĩa Việt Nam</span> <span style="color: #E67E22; font-weight: 600;">từ năm 1975 đến nay.</span> <br>
                                                <span style="color: #27AE60; font-weight: 600;">Trình bày dưới dạng danh sách có thứ tự.</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Ví dụ 5: Đánh giá tình trạng trẻ em đuối nước -->
                                    <div style="background-color: #F0F0F0; padding: 1.5rem; border-radius: 0.5rem; box-shadow: 0 1px 3px 0 rgba(0,0,0,0.1), 0 1px 2px 0 rgba(0,0,0,0.06); margin-bottom: 1.5rem;">
                                        <h5 style="font-size: 1.125rem; font-weight: 600; margin-bottom: 0.75rem;">Ví dụ 5: Đánh giá tình trạng trẻ em đuối nước</h5>
                                        <div style="margin-bottom: 1rem;">
                                            <p style="font-weight: 500; color: #DC2626; margin-bottom: 0.25rem;">Prompt Kém hiệu quả:</p>
                                            <div style="background-color: #E5E7EB; padding: 0.75rem; border-radius: 0.25rem; color: #4A5568; font-style: italic;">
                                                "Đánh giá về việc trẻ em đuối nước."
                                            </div>
                                        </div>
                                        <div>
                                            <p style="font-weight: 500; color: #16A34A; margin-bottom: 0.25rem;">Prompt Hiệu quả hơn:</p>
                                            <div style="background-color: #E5E7EB; padding: 0.75rem; border-radius: 0.25rem; color: #4A5568; line-height: 1.6;">
                                                <span style="color: #3498DB; font-weight: 600;">Bạn là một chuyên gia về an toàn trẻ em và dữ liệu xã hội.</span> <br>
                                                <span style="color: #E74C3C; font-weight: 600;">Dựa trên</span> <span style="color: #E67E22; font-weight: 600;">các báo cáo thống kê gần nhất về tình hình đuối nước ở trẻ em tại Việt Nam trong 5 năm gần đây</span>, <span style="color: #E74C3C; font-weight: 600;">hãy đánh giá</span> <span style="color: #27AE60; font-weight: 600;">mức độ nghiêm trọng của vấn đề, các nguyên nhân chính (nếu có thông tin), và đề xuất 3 giải pháp trọng tâm</span> mà các cộng đồng và gia đình có thể thực hiện để phòng tránh. <br>
                                                <span style="color: #27AE60; font-weight: 600;">Trình bày báo cáo tóm tắt (khoảng 400 từ) với các tiêu đề rõ ràng.</span>
                                                <span style="color: #9B59B6; font-weight: 600;">Lưu ý: Chỉ sử dụng thông tin công khai và có tính xác thực.</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Ví dụ 6: Kể tên các món ăn ngon quận 7 -->
                                    <div style="background-color: #F0F0F0; padding: 1.5rem; border-radius: 0.5rem; box-shadow: 0 1px 3px 0 rgba(0,0,0,0.1), 0 1px 2px 0 rgba(0,0,0,0.06);">
                                        <h5 style="font-size: 1.125rem; font-weight: 600; margin-bottom: 0.75rem;">Ví dụ 6: Các món ăn ngon Quận 7, TP.HCM</h5>
                                        <div style="margin-bottom: 1rem;">
                                            <p style="font-weight: 500; color: #DC2626; margin-bottom: 0.25rem;">Prompt Kém hiệu quả:</p>
                                            <div style="background-color: #E5E7EB; padding: 0.75rem; border-radius: 0.25rem; color: #4A5568; font-style: italic;">
                                                "Món gì ngon ở Quận 7?"
                                            </div>
                                        </div>
                                        <div>
                                            <p style="font-weight: 500; color: #16A34A; margin-bottom: 0.25rem;">Prompt Hiệu quả hơn:</p>
                                            <div style="background-color: #E5E7EB; padding: 0.75rem; border-radius: 0.25rem; color: #4A5568; line-height: 1.6;">
                                                <span style="color: #3498DB; font-weight: 600;">Bạn là một chuyên gia ẩm thực địa phương tại TP.HCM.</span> <br>
                                                <span style="color: #E74C3C; font-weight: 600;">Hãy gợi ý</span> <span style="color: #27AE60; font-weight: 600;">5 món ăn đặc trưng và địa chỉ quán ăn nổi tiếng</span> tại <span style="color: #E67E22; font-weight: 600;">Quận 7, TP.HCM</span>, phù hợp cho <span style="color: #E67E22; font-weight: 600;">bữa tối với gia đình.</span> <br>
                                                <span style="color: #27AE60; font-weight: 600;">Thông tin bao gồm: Tên món, địa chỉ (cụ thể đường), và một mô tả ngắn hấp dẫn (khoảng 20 từ) về món ăn đó.</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- 2.2. Lưu ý khi tạo Prompt (Now outside the flex, full width) -->
                        <div style="width: 100%; margin-top: 2rem;"> 
                            <h5 style="font-size: 1.125rem; font-weight: 700; color: #4F6F52; margin-bottom: 0.75rem;">2.2. Lưu ý khi tạo Prompt</h5>
                            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem;">
                                <div class="prompt-card" style="padding: 1rem; border-radius: 0.5rem; background-color: white; border: 1px solid #D1D5DB;">
                                    <h6 style="font-weight: 700; font-size: 1rem; margin-bottom: 0.25rem; color: #1ABC9C;">Chia nhỏ Tác vụ</h6>
                                    <p style="color: #4A5568; font-size: 0.875rem;">Chia yêu cầu phức tạp thành các bước nhỏ.</p>
                                </div>
                                <div class="prompt-card" style="padding: 1rem; border-radius: 0.5rem; background-color: white; border: 1px solid #D1D5DB;">
                                    <h6 style="font-weight: 700; font-size: 1rem; margin-bottom: 0.25rem; color: #F39C12;">Cung cấp Ví dụ</h6>
                                    <p style="color: #4A5568; font-size: 0.875rem;">Cung cấp ví dụ về đầu ra mong muốn để AI tuân theo định dạng.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <!-- Chương 3: Khai thác sức mạnh của Gemini -->
            <div class="tab-pane hidden" id="chapter3" style="display: none;">
                <button class="back-to-chapters-button" style="background-color: #4F6F52; color: white; padding: 0.5rem 1rem; border-radius: 0.375rem; transition: background-color 0.3s; margin-bottom: 1.5rem; display: flex; align-items: center; gap: 0.5rem; cursor: pointer;">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" style="width: 1.25rem; height: 1.25rem;">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                    </svg>
                    <span>Về Trang Chọn Chương</span>
                </button>
                <section id="chapter3-section" style="margin-bottom: 3rem;">
                    <h2 style="font-size: 1.875rem; font-weight: 700; margin-bottom: 1.5rem; color: #4F6F52;">Chương 3: Khai thác sức mạnh của Gemini</h2>
                    <p style="color: #4A5568; margin-bottom: 2rem;">
                        Chương này đi sâu vào nền tảng AI đa phương thức của Google – Gemini, hướng dẫn bạn cách tận dụng các tính năng mạnh mẽ của nó để tối ưu hóa công việc cá nhân, phân tích dữ liệu và đặc biệt là sáng tạo nội dung đa phương tiện.
                    </p>

                    <h3 style="font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem; color: #4F6F52;">3.1. Giới thiệu Gemini và những tính năng nổi bật</h3>
                    <ul style="list-style-type: disc; list-style-position: inside; color: #4A5568; margin-bottom: 1.5rem; padding-left: 1rem; display: flex; flex-direction: column; gap: 0.5rem;">
                        <li>**Tổng quan về hệ sinh thái Gemini:** Khả năng xử lý văn bản, hình ảnh, âm thanh, video.</li>
                        <li>**Trải nghiệm Gemini Live:** Tương tác giọng nói và thời gian thực.</li>
                        <li>**Veo 3 Fast & Flow:** Công cụ tạo video AI chất lượng cao.</li>
                        <li>**Whisk:** Tạo video từ hình ảnh một cách dễ dàng.</li>
                        <li>**Deep Think:** Mô hình suy luận tiên tiến nhất của Google (sắp ra mắt).</li>
                        <li>**Tích hợp hệ sinh thái Google:** Dùng Gemini ngay trong Gmail, Tài liệu, Drive, Photos, và Chrome.</li>
                        <li>**Project Mariner (quyền tiếp cận sớm):** Đơn giản hoá công việc bằng nguyên mẫu nghiên cứu dạng tác nhân AI.</li>
                        <li>**Gói YouTube Premium cá nhân:** Xem YouTube không quảng cáo, không cần mạng và phát trong nền.</li>
                        <li>**Chia sẻ cho gia đình:** Có thể chia sẻ gói Ultra với 5 thành viên khác trong gia đình.</li>
                    </ul>

                    <h3 style="font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem; color: #4F6F52;">3.2. Gemini trong quản lý công việc và cuộc sống cá nhân</h3>
                    <ul style="list-style-type: disc; list-style-position: inside; color: #4A5568; margin-bottom: 1.5rem; padding-left: 1rem; display: flex; flex-direction: column; gap: 0.5rem;">
                        <li>**Quản lý lịch trình thông minh:** Đặt lịch hẹn, cá nhân hóa lịch làm việc.</li>
                        <li>**Tối ưu hóa giao tiếp:** Soạn thảo email chuyên nghiệp và nhanh chóng.</li>
                        <li>**Quản lý tài liệu hiệu quả:** Tối ưu hóa Google Drive và Google Photos với AI.</li>
                    </ul>

                    <h3 style="font-size: 1.5rem; font-weight: 700; margin-bottom: 1.5rem; color: #4F6F52;">3.3. Ứng dụng Gemini trong phân tích dữ liệu</h3>
                    <ul style="list-style-type: disc; list-style-position: inside; color: #4A5568; margin-bottom: 1.5rem; padding-left: 1rem; display: flex; flex-direction: column; gap: 0.5rem;">
                        <li>**Trực quan hóa dữ liệu:** Tạo Dashboard báo cáo ấn tượng.</li>
                        <li>**Định hướng và gợi ý phân tích:** Để dữ liệu "lên tiếng" và đưa ra insight giá trị.</li>
                    </ul>

                    <h3 style="font-size: 1.5rem; font-weight: 700; margin-bottom: 1.5rem; color: #4F6F52;">3.4. Gemini và sáng tạo đa phương tiện</h3>
                    <ul style="list-style-type: disc; list-style-position: inside; color: #4A5568; margin-bottom: 1.5rem; padding-left: 1rem; display: flex; flex-direction: column; gap: 0.5rem;">
                        <li>**Biên tập hình ảnh:** Tạo công cụ chỉnh sửa hình ảnh theo ý muốn.</li>
                        <li>**Sản xuất video chất lượng:** Tạo video chuyên nghiệp với Veo 3.</li>
                        <li>**Nghệ thuật tạo hình ảnh:** Biến ý tưởng thành hình ảnh với Imagine 4.</li>
                        <li>**Sáng tạo âm thanh:** Tạo nhạc, hiệu ứng với Lyria 2.</li>
                        <li>**Trổ tài DJ:** Pha trộn âm nhạc và tạo bản phối với MusicFX DJ.</li>
                    </ul>

                    <h3 style="font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem; color: #4F6F52;">3.5. Thiết kế Chatbot cá nhân hóa với Gemini (Gems)</h3>
                    <p style="color: #4A5568; margin-bottom: 1rem;">
                        Gemini (Gems) cho phép bạn tạo các chatbot tùy chỉnh, phục vụ mục đích cá nhân hoặc chuyên nghiệp, giúp tự động hóa các tác vụ và cung cấp thông tin nhanh chóng, hiệu quả.
                    </p>
                    <div style="display: flex; flex-direction: column; gap: 1rem; background-color: #F8F7F4; padding: 1rem; border-radius: 0.5rem; box-shadow: 0 1px 3px 0 rgba(0,0,0,0.1); border-left: 4px solid #739072;">
                        <h4 style="font-size: 1.125rem; font-weight: 700; color: #4F6F52; margin-bottom: 0.5rem;">Lợi ích khi tạo Chatbot với Gemini Gems:</h4>
                        <ul style="list-style-type: disc; list-style-position: inside; color: #4A5568; margin-left: 1rem; display: flex; flex-direction: column; gap: 0.25rem;">
                            <li>**Tiết kiệm thời gian:** Tự động hóa các tác vụ lặp lại, trả lời câu hỏi thường gặp.</li>
                            <li>**Tăng cường hiệu suất:** Xử lý nhanh chóng các yêu cầu, giải phóng thời gian cho công việc phức tạp hơn.</li>
                            <li>**Cá nhân hóa:** Tạo ra chatbot với phong cách và kiến thức chuyên biệt cho nhu cầu của bạn.</li>
                            <li>**Tính khả dụng 24/7:** Chatbot luôn sẵn sàng hỗ trợ mọi lúc.</li>
                            <li>**Tối ưu hóa nội dung:** Hỗ trợ tạo và tối ưu nội dung theo yêu cầu.</li>
                        </ul>
                    </div>

                    <div style="display: flex; flex-direction: column; gap: 1rem; background-color: #F8F7F4; padding: 1rem; border-radius: 0.5rem; box-shadow: 0 1px 3px 0 rgba(0,0,0,0.1); border-left: 4px solid #739072; margin-top: 1.5rem;">
                        <h4 style="font-size: 1.125rem; font-weight: 700; color: #4F6F52; margin-bottom: 0.5rem;">Ứng dụng điển hình: Tạo content Facebook với Gems</h4>
                        <p style="color: #4A5568;">
                            Đối với những người thường xuyên đăng bài Facebook (nhà quản lý cộng đồng, người bán hàng online, nhà tiếp thị nội dung), Gems có thể trở thành trợ lý đắc lực giúp bạn:
                        </p>
                        <ul style="list-style-type: disc; list-style-position: inside; color: #4A5568; margin-left: 1rem; display: flex; flex-direction: column; gap: 0.25rem;">
                            <li>**Tạo ý tưởng bài viết:** Chỉ cần cung cấp chủ đề, Gems sẽ gợi ý các ý tưởng độc đáo.</li>
                            <li>**Soạn thảo nội dung bài đăng:** Từ status ngắn gọn đến bài viết dài, Gems có thể viết theo nhiều giọng điệu (vui vẻ, chuyên nghiệp, truyền cảm hứng...).</li>
                            <li>**Gợi ý hashtag phù hợp:** Tối ưu hóa khả năng tiếp cận bài viết.</li>
                            <li>**Viết caption cho hình ảnh/video:** Tạo các mô tả hấp dẫn và thu hút.</li>
                            <li>**Điều chỉnh phong cách và giọng điệu:** Đảm bảo bài viết phù hợp với thương hiệu cá nhân hoặc doanh nghiệp.</li>
                        </ul>
                    </div>

                    <div style="display: flex; flex-direction: column; gap: 1rem; background-color: #F8F7F4; padding: 1rem; border-radius: 0.5rem; box-shadow: 0 1px 3px 0 rgba(0,0,0,0.1); border-left: 4px solid #739072; margin-top: 1.5rem;">
                        <h4 style="font-size: 1.125rem; font-weight: 700; color: #4F6F52; margin-bottom: 0.5rem;">Hướng dẫn cách làm Chatbot với Gems (tạo content Facebook):</h4>
                        <ul style="list-style-type: decimal; list-style-position: inside; color: #4A5568; margin-left: 1rem; display: flex; flex-direction: column; gap: 0.5rem;">
                            <li>**Bước 1: Xác định mục tiêu của Chatbot:**
                                <p style="margin-left: 1.5rem; font-size: 0.95rem;">Bạn muốn chatbot giúp tạo loại nội dung gì? (Ví dụ: bài đăng bán hàng, status chia sẻ kiến thức, caption ảnh du lịch...). Xác định rõ đối tượng mục tiêu của bài đăng Facebook của bạn.</p>
                            </li>
                            <li>**Bước 2: Truy cập Gemini và tạo Gem mới:**
                                <p style="margin-left: 1.5rem; font-size: 0.95rem;">Đăng nhập vào Gemini (nếu chưa có tài khoản, hãy đăng ký). Tìm mục "Tạo Gem" hoặc "Custom AI" để bắt đầu thiết lập chatbot.</p>
                            </li>
                            <li>**Bước 3: Hướng dẫn vai trò và mục tiêu cho Gems:**
                                <p style="margin-left: 1.5rem; font-size: 0.95rem;">Cung cấp cho Gems một "vai trò" cụ thể. Ví dụ: "Bạn là một chuyên gia marketing nội dung Facebook, chuyên tạo các bài đăng thu hút tương tác cho các cửa hàng thời trang."</p>
                            </li>
                            <li>**Bước 4: Cung cấp dữ liệu huấn luyện (nếu cần):**
                                <p style="margin-left: 1.5rem; font-size: 0.95rem;">Để Gems hiểu phong cách của bạn, hãy tải lên một số bài đăng Facebook mẫu mà bạn thấy hiệu quả, hoặc các ghi chú về sản phẩm/dịch vụ của bạn. Điều này giúp Gems tạo ra nội dung phù hợp và nhất quán.</p>
                            </li>
                            <li>**Bước 5: Thiết lập các câu lệnh mẫu (Prompt Templates):**
                                <p style="margin-left: 1.5rem; font-size: 0.95rem;">Tạo các prompt mẫu mà bạn sẽ dùng thường xuyên. Ví dụ:
                                    <ul style="list-style-type: circle; list-style-position: inside; margin-left: 1rem; font-size: 0.9rem;">
                                        <li>"Viết bài đăng Facebook về [Tên sản phẩm/dịch vụ] với giọng điệu [Giọng điệu], tập trung vào lợi ích [Lợi ích chính]. Gợi ý 5 hashtag."</li>
                                        <li>"Tạo caption ngắn cho hình ảnh [Mô tả hình ảnh] về [Chủ đề] với phong cách [Phong cách]."</li>
                                    </ul>
                                </p>
                            </li>
                            <li>**Bước 6: Kiểm tra và tinh chỉnh:**
                                <p style="margin-left: 1.5rem; font-size: 0.95rem;">Bắt đầu sử dụng Gems bằng cách nhập các prompt của bạn. Đánh giá chất lượng của nội dung được tạo ra. Nếu cần, hãy điều chỉnh vai trò, dữ liệu huấn luyện, hoặc các câu lệnh mẫu để Gems cho ra kết quả tốt hơn.</p>
                            </li>
                            <li>**Bước 7: Tích hợp (Tùy chọn):**
                                <p style="margin-left: 1.5rem; font-size: 0.95rem;">Nếu bạn sử dụng các công cụ quản lý mạng xã hội, hãy xem xét khả năng tích hợp của Gems (qua API nếu có) để tự động hóa quy trình đăng bài.</p>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>

            <!-- Chương 4: Ứng dụng toàn diện với ChatGPT -->
            <div class="tab-pane hidden" id="chapter4" style="display: none;">
                <button class="back-to-chapters-button" style="background-color: #4F6F52; color: white; padding: 0.5rem 1rem; border-radius: 0.375rem; transition: background-color 0.3s; margin-bottom: 1.5rem; display: flex; align-items: center; gap: 0.5rem; cursor: pointer;">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" style="width: 1.25rem; height: 1.25rem;">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                    </svg>
                    <span>Về Trang Chọn Chương</span>
                </button>
                <section id="chapter4-section" style="margin-bottom: 3rem;">
                    <h2 style="font-size: 1.875rem; font-weight: 700; margin-bottom: 1.5rem; color: #4F6F52;">Chương 4: Ứng dụng toàn diện với ChatGPT</h2>
                    <p style="color: #4A5568; margin-bottom: 2rem;">
                        Chương này khám phá ChatGPT, từ khả năng hội thoại tự nhiên đến các ứng dụng nâng cao trong phân tích dữ liệu và hỗ trợ công việc. Bạn sẽ học cách tận dụng tối đa nền tảng này cho các tác vụ hàng ngày và các dự án lớn.
                    </p>

                    <h3 style="font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem; color: #4F6F52;">4.1. Giới thiệu ChatGPT và các khả năng tương tác</h3>
                    <ul style="list-style-type: disc; list-style-position: inside; color: #4A5568; margin-bottom: 1.5rem; padding-left: 1rem; display: flex; flex-direction: column; gap: 0.5rem;">
                        <li>**Tổng quan về ChatGPT:** Các khả năng cơ bản và nâng cao.</li>
                        <li>**Tương tác giọng nói:** ChatGPT Voice Chat.</li>
                        <li>**Sáng tạo hình ảnh:** Tạo hình ảnh trực tiếp với ChatGPT.</li>
                    </ul>

                    <h3 style="font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem; color: #4F6F52;">4.2. Ứng dụng ChatGPT trong phân tích dữ liệu</h3>
                    <ul style="list-style-type: disc; list-style-position: inside; color: #4A5568; margin-bottom: 1.5rem; padding-left: 1rem; display: flex; flex-direction: column; gap: 0.5rem;">
                        <li>**Trực quan hóa dữ liệu:** Biến số liệu khô khan thành biểu đồ dễ hiểu.</li>
                        <li>**Phân tích chỉ số:** Nhận diện và đánh giá các chỉ số quan trọng.</li>
                    </ul>

                    <h3 style="font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem; color: #4F6F52;">4.3. ChatGPT trong hỗ trợ công việc và cuộc sống hàng ngày</h3>
                    <ul style="list-style-type: disc; list-style-position: inside; color: #4A5568; margin-bottom: 1.5rem; padding-left: 1rem; display: flex; flex-direction: column; gap: 0.5rem;">
                        <li>**Lập kế hoạch thông minh:** Cá nhân và dự án dài hạn.</li>
                        <li>**Biên bản cuộc họp:** Hỗ trợ viết biên bản nhanh chóng, chính xác.</li>
                        <li>**Tăng cường thuyết trình:** Hỗ trợ chuẩn bị nội dung và bố cục thuyết trình.</li>
                    </ul>

                    <h3 style="font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem; color: #4F6F52;">4.4. Các công cụ mở rộng và tùy chỉnh trong ChatGPT</h3>
                    <ul style="list-style-type: disc; list-style-position: inside; color: #4A5568; margin-bottom: 1.5rem; padding-left: 1rem; display: flex; flex-direction: column; gap: 0.5rem;">
                        <li>Hướng dẫn sử dụng Plugins/Extensions để mở rộng tính năng.</li>
                    </ul>

                    <h3 style="font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem; color: #4F6F52;">4.5. Xây dựng Chatbot tùy chỉnh với ChatGPT</h3>
                    <p style="color: #4A5568;">Khám phá cách tạo các chatbot được tùy chỉnh (GPTs) cho các mục đích cụ thể.</p>
                </section>
            </div>

            <!-- Chương 5: Các công cụ AI chuyên biệt và lập trình No-code -->
            <div class="tab-pane hidden" id="chapter5" style="display: none;">
                <button class="back-to-chapters-button" style="background-color: #4F6F52; color: white; padding: 0.5rem 1rem; border-radius: 0.375rem; transition: background-color 0.3s; margin-bottom: 1.5rem; display: flex; align-items: center; gap: 0.5rem; cursor: pointer;">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" style="width: 1.25rem; height: 1.25rem;">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                    </svg>
                    <span>Về Trang Chọn Chương</span>
                </button>
                <section id="chapter5-section" style="margin-bottom: 3rem;">
                    <h2 style="font-size: 1.875rem; font-weight: 700; margin-bottom: 1.5rem; color: #4F6F52;">Chương 5: Các công cụ AI chuyên biệt và lập trình No-code</h2>
                    <p style="color: #4A5568; margin-bottom: 2rem;">
                        Chương này giới thiệu NotebookLM như một trợ lý nghiên cứu mạnh mẽ, đồng thời khám phá tiềm năng của lập trình No-code với AI, giúp bạn tạo ra các ứng dụng mà không cần viết một dòng mã nào.
                    </p>

                    <h3 style="font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem; color: #4F6F52;">5.1. NotebookLM: Nền tảng phân tích và tổng hợp dữ liệu nâng cao</h3>
                    <ul style="list-style-type: disc; list-style-position: inside; color: #4A5568; margin-bottom: 1.5rem; padding-left: 1rem; display: flex; flex-direction: column; gap: 0.5rem;">
                        <li>**Tổng hợp dữ liệu đa nguồn:** Từ tài liệu, ghi chú, trang web...</li>
                        <li>**Tóm tắt thông tin:** Chắt lọc nội dung chính nhanh chóng.</li>
                        <li>**Tạo sơ đồ tư duy:** Sắp xếp ý tưởng trực quan từ dữ liệu.</li>
                        <li>**Phân tích dữ liệu cho báo cáo:** Hỗ trợ viết báo cáo chuyên sâu.</li>
                        <li>**Trích nguồn dữ liệu:** Đảm bảo tính minh bạch và độ tin cậy.</li>
                        <li>**Sáng tạo Podcast:** Biến dữ liệu thành nội dung âm thanh hấp dẫn.</li>
                    </ul>

                    <h3 style="font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem; color: #4F6F52;">5.2. Khám phá các ứng dụng lập trình No-Code với AI</h3>
                    <ul style="list-style-type: disc; list-style-position: inside; color: #4A5568; margin-bottom: 1.5rem; padding-left: 1rem; display: flex; flex-direction: column; gap: 0.5rem;">
                        <li>Giới thiệu khái niệm và lợi ích của lập trình No-Code.</li>
                        <li>Tạo ra các chương trình và ứng dụng cơ bản mà không cần viết code (trong Gemini hoặc ChatGPT).</li>
                        <li>Hướng dẫn xuất file và tải về máy từ các công cụ AI (ví dụ: từ GPT).</li>
                    </ul>
                </section>
            </div>

            <!-- Tài liệu & Tài nguyên -->
            <div class="tab-pane hidden" id="resources" style="display: none;">
                <button class="back-to-chapters-button" style="background-color: #4F6F52; color: white; padding: 0.5rem 1rem; border-radius: 0.375rem; transition: background-color 0.3s; margin-bottom: 1.5rem; display: flex; align-items: center; gap: 0.5rem; cursor: pointer;">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" style="width: 1.25rem; height: 1.25rem;">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                    </svg>
                    <span>Về Trang Chọn Chương</span>
                </button>
                <section id="resources-section" style="margin-bottom: 3rem;">
                    <h2 style="font-size: 1.875rem; font-weight: 700; margin-bottom: 1.5rem; color: #4F6F52;">Tài liệu & Tài nguyên</h2>
                    <p style="color: #4A5568; margin-bottom: 2rem;">
                        Dưới đây là danh sách các tài liệu và tài nguyên bổ trợ mà bạn có thể tải về hoặc truy cập để phục vụ quá trình học tập và ứng dụng AI.
                    </p>
                    <div style="overflow-x: auto; border-radius: 0.5rem; border: 1px solid rgba(255,255,255,0.3); box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1), 0 2px 4px -2px rgba(0,0,0,0.1);">
                        <table style="width: 100%; font-size: 0.875rem; text-align: left; color: #4A5568; border-collapse: collapse;">
                            <thead>
                                <tr style="font-size: 0.75rem; color: #4A5568; text-transform: uppercase; background-color: rgba(255,255,255,0.4); backdrop-filter: blur(8px);">
                                    <th style="padding: 0.75rem 1.5rem;">App</th>
                                    <th style="padding: 0.75rem 1.5rem;">Version</th>
                                    <th style="padding: 0.75rem 1.5rem;"><span style="display: none;">Hành động</span></th>
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

    </div> <!-- End of app-container -->
    </div> <!-- End of app-container -->
    </div> <!-- End of app-container -->
  
    
    </main>

    <!-- ======================= 3. FOOTER SECTION (LIQUID GLASS STYLE) ======================= -->
   <footer id="floating-footer" class="custom-shadow bg-white/25 backdrop-blur-xl text-gray-800 fixed bottom-4 left-1/2 -translate-x-1/2 w-11/12 max-w-6xl z-50 rounded-3xl transition-all duration-500 border border-white/30 opacity-0 invisible">
        <div class="max-w-6xl mx-auto px-6 py-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center md:text-left">
                <!-- Cột 1: Giới thiệu -->
                <div class="flex flex-col items-center md:items-start">
                    <a href="#" class="mb-4">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="MinhTrietEras" class="h-10 w-auto mx-auto md:mx-0">
                    </a>
                    <p class="text-gray-600 text-sm">MinhTrietEras</p>
                </div>
                
                <!-- Cột 2: Thông tin liên hệ -->
                <div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Thông tin</h3>
                    <ul class="space-y-3 text-sm text-gray-600">
                        <li class="flex items-center justify-center md:justify-start">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 mr-3 flex-shrink-0"><path fill-rule="evenodd" d="M9.69 18.933l.003.001C9.89 19.02 10 19 10 19s.11.02.308-.066l.002-.001.006-.003.018-.008a5.741 5.741 0 00.281-.14c.186-.1.4-.223.654-.369.39-.23.835-.487 1.305-.765l.004-.002a10.998 10.998 0 001.916-1.124A22.952 22.952 0 0016.92 12c.381-.463.73-1.004 1.002-1.595a6.45 6.45 0 00.375-3.32C18.312 4.47 16.596 2 14.22 2 12.516 2 11.053 3.053 10 4.544 8.947 3.053 7.484 2 5.78 2 3.404 2 1.688 4.47 1.688 7.085c0 1.28.32 2.479.882 3.595.275.54.595 1.07.958 1.558a22.952 22.952 0 002.592 2.963 10.998 10.998 0 001.916 1.124l.004.002c.47.278.916.535 1.305.765.254.146.468.269.654.369a5.741 5.741 0 00.281.14l.018.008.006.003zM10 11.25a2.25 2.25 0 100-4.5 2.25 2.25 0 000 4.5z" clip-rule="evenodd" /></svg>
                            <a href="https://www.google.com/maps/search/?api=1&query=Quận+7,+TP.+Hồ+Chí+Minh" target="_blank" rel="noopener noreferrer" class="hover:text-indigo-600 transition-colors">Quận 7, TP. Hồ Chí Minh</a>
                        </li>
                        <li class="flex items-center justify-center md:justify-start">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 mr-3 flex-shrink-0"><path d="M2 3.5A1.5 1.5 0 013.5 2h1.148a1.5 1.5 0 011.465 1.175l.716 3.223a1.5 1.5 0 01-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 006.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 011.767-1.052l3.223.716A1.5 1.5 0 0118 15.352V16.5a1.5 1.5 0 01-1.5 1.5h-1.528a1.5 1.5 0 01-1.465-1.175l-.716-3.223a1.5 1.5 0 01.44-1.597l.115-.115a1.5 1.5 0 00-2.121-2.121l-.115.115a1.5 1.5 0 01-1.597.44l-3.223-.716A1.5 1.5 0 013.5 6.028H2V3.5z" /></svg>
                            <a href="tel:+84946426536" class="hover:text-indigo-600 transition-colors">+84 946 426 536</a>
                        </li>
                        <li class="flex items-center justify-center md:justify-start">
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 mr-3 flex-shrink-0"><path d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" /><path d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" /></svg>
                            <a href="mailto:contact@leminhtriet.com" class="hover:text-indigo-600 transition-colors">contact@leminhtriet.com</a>
                        </li>
                    </ul>
                </div>
                
                <!-- Cột 3: Mạng xã hội -->
                <div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Theo dõi</h3>
                    <div class="flex justify-center md:justify-start space-x-4">
                        <a href="https://www.messenger.com/t/minhtriet.info" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-white transition-transform duration-300 hover:scale-110">
                           <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12s12-5.373 12-12S18.627 0 12 0zm1.75 17.14l-4.25-2.71l-5.01 2.51a.52.52 0 0 1-.72-.56l1.3-5.83l-4.49-3.9a.52.52 0 0 1 .29-.89l5.92-.51l2.21-5.59a.52.52 0 0 1 .94 0l2.21 5.59l5.92.51a.52.52 0 0 1 .29.89l-4.49 3.9l1.3 5.83a.52.52 0 0 1-.72.56z"/></svg>
                        </a>
                        <!-- <a href="https://x.com/tinhoctanbinh" target="_blank" rel="noopener noreferrer" class="text-gray-500 hover:text-indigo-600 transition-transform duration-300 hover:scale-110">
                           <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/></svg>
                        </a> -->
                    </div>
                </div>
            </div>
            <div class="mt-8 pt-6 border-t border-gray-900/10 text-center text-xs text-gray-500">
                 <p>&copy; Copyright ©2025 All rights reserved | by MinhTrietProduction</p>
            </div>
        </div>
    </footer>

    <!-- Liên kết đến file JavaScript -->
    <script src="assets/js/liquid_glass.js"></script>

<script>
        document.addEventListener('DOMContentLoaded', function() {
            // Data for resources table
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
                        row.style.backgroundColor = 'rgba(255,255,255,0.2)';
                        row.style.borderBottom = '1px solid rgba(255,255,255,0.2)';
                        row.style.transitionProperty = 'background-color';
                        row.style.transitionDuration = '200ms';
                        row.style.transitionTimingFunction = 'cubic-bezier(0.4, 0, 0.2, 1)';
                        row.onmouseover = function() { this.style.backgroundColor = 'rgba(255,255,255,0.4)'; };
                        row.onmouseout = function() { this.style.backgroundColor = 'rgba(255,255,255,0.2)'; };

                        row.innerHTML = `
                            <th scope="row" style="padding: 1rem 1.5rem; font-weight: 500; color: #374151; white-space: nowrap;">${resource.appname}</th>
                            <td style="padding: 1rem 1.5rem;"><span style="background-color: #D1FAE5; color: #10B981; font-size: 0.75rem; font-weight: 500; margin-right: 0.5rem; padding: 0.125rem 0.625rem; border-radius: 9999px;">${resource.version}</span></td>
                            <td style="padding: 1rem 1.5rem; text-align: right;">
                                <a href="${resource.link_truycap}" style="font-weight: 500; color: #4F46E5; text-decoration: none;" onmouseover="this.style.textDecoration='underline'" onmouseout="this.style.textDecoration='none'" target="_blank">${resource.ten_hanhdong}</a>
                            </td>
                        `;
                        resourcesTableBody.appendChild(row);
                    });
                } else {
                    const noResourceRow = document.createElement('tr');
                    noResourceRow.innerHTML = `<td colspan="3" style="padding: 1.5rem; text-align: center; color: #4A5568;">Không có tài nguyên nào.</td>`;
                    resourcesTableBody.appendChild(noResourceRow);
                }
            }

            // Tab functionality
            const chapterGrid = document.getElementById('chapter-selection-grid');
            const allTabPanes = document.querySelectorAll('.tab-pane'); // Includes chapter-selection-grid and all chapter contents
            const chapterButtons = document.querySelectorAll('.chapter-grid-button');
            const backButtons = document.querySelectorAll('.back-to-chapters-button');

            function showContent(contentId) {
                // Hide all tab panes
                allTabPanes.forEach(pane => {
                    pane.style.display = 'none';
                });
                // Show the selected content
                document.getElementById(contentId).style.display = 'block';
            }

            // Event listeners for chapter grid buttons
            chapterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const targetId = this.dataset.tabTarget;
                    showContent(targetId);
                    window.scrollTo(0, 0); // Scroll to top when navigating to a chapter
                });
            });

            // Event listeners for "Back to Chapters" buttons
            backButtons.forEach(button => {
                button.addEventListener('click', function() {
                    showContent('chapter-selection-grid');
                    window.scrollTo(0, 0); // Scroll to top when returning to grid
                });
            });

            // Initial state: Show the chapter selection grid
            showContent('chapter-selection-grid');

            // Chart.js initialization (only if the chart's canvas is in the active tab)
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
        });
    </script>
</body>
</html>
