<!DOCTYPE html>
<html lang="vi" class="dark"> {{-- Thầy có thể bỏ class 'dark' nếu không muốn mặc định là dark mode --}}
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yêu cầu Mật khẩu - MinhTrietEras</title>
    
    {{-- Lấy lại các link cần thiết từ layout chính của thầy --}}
    <link rel="icon" href="{{ asset('assets/images/logo_tron.png') }}" type="image/x-icon" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/liquid_glass.css') }}">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100 dark:bg-gray-900">

    {{-- Container được thiết kế để căn giữa hoàn hảo trên một trang độc lập --}}
    <div class="w-full h-screen flex items-center justify-center px-4">
        <div class="w-full max-w-md mx-auto">
            <form method="POST" action="{{ route('course.password.check') }}" 
                  class="bg-white/60 dark:bg-gray-800/60 backdrop-blur-xl rounded-3xl p-8 md:p-12 custom-shadow border border-white/20 text-center">
                @csrf
                
                <div class="flex items-center justify-center gap-x-3 mb-4">
                    <svg class="w-7 h-7 text-gray-700 dark:text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path fill-rule="evenodd" d="M12 1.5a5.25 5.25 0 0 0-5.25 5.25v3a3 3 0 0 0-3 3v6.75a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3v-6.75a3 3 0 0 0-3-3v-3A5.25 5.25 0 0 0 12 1.5Zm-3.75 5.25v3a3.75 3.75 0 0 0 7.5 0v-3a3.75 3.75 0 0 0-7.5 0Z" clip-rule="evenodd" />
                    </svg>
                    <h2 class="text-2xl font-bold text-gray-800 dark:text-white">Nội dung được bảo vệ</h2>
                </div>

                <p class="mb-6 text-gray-600 dark:text-gray-400 text-sm">Vui lòng nhập mật khẩu để tiếp tục.</p>

                @if(session('error'))
                    <div class="bg-red-500/10 border border-red-500/30 text-red-700 dark:text-red-400 px-4 py-3 rounded-xl relative mb-4 text-sm" role="alert">
                        <span>{{ session('error') }}</span>
                    </div>
                @endif

                <div class="mb-6">
                    <label for="password" class="sr-only">Mật khẩu</label>
                    <input type="password" name="password" id="password" required autofocus
                           class="w-full px-5 py-3 bg-gray-200/60 dark:bg-gray-700/60 border border-gray-300/50 dark:border-gray-600/50 rounded-full 
                                  text-gray-900 dark:text-white placeholder-gray-500 dark:placeholder-gray-400 
                                  focus:outline-none focus:ring-2 focus:ring-[#79b5bb] focus:border-[#79b5bb]
                                  transition duration-300">
                </div>

                <button type="submit" 
                        class="w-full px-6 py-3 bg-[#79b5bb] hover:bg-[#68a4a9] text-white font-semibold rounded-full 
                               transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                    Truy cập
                </button>
            </form>
        </div>
    </div>

</body>
</html>