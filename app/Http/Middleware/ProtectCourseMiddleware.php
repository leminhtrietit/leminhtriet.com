<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ProtectCourseMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Kiểm tra xem người dùng đã được cấp quyền truy cập trong session chưa
        if (session('course_access_granted') === true) {
            // Nếu có quyền rồi, cho phép đi tiếp
            return $next($request);
        }

        // Nếu chưa có quyền, chuyển hướng họ đến trang nhập mật khẩu
        return redirect()->route('course.password.form')->with('error', 'Vui lòng nhập mật khẩu để truy cập nội dung này.');
    }
}