<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Filament\Facades\Filament; // Import Filament Facade để lấy URL panel

class LoginController extends Controller
{
    /**
     * Hiển thị form đăng nhập.
     */
    public function showLoginForm()
    {
        // Nếu đã đăng nhập, chuyển hướng luôn dựa trên vai trò
        if (Auth::check()) {
            return $this->redirectBasedOnRole(Auth::user());
        }
        // Trả về view login (bạn cần tạo file view này)
        return view('auth.login');
    }

    /**
     * Xử lý yêu cầu đăng nhập.
     */
    public function login(Request $request)
    {
        // 1. Validate dữ liệu nhập vào
        $credentials = $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ]);

        // 2. Thực hiện đăng nhập
        $remember = $request->filled('remember'); // Lấy giá trị ô "Remember Me"

        if (Auth::attempt($credentials, $remember)) {
            // Đăng nhập thành công...

            $request->session()->regenerate(); // Tạo lại session ID để bảo mật

            $user = Auth::user();

            // !!! Quan trọng: Kiểm tra xem email đã xác thực chưa (NẾU BẠN ĐANG DÙNG EMAIL VERIFICATION)
            // Nếu chưa xác thực VÀ bạn muốn họ phải xác thực trước khi vào panel
            // thì chuyển hướng đến trang yêu cầu xác thực
             if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail()) {
                 // Có thể trả về view('auth.verify') hoặc redirect tới route 'verification.notice'
                 // nếu bạn đã định nghĩa route đó.
                 return redirect()->route('verification.notice');
                 // HOẶC nếu không có route đó, có thể trả về view trực tiếp (ít phổ biến hơn)
                 // return view('auth.verify');
             }


            // Nếu đã xác thực (hoặc không dùng xác thực), chuyển hướng dựa trên vai trò
            return $this->redirectBasedOnRole($user);
        }

        // Đăng nhập thất bại...
        throw ValidationException::withMessages([
            'email' => [trans('auth.failed')], // Thông báo lỗi chuẩn của Laravel
        ]);
    }

    /**
     * Đăng xuất người dùng.
     */
    // public function logout(Request $request)
    // {
    //     Auth::logout();

    //     $request->session()->invalidate();
    //     $request->session()->regenerateToken();

    //     return redirect('/'); // Chuyển về trang chủ sau khi đăng xuất
    // }

    /**
     * Chuyển hướng người dùng đến panel phù hợp dựa trên vai trò.
     * @param \App\Models\User $user
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function redirectBasedOnRole($user)
    {
         // Logic kiểm tra vai trò (ví dụ dùng spatie/laravel-permission)
         // Thay đổi logic này nếu bạn dùng cách khác để lưu/kiểm tra vai trò
        if ($user->hasRole('admin')) {
            $panelUrl = Filament::getPanel('admin')->getUrl();
            return redirect()->intended($panelUrl); // Dùng intended để quay lại trang trước đó nếu có
        }elseif ($user->hasRole('student')) {
            $panelUrl = Filament::getPanel('student')->getUrl();
            return redirect()->intended($panelUrl);
        }

        // Mặc định nếu không có vai trò phù hợp hoặc không có panel riêng
        return redirect()->intended('/'); // Chuyển về trang chủ
    }

    public function filamentLogout(Request $request)
    {
        // Lấy guard đang được sử dụng bởi Panel Filament hiện tại
        $guard = Filament::auth(); // Hoặc $guard = Auth::guard(Filament::getCurrentPanel()->getAuthGuard());

        // Thực hiện đăng xuất bằng guard đó
        $guard->logout();

        // Hủy session của người dùng (tùy chọn, thường nên làm)
        // Lưu ý: invalidate() sẽ hủy toàn bộ session, có thể ảnh hưởng nếu bạn lưu gì khác ngoài auth
        $request->session()->invalidate();

        // Tạo lại token để tránh lỗi CSRF
        $request->session()->regenerateToken();

        // Chuyển hướng về trang chủ
        return redirect()->route('home');
    }
}