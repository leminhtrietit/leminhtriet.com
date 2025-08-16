@extends( 'layouts.app')

@section('title', 'Ưu đãi độc quyền Shopee VIP & ChatGPT Plus')

@section('content')
<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
    <div class="bg-white/50 backdrop-blur-md p-8 md:p-12 rounded-2xl shadow-lg border border-white/30 text-center custom-shadow">

        {{-- Phần Header của thông báo --}}
        <div class="flex justify-center items-center gap-4 mb-6">
            <img src="https://img.icons8.com/fluency/96/shopee.png" alt="Shopee VIP" class="h-16 w-16 md:h-20 md:w-20"/>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
            </svg>
            <img src="https://img.icons8.com/color/96/chatgpt.png" alt="ChatGPT" class="h-16 w-16 md:h-20 md:w-20"/>
        </div>

        <h1 class="text-3xl md:text-5xl font-bold text-gray-900 leading-tight">
            Ưu Đãi Độc Quyền: Shopee VIP x ChatGPT Plus
        </h1>
        <p class="text-lg text-indigo-600 font-semibold mt-2">Nhận 01 Gói ChatGPT Plus Miễn Phí Trong 03 Tháng</p>

        {{-- Phần mô tả chi tiết ưu đãi đã được cập nhật --}}
        <div class="mt-8 text-left max-w-2xl mx-auto space-y-4 text-gray-700">
            <p>
                Nâng tầm trải nghiệm AI với món quà đặc biệt từ Shopee. Thành viên ShopeeVIP sẽ có cơ hội nhận ưu đãi sử dụng gói ChatGPT Plus theo các điều khoản dưới đây.
            </p>
            <ul class="list-none space-y-3">
                <li class="flex items-start">
                    <svg class="h-6 w-6 text-green-500 mr-3 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg>
                    <span><strong>Đối tượng áp dụng:</strong> Người dùng là thành viên ShopeeVIP và có địa chỉ email tại Việt Nam chưa từng đăng ký ChatGPT Plus hoặc Pro trước đây.</span>
                </li>
                <li class="flex items-start">
                    <svg class="h-6 w-6 text-green-500 mr-3 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg>
                    <span><strong>Yêu cầu kích hoạt:</strong> Để kích hoạt ưu đãi, bạn cần có thẻ tín dụng hoặc thẻ ghi nợ quốc tế còn hiệu lực.</span>
                </li>
                 <li class="flex items-start">
                    <svg class="h-6 w-6 text-yellow-500 mr-3 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M8.257 3.099c.636-1.23 2.852-1.23 3.488 0l1.554 3.023a1.25 1.25 0 00.94 1.058l3.348.487c1.366.2 1.91 1.863.92 2.83l-2.422 2.361a1.25 1.25 0 00-.359 1.11l.572 3.334c.233 1.359-1.19 2.396-2.435 1.714l-2.993-1.573a1.25 1.25 0 00-1.166 0l-2.993 1.573c-1.245.682-2.668-.355-2.435-1.714l.572-3.334a1.25 1.25 0 00-.359-1.11L.44 10.497c-.99-.967-.446-2.63.92-2.83l3.348-.487a1.25 1.25 0 00.94-1.058l1.554-3.023z" clip-rule="evenodd" /></svg>
                    <span><strong>Tự động gia hạn:</strong> Sau 3 tháng miễn phí, gói ChatGPT Plus sẽ tự động gia hạn với mức phí hiện hành (20 USD/tháng). Bạn có thể huỷ gia hạn bất kỳ lúc nào trên trang web của ChatGPT để tránh phát sinh chi phí.</span>
                </li>
                <li class="flex items-start">
                    <svg class="h-6 w-6 text-green-500 mr-3 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg>
                    <span><strong>Số lượng có hạn:</strong> Ưu đãi áp dụng cho <strong class="text-pink-600">150.000</strong> Người Dùng hợp lệ đầu tiên đăng ký thành công.</span>
                </li>
            </ul>
        </div>

        <div class="mt-12">
            <a href="https://shopee.vn/m/shopee-vip" target="_blank" rel="noopener noreferrer"
               class="inline-block bg-gradient-to-r from-pink-500 to-orange-500 text-white font-bold text-xl px-12 py-4 rounded-xl shadow-lg hover:shadow-2xl hover:scale-105 transform transition-all duration-300">
                Nhận Ưu Đãi Ngay
            </a>
            <p class="text-sm text-gray-500 mt-4">
                Thời gian đổi mã: 08/08/2025 - 07/12/2025.<br>
                Chương trình có thể kết thúc sớm khi hết lượt. Vui lòng đọc kỹ Điều Khoản & Điều Kiện.
            </p>
        </div>

    </div>
</div>
@endsection