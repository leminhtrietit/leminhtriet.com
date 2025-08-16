@extends('layouts.app')

@section('title', 'Kích hoạt Office miễn phí vĩnh viễn - Hướng dẫn chi tiết')

@section('content')
    <div class="max-w-6xl mx-auto px-4 py-4">
        <div class="bg-white/90 backdrop-blur-md p-8 rounded-2xl shadow-lg border border-white/20">
            <h1 class="text-2xl font-bold mb-6 text-indigo-700 text-center">Kích hoạt Office miễn phí vĩnh viễn</h1>
            <ol class="list-decimal ml-6 space-y-4 text-base text-gray-900">
                <li>
                    <strong>Mở CMD với quyền quản trị (Admin):</strong><br>
                    Trên menu Start, gõ <span class="font-mono bg-gray-100 px-2 rounded">cmd</span>, sau đó click chuột phải
                    vào Command Prompt và chọn <span class="italic">Run as Administrator</span>.
                </li>
                <li>
                    <strong>Nhập lệnh kích hoạt:</strong><br>
                    Copy và dán đoạn lệnh dưới đây vào cửa sổ CMD:
                    <div class="relative mt-2 flex items-center">
                        <input id="active-cmd" type="text" readonly value="powershell iex (irm https://get.activated.win)"
                            class="w-full bg-gray-100 rounded-l px-3 py-2 font-mono text-sm border border-r-0 focus:outline-none">
                        <button type="button"
                            onclick="navigator.clipboard.writeText(document.getElementById('active-cmd').value)"
                            class="inline-flex items-center px-3 py-2 rounded-r bg-indigo-600 text-white text-xs font-medium border border-l-0 border-indigo-600 hover:bg-indigo-700 transition focus:outline-none"
                            title="Sao chép lệnh">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-1" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 16h8m-4-4h4m1 4a2 2 0 01-2 2H6a2 2 0 01-2-2V6a2 2 0 012-2h6a2 2 0 012 2v4m2 4l-2 2m0 0l2 2m-2-2h8" />
                            </svg>
                            Copy
                        </button>
                    </div>

                    <p class="text-xs text-gray-500 mt-1">* Hãy kiên nhẫn chờ khoảng 30 giây, server có thể đang quá tải.
                    </p>
                </li>
                <li>
                    <strong>Làm theo hướng dẫn trên cửa sổ CMD:</strong><br>
                    Khi xuất hiện menu lựa chọn, bạn hãy chọn:
                    <ul class="list-disc ml-6 mt-2 space-y-1">
                        <li><b>2. Active Office vĩnh viễn</b> &rarr; tiếp tục chọn <b>1</b> để kích hoạt Office.</li>
                        <li>Các mục còn lại bao gồm: <br>
                            <span class="font-mono text-xs bg-gray-100 rounded px-1">
                                1. Active Windows vĩnh viễn<br>
                                2. Active Office vĩnh viễn<br>
                                3. Active Windows đến năm 2038<br>
                                4. Active Windows và Office 180 ngày<br>
                                5. Xem trạng thái Active của Office và Windows<br>
                                6. Thay đổi phiên bản hệ điều hành<br>
                                7. Thay đổi phiên bản Windows<br>
                                8. Xử lý sự cố<br>
                                9. Bổ sung<br>
                                H. Hỗ trợ<br>
                                0. Thoát
                            </span>
                        </li>
                    </ul>
                </li>
            </ol>
            <div class="mt-6 p-4 rounded bg-green-100 text-green-700 border border-green-300">
                <strong>Lưu ý:</strong> Khi xuất hiện dòng chữ <span class="font-mono bg-gray-50 px-1">Office is permanently
                    activated</span> nghĩa là bạn đã kích hoạt thành công!<br>
                Chúc bạn thành công!
            </div>
        </div>
    </div>
@endsection