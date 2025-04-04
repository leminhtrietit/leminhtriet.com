<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Models\User;
use App\Mail\ChangeEmailOtpMail;
use Illuminate\Support\Facades\Auth;

class EmailChangeController extends Controller
{
    // Hiển thị form nhập email mới
    public function showRequestForm()
    {
        return view('auth.change_email'); // Tạo view auth/change_email.blade.php
    }

    // Xử lý yêu cầu thay đổi email: kiểm tra, tạo OTP và gửi mail
    public function sendOtp(Request $request)
    {
        $request->validate([
            'new_email' => 'required|email|unique:users,email',
        ]);

        $user = Auth::user();
        $oldEmail = $user->email;
        $newEmail = $request->input('new_email');

        // Tạo OTP (ví dụ: 6 chữ số)
        $otp = rand(100000, 999999);

        // Lưu thông tin OTP, email cũ, email mới vào cache trong 10 phút
        $cacheKey = 'email_change_'.$user->id;
        Cache::put($cacheKey, [
            'old_email' => $oldEmail,
            'new_email' => $newEmail,
            'otp'       => $otp,
        ], now()->addMinutes(10));

        // Gửi OTP đến cả email cũ và email mới
        Mail::to($oldEmail)->send(new ChangeEmailOtpMail($otp, $oldEmail));
        Mail::to($newEmail)->send(new ChangeEmailOtpMail($otp, $newEmail));

        return redirect()->route('email.change.verify')->with('status', 'OTP đã được gửi đến email cũ và email mới của bạn.');
    }

    // Hiển thị form nhập OTP
    public function showVerifyForm()
    {
        return view('auth.verify_email_change'); // Tạo view auth/verify_email_change.blade.php
    }

    // Xử lý xác thực OTP và cập nhật email
    public function verifyOtp(Request $request)
    {
        $request->validate([
            'otp' => 'required|digits:6',
        ]);

        $user = Auth::user();
        $cacheKey = 'email_change_'.$user->id;
        $data = Cache::get($cacheKey);

        if (!$data) {
            return back()->withErrors(['otp' => 'OTP hết hạn. Vui lòng yêu cầu lại.']);
        }

        if ($data['otp'] != $request->input('otp')) {
            return back()->withErrors(['otp' => 'OTP không đúng.']);
        }

        // OTP hợp lệ, cập nhật email
        $user->email = $data['new_email'];
        $user->save();

        // Xoá OTP khỏi cache
        Cache::forget($cacheKey);

        return redirect('/admin');
    }
}
