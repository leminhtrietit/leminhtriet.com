<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\PersonalInfo;
use App\Models\UserSocialAccount;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    /**
     * Chuyển hướng người dùng đến trang đăng nhập Google.
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Xử lý callback từ Google.
     */
    public function handleGoogleCallback()
    {
        try {
            // Lấy thông tin user từ Google
            $googleUser = Socialite::driver('google')->user();

            // Tìm kiếm social account theo provider và provider_user_id
            $socialAccount = UserSocialAccount::where('provider', 'google')
                ->where('provider_user_id', $googleUser->getId())
                ->first();

            if ($socialAccount) {
                // Nếu tồn tại social account, lấy user liên quan
                $user = $socialAccount->user;
            } else {
                // Nếu chưa tồn tại, tìm kiếm theo email trong users (nếu có)
                $user = User::where('email', $googleUser->getEmail())->first();

                if (!$user) {
                    // Nếu không có user, tạo user mới
                    $user = User::create([
                        'email'    => $googleUser->getEmail(),
                        'password' => bcrypt(Str::random(16)), // mật khẩu ngẫu nhiên
                    ]);
                }

                // Tạo mới social account cho user
                $user->socialAccounts()->create([
                    'provider'          => 'google',
                    'provider_user_id'  => $googleUser->getId(),
                    'provider_token'    => $googleUser->token,
                    'provider_refresh_token' => $googleUser->refreshToken ?? null,
                ]);
            }

            // Cập nhật thông tin từ Google vào bảng personal_infos
            // Nếu personal_info đã tồn tại, cập nhật; nếu chưa, tạo mới
            $user->personalInfo()->updateOrCreate(
                ['user_id' => $user->id],
                [
                    'name'  => $googleUser->getName(), // tên đầy đủ từ Google
                    // Bạn có thể thêm các trường khác nếu Google cung cấp (ví dụ: avatar)
                    // 'email' => $googleUser->getEmail(), // nếu bạn muốn lưu vào personal_infos
                ]
            );

            // Đăng nhập user
            Auth::login($user);

            return redirect('/'); // Hoặc trang dashboard
        } catch (\Exception $e) {
            return redirect()->route('login')->with('error', 'Đăng nhập Google thất bại: ' . $e->getMessage());
        }
    }
}
