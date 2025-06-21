<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth; // Thêm use Auth

class EnsureUserHasRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @param  string  $role Tên vai trò cần kiểm tra (truyền từ route/panel provider)
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        // Kiểm tra xem user đã đăng nhập và có vai trò được yêu cầu hay không
        // Giả sử bạn dùng spatie/laravel-permission hoặc có phương thức hasRole tương tự
        if (!Auth::check() || !$request->user()->hasRole($role)) {
             // Nếu không có quyền, trả về lỗi 403 Forbidden
             abort(403, 'Khu vực cấm chó và người không phận sự!');
        }

        // Nếu có quyền, cho phép request tiếp tục
        return $next($request);
    }
}