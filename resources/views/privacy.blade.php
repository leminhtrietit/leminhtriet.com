@extends('layouts.app')

@section('title', 'Cam Kết Bảo Mật Thông Tin')

@section('content')
<div class="max-w-4xl mx-auto px-4 py-4">
    <div class="bg-white/80 backdrop-blur-md p-8 rounded-2xl shadow-lg border border-white/20">
        <h1 class="text-2xl font-bold mb-6 text-center text-indigo-700">Cam Kết Bảo Mật Thông Tin</h1>

        <p class="mb-4 text-lg">
            Trang web <span class="font-semibold text-indigo-600">{{ config('app.name', 'MinhTrietEras') }}</span> cam kết tôn trọng và bảo vệ quyền riêng tư của người dùng.
        </p>
        <ul class="list-disc ml-6 space-y-2 text-base">
            <li>
                <strong>Chúng tôi KHÔNG lưu trữ bất kỳ thông tin ngân hàng nào</strong> (bao gồm số tài khoản, tên chủ tài khoản, mã ngân hàng, số tiền, nội dung chuyển khoản,...) mà bạn nhập để tạo mã QR chuyển khoản.
            </li>
            <li>
                Tất cả dữ liệu được xử lý hoàn toàn trên trình duyệt và chỉ phục vụ mục đích tạo mã QR, không gửi, không lưu lại trên máy chủ.
            </li>
            <li>
                Trang web đã <strong>vô hiệu hóa tính năng tự động điền (autocomplete)</strong> của trình duyệt cho các trường nhập thông tin nhạy cảm, giúp giảm thiểu rủi ro lộ lọt thông tin do lưu trữ trên thiết bị cá nhân hoặc trình duyệt.
            </li>
            <li>
                Sau khi mã QR được tạo, mọi thông tin bạn nhập sẽ không còn tồn tại trên hệ thống.
            </li>
        </ul>
        <p class="mt-6">
            Nếu bạn cần hỗ trợ hoặc có thắc mắc về bảo mật thông tin, vui lòng liên hệ với chúng tôi qua các kênh hỗ trợ trên trang web.
        </p>
    </div>
</div>
@endsection
