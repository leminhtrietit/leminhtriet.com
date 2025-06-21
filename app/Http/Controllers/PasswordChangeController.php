<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class PasswordChangeController extends Controller
{
    // Hiển thị form đổi mật khẩu
    public function showForm()
    {
        return view('auth.passwords.force_change');
    }

    // Xử lý đổi mật khẩu
    public function update(Request $request)
    {
        $request->validate([
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = Auth::user();

        $user->update([
            'password' => Hash::make($request->password),
        ]);

        // Xóa session nếu có
        session()->forget('force_change_password');

        return redirect()->route('dashboard')->with('success', 'Đổi mật khẩu thành công.');
    }
}
