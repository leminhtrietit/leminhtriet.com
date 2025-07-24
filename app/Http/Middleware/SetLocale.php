<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Lấy ngôn ngữ từ session. Nếu không có, sử dụng ngôn ngữ mặc định trong file config,
        // hoặc mặc định cuối cùng là 'vi'.
        $locale = Session::get('locale', config('app.fallback_locale', 'vi'));

        // Đặt ngôn ngữ cho toàn bộ ứng dụng
        App::setLocale($locale);

        // Cho phép request đi tiếp đến các bước xử lý tiếp theo
        return $next($request);
    }
}
