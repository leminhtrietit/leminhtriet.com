@extends('layouts.app')

@section('title', 'Hướng dẫn tắt/bật tường lửa Windows (Firewall) đơn giản nhất')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-4">
    <div class="bg-white/90 backdrop-blur-md p-8 rounded-2xl shadow-lg border border-white/20">
        <h1 class="text-2xl font-bold mb-6 text-indigo-700 text-center">
            Tắt hoặc bật tường lửa Windows (Windows Firewall) nhanh chóng
        </h1>
        <p class="mb-6 text-base">
            Bạn có thể bật hoặc tắt tường lửa Windows chỉ với một lệnh đơn giản. 
            <br><span class="text-xs text-gray-500">* Áp dụng cho Windows 10/11/Server mọi phiên bản.</span>
        </p>
        <ol class="list-decimal ml-6 space-y-5 text-base text-gray-900">
            <li>
                <strong>Mở CMD với quyền Quản trị viên (Admin):</strong><br>
                Trên menu Start, gõ <span class="font-mono bg-gray-100 px-2 rounded">cmd</span>, 
                click chuột phải vào "Command Prompt" và chọn <span class="italic">Run as Administrator</span>.
            </li>
            <li>
                <strong>Nhập lệnh tắt/bật tường lửa:</strong>
                <div class="mt-2 space-y-3">
                    <div>
                        <span class="text-sm font-semibold text-gray-700">Tắt hoàn toàn tường lửa:</span>
                        <div class="relative flex items-center mt-1">
                            <input id="firewall-off" type="text" readonly
                                value="netsh advfirewall set allprofiles state off"
                                class="w-full bg-gray-100 rounded-l px-3 py-2 font-mono text-sm border border-r-0 focus:outline-none">
                            <button
                                type="button"
                                onclick="navigator.clipboard.writeText(document.getElementById('firewall-off').value)"
                                class="inline-flex items-center px-3 py-2 rounded-r bg-indigo-600 text-white text-xs font-medium border border-l-0 border-indigo-600 hover:bg-indigo-700 transition focus:outline-none"
                                title="Sao chép lệnh">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16h8m-4-4h4m1 4a2 2 0 01-2 2H6a2 2 0 01-2-2V6a2 2 0 012-2h6a2 2 0 012 2v4m2 4l-2 2m0 0l2 2m-2-2h8"/>
                                </svg>
                                Copy
                            </button>
                        </div>
                    </div>
                    <div>
                        <span class="text-sm font-semibold text-gray-700">Bật lại tường lửa:</span>
                        <div class="relative flex items-center mt-1">
                            <input id="firewall-on" type="text" readonly
                                value="netsh advfirewall set allprofiles state on"
                                class="w-full bg-gray-100 rounded-l px-3 py-2 font-mono text-sm border border-r-0 focus:outline-none">
                            <button
                                type="button"
                                onclick="navigator.clipboard.writeText(document.getElementById('firewall-on').value)"
                                class="inline-flex items-center px-3 py-2 rounded-r bg-indigo-600 text-white text-xs font-medium border border-l-0 border-indigo-600 hover:bg-indigo-700 transition focus:outline-none"
                                title="Sao chép lệnh">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16h8m-4-4h4m1 4a2 2 0 01-2 2H6a2 2 0 01-2-2V6a2 2 0 012-2h6a2 2 0 012 2v4m2 4l-2 2m0 0l2 2m-2-2h8"/>
                                </svg>
                                Copy
                            </button>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <strong>Kiểm tra trạng thái tường lửa:</strong><br>
                Để kiểm tra tường lửa đang bật hay tắt, hãy nhập lệnh:
                <div class="relative flex items-center mt-1 w-full max-w-lg">
                    <input id="firewall-status" type="text" readonly
                        value="netsh advfirewall show allprofiles"
                        class="w-full bg-gray-100 rounded-l px-3 py-2 font-mono text-sm border border-r-0 focus:outline-none">
                    <button
                        type="button"
                        onclick="navigator.clipboard.writeText(document.getElementById('firewall-status').value)"
                        class="inline-flex items-center px-3 py-2 rounded-r bg-indigo-600 text-white text-xs font-medium border border-l-0 border-indigo-600 hover:bg-indigo-700 transition focus:outline-none"
                        title="Sao chép lệnh">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16h8m-4-4h4m1 4a2 2 0 01-2 2H6a2 2 0 01-2-2V6a2 2 0 012-2h6a2 2 0 012 2v4m2 4l-2 2m0 0l2 2m-2-2h8"/>
                        </svg>
                        Copy
                    </button>
                </div>
            </li>
        </ol>
        <div class="mt-6 p-4 rounded bg-yellow-100 text-yellow-800 border border-yellow-300">
            <strong>Lưu ý:</strong> Sau khi tắt tường lửa, máy tính sẽ không được bảo vệ khỏi một số nguy cơ bảo mật. Hãy bật lại tường lửa sau khi hoàn tất công việc!
        </div>
    </div>
</div>
@endsection
