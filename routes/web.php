<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\Auth\EmailChangeController;
use App\Http\Controllers\Auth\PasswordChangeController;
use App\Filament\Pages\Auth\ChangePassword;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\PostController;

Route::get('/email/verify/{id}/{token}', [EmailVerificationController::class, 'verify'])
    ->middleware(['signed'])
    ->name('verification.verify');

Route::get('login', [LoginController::class, 'showLoginForm'])
    ->middleware('guest') // Chỉ khách mới vào được trang login
    ->name('login');

// Xử lý dữ liệu form đăng nhập
Route::post('login', [LoginController::class, 'login'])
    ->middleware('guest'); // Chỉ khách mới submit được form login

// Xử lý đăng xuất
Route::post('logout', [LoginController::class, 'logout'])
    ->middleware('auth') // Chỉ người đã đăng nhập mới đăng xuất được
    ->name('logout');

// Route để xử lý logout từ Filament và về trang chủ
Route::post('/panel-logout', [LoginController::class, 'filamentLogout'])
      ->middleware('auth') // Chỉ user đã đăng nhập mới gọi được
      ->name('filament.panel.logout'); // Đặt tên route là 'filament.panel.logout' (hoặc tên khác tùy bạn)

// --- KẾT THÚC ROUTE ĐĂNG NHẬP / ĐĂNG XUẤT ---

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/change-password', [PasswordChangeController::class, 'showForm'])->name('admin.change-password');
    Route::post('/admin/change-password', [PasswordChangeController::class, 'update']);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/email/change', [EmailChangeController::class, 'showRequestForm'])->name('email.change.form');
    Route::post('/admin/email/change', [EmailChangeController::class, 'sendOtp'])->name('email.change.sendOtp');

    Route::get('/admin/email/change/verify', [EmailChangeController::class, 'showVerifyForm'])->name('email.change.verify');
    Route::post('/admin/email/change/verify', [EmailChangeController::class, 'verifyOtp'])->name('email.change.verifyOtp');
});

Route::get('/auth/google/redirect', [GoogleController::class, 'redirectToGoogle'])->name('google.redirect');
Route::get('/auth/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('google.callback');

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');

Route::get('/thunghiem', function () {
    return view('test');
})->name('thunghiem');


Route::get('/resource', [App\Http\Controllers\ResourceController::class, 'index'])->name('resource');
Route::get('/download', [App\Http\Controllers\ResourceController::class, 'index']);
Route::get('/download', [App\Http\Controllers\ResourceController::class, 'index']);


Route::get('/tutorial', function () {
    return view('tutorial');
})->name('tutorial');

Route::get('/learning/aiforwork/buoi2', function () {
    return redirect('https://leminhtriet.com/posts/ai-for-meeting-note');
});

Route::get('/learning/aiforwork/meetingnote', function () {
    return redirect('https://leminhtriet.com/posts/ai-for-meeting-note');
});

Route::get('/learning/aiforwork/buoi3', function () {
    return redirect('https://leminhtriet.com/posts/chuyen-nghiep-hoa-viec-lam-slide');
});

Route::get('/learning/aiforwork/presentation', function () {
    return redirect('https://leminhtriet.com/posts/chuyen-nghiep-hoa-viec-lam-slide');
});

Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    return "Đã xóa cache!";
});

Route::get('/storage', function () {
    Artisan::call('storage:link');
    return "Đã chơi!";
});

Route::get('/logo', function () {
    return view('logo');
});

// routes/web.php

Route::get('/dump-autoload', function () {
    // Chạy lệnh composer dump-autoload
    $output = shell_exec('composer dump-autoload');
    return "<pre>$output</pre>";
});


Route::get('/categories/{category:slug}', [PostController::class, 'index'])->name('categories.index');
Route::get('/tags/{tag:slug}', [PostController::class, 'index'])->name('tags.index');Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/{post:slug}', [PostController::class, 'show'])->name('posts.show');
Route::get('/tools', [PostController::class, 'tools'])->name('tools.index');
Route::get('/test', function () {
    return view('tool');
});

// --- ROUTE CHO GIÁO TRÌNH AI ---
Route::prefix('giao-trinh-ai')
    ->name('course.')
    ->middleware('protect_course')
    ->group(function () 
    
    {
    // Trang chính của giáo trình
    Route::get('/', function () {
        return view('khoahoc.index');
    })->name('index');

    // Route cho từng chương
    Route::get('/chuong-1-tong-quan', function () {
        return view('khoahoc.chuong1');
    })->name('chuong1');

    Route::get('/chuong-2-nghe-thuat-prompt', function () {
        return view('khoahoc.chuong2');
    })->name('chuong2');

    Route::get('/chuong-3-suc-manh-gemini', function () {
        return view('khoahoc.chuong3');
    })->name('chuong3');

    Route::get('/chuong-4-ung-dung-chatgpt', function () {
        return view('khoahoc.chuong4');
    })->name('chuong4');

    Route::get('/chuong-5-cong-cu-chuyen-biet', function () {
        return view('khoahoc.chuong5');
    })->name('chuong5');
});

Route::get('/test-500', function () {
    return redirect()->route('route.khong.ton.tai');
});

// File: routes/web.php

// Route để hiển thị form nhập mật khẩu
Route::get('/giao-trinh-ai/nhap-mat-khau', function () {
    return view('khoahoc.password');
})->name('course.password.form');

// Route để xử lý việc kiểm tra mật khẩu
Route::post('/giao-trinh-ai/kiem-tra-mat-khau', function (Illuminate\Http\Request $request) {
    $correctPassword = env('COURSE_PASSWORD', 'minhtriet'); // Pro-tip: Lấy pass từ file .env

    // Dùng hash_equals để so sánh an toàn hơn
    if (hash_equals($correctPassword, $request->input('password'))) {
        // Nếu đúng, lưu quyền vào session và chuyển hướng đến giáo trình
        $request->session()->put('course_access_granted', true);
        return redirect()->route('course.index');
    }

    // Nếu sai, quay lại form với thông báo lỗi
    return back()->with('error', 'Mật khẩu không chính xác!');
})->name('course.password.check');