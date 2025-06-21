<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Carbon;
use App\Models\User;
use App\Models\EmailVerification; // <-- Import model

class EmailVerificationController extends Controller
{
    public function verify(Request $request, $id, $token)
    {
        //dd('đã vào hàm verify', $id, $token);

        $user = User::findOrFail($id);

        // Kiểm tra token trong bảng email_verifications
        $verification = EmailVerification::where('user_id', $user->id)
                        ->where('token', $token)
                        ->first();

        if (!$verification || $verification->used_at !== null) {
            // Link đã được sử dụng hoặc không hợp lệ
            return view('auth.link-expired');
        }

        // Cập nhật email_verified_at của user
        $timestamp = Carbon::now();

        $user->update([
            'email_verified_at' => now(),
        ]);
        // Đánh dấu token là đã sử dụng
        $verification->update([
            'used_at' => $timestamp,
        ]);
        //dd($verification->used_at);

        // Redirect hoặc hiển thị view thông báo thành công với countdown
        return view('auth.verified');
    }
}
