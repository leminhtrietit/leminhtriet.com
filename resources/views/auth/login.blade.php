{{-- Kế thừa layout chính nếu có --}}
{{-- @extends('layouts.app') --}}
{{-- @section('content') --}}
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    {{-- Thêm CSS của bạn nếu cần --}}
    <style>
        body { font-family: sans-serif; margin: 0; background-color: #f4f6f9; display: flex; justify-content: center; align-items: center; min-height: 100vh; }
        .login-container { background-color: #fff; padding: 30px 40px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); width: 100%; max-width: 400px; }
        .login-container h2 { text-align: center; margin-bottom: 25px; color: #333; }
        .form-group { margin-bottom: 15px; }
        .form-group label { display: block; margin-bottom: 5px; font-weight: bold; color: #555; }
        .form-group input[type="email"], .form-group input[type="password"] { width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; }
        .form-group input[type="checkbox"] { margin-right: 5px; }
        .form-group button { width: 100%; padding: 10px; background-color: #007bff; color: white; border: none; border-radius: 4px; cursor: pointer; font-size: 16px; }
        .form-group button:hover { background-color: #0056b3; }
        .alert-danger ul { list-style: none; padding: 0; margin: 0; color: red; font-size: 0.9em;}
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Đăng nhập</h2>

        {{-- Hiển thị lỗi validation --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                <label for="email">Địa chỉ Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            </div>

            <div class="form-group">
                <label for="password">Mật khẩu</label>
                <input id="password" type="password" name="password" required autocomplete="current-password">
            </div>

            <div class="form-group">
                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label for="remember">Ghi nhớ đăng nhập</label>
            </div>

            <div class="form-group">
                <button type="submit">
                    Đăng nhập
                </button>
            </div>
             {{-- Thêm link Quên mật khẩu nếu cần --}}
            {{-- @if (Route::has('password.request'))
                <div style="text-align: center; margin-top: 15px;">
                    <a href="{{ route('password.request') }}">
                        Quên mật khẩu?
                    </a>
                </div>
            @endif --}}
        </form>
    </div>
</body>
</html>
{{-- @endsection --}}