<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite; // Facade của Socialite
use App\Models\User;                     // Model User
use App\Models\PersonalInfo;             // Model PersonalInfo
// use Spatie\Permission\Models\Role;    // Nếu dùng Spatie Roles
use Filament\Facades\Filament;           // Facade Filament

class GoogleLoginController extends Controller
{
    /**
     * Chuyển hướng người dùng đến trang xác thực của Google.
     */
    public function redirectToGoogle()
    {
        // Lưu URL trang trước đó nếu muốn quay lại sau khi login (tùy chọn)
        // session(['url.intended' => url()->previous()]);
        return Socialite::driver('google')->redirect();
    }

    /**
     * Lấy thông tin người dùng từ Google sau khi họ xác thực.
     */
    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();

            // Tìm kiếm user trong DB bằng google_id hoặc email
            $user = User::where('google_id', $googleUser->getId())
                        ->orWhere('email', $googleUser->getEmail())
                        ->first();

            if ($user) {
                // Nếu user đã tồn tại (qua google_id hoặc email trùng)
                // Cập nhật google_id nếu chưa có (trường hợp email trùng)
                if (empty($user->google_id)) {
                    $user->google_id = $googleUser->getId();
                }
                // Đảm bảo email đã được xác thực
                if (is_null($user->email_verified_at)) {
                    $user->email_verified_at = now();
                }
                $user->save();

                // Đăng nhập user này vào hệ thống
                Auth::login($user, true); // true để "remember"

            } else {
                // Nếu user chưa tồn tại -> Tạo user mới
                $newUser = User::create([
                    'email' => $googleUser->getEmail(),
                    'google_id' => $googleUser->getId(),
                    // Tạo mật khẩu ngẫu nhiên mạnh vì họ không dùng mật khẩu này để login
                    'password' => Hash::make(Str::random(24)),
                    // Email từ Google coi như đã xác thực
                    'email_verified_at' => now(),
                ]);

                // Gán vai trò mặc định là 'student' (nếu bạn dùng Spatie Roles)
                 // $newUser->assignRole('student');

                // Tạo bản ghi PersonalInfo cơ bản (quan trọng)
                PersonalInfo::create([
                     'user_id' => $newUser->id,
                     'name' => $googleUser->getName(), // Lấy tên từ Google
                     'email' => $googleUser->getEmail(), // Có thể lưu email ở đây nữa
                     // Các trường khác (phone, identitynumber, dob...) sẽ là NULL
                     // Cần có cơ chế cho user cập nhật sau
                ]);

                // Đăng nhập user mới vào hệ thống
                Auth::login($newUser, true);
            }

            // --- Chuyển hướng dựa trên vai trò sau khi đăng nhập ---
            $loggedInUser = Auth::user();
            if ($loggedInUser->hasRole('admin')) { // Logic kiểm tra vai trò
                $panelUrl = Filament::getPanel('admin')->getUrl();
                // dùng intended để về trang họ muốn vào trước khi login, nếu không thì về panelUrl
                 return redirect()->intended($panelUrl);
            } elseif ($loggedInUser->hasRole('student')) {
                 $panelUrl = Filament::getPanel('student')->getUrl();
                 return redirect()->intended($panelUrl);
            } else {
                // Fallback về trang chủ nếu không có vai trò cụ thể
                 return redirect()->intended('/');
            }
            // --- Kết thúc chuyển hướng ---

        } catch (\Exception $e) {
            // Xử lý lỗi (ví dụ: người dùng từ chối quyền, lỗi API...)
            \Log::error('Google Login Error: ' . $e->getMessage()); // Ghi log lỗi
            // Chuyển về trang login với thông báo lỗi
            return redirect()->route('login')->withErrors(['google_login' => 'Đã xảy ra lỗi khi đăng nhập bằng Google. Vui lòng thử lại.']);
        }
    }
}