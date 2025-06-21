<?php
//truyền vào model User KHÔNG TRUYỀN MODEL personal_infos
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Carbon;
use App\Models\EmailVerification;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

class ResetPasswordMail extends Mailable
{

    use Queueable, SerializesModels;

    public $user;

    /**
     * Tạo instance mới.
     *
     * @param  mixed  $user
     */
    public function __construct($user)
    {
        $this->user = $user;
    }
    public function buildCreateAccount()
    {
        $token = Str::random(64);

        EmailVerification::updateOrCreate(
            ['user_id' => $this->user->id],
            ['token' => $token, 'used_at' => null]
        );

        $verificationUrl = URL::temporarySignedRoute(
            'verification.verify',
            Carbon::now()->addMinutes(60),
            [
                'id'   => $this->user->id,
                'token' => $token, // thay vì hash => ...
                ]
        );
        
        $subti = <<<HTML
        <p>Xin chào <strong>{$this->user->personalInfo->name}</strong>!</p>
        HTML;
        
        
        $messageBody = <<<HTML
        
        
        <p>Vui lòng xác thực email trong vòng 5 phút để hoàn tất quá trình xác thực email.          
        </p>
        <h3> $this->user->personalInfo->identitynumber </h3>
        <p>Lưu ý, vui lòng đổi mật khẩu nhằm đảm bảo tính bảo mật.</p>
        <p>Link hết hạn trong 5 phút!</p>

        HTML;
        
        $footer = <<<HTML
        <p>©2025 MinhTrietEras. All rights reserved.</p>
        <p>District 7, HCMC</p>
        HTML;

        return $this
            ->subject('Chào mừng đến với MinhTrietEras')
            ->view('emails.test')
            ->with([
                'logoUrl'       => 'https://leminhtriet.com/logo/logo.png',
                'headerTitle'   => 'Xác thực email để kích hoạt tài khoản',
                'subTitle'      => $subti,
                'userName'      => "".$this->user->personalInfo->name,
                'actionUrl'     => $verificationUrl,
                'actionLabel'   => 'Xác thực và đăng nhập',
                'footerText'    =>  $footer,
                //Truyền biến messageBody
                'messageBody'  => $messageBody,

            ]);
    }

    public function buildResetPassword()
    {
        
        $subti = <<<HTML
        <p>Xin chào <strong>{$this->user->personalInfo->name}</strong>!</p>
        HTML;
        
        
        $messageBody = <<<HTML
        
        
        <p>Đây là mật khẩu mới của bạn          
        </p>
        <h3>$this->plainPassword</h3>
        <p>Lưu ý, vui lòng đổi mật khẩu nhằm đảm bảo tính bảo mật.</p>
        HTML;
        
        $footer = <<<HTML
        <p>©2025 MinhTrietEras. All rights reserved.</p>
        <p>District 7, HCMC</p>
        HTML;

        return $this
            ->subject('Mật khẩu của bạn đã được đặt lại')
            ->view('emails.test')
            ->with([
                'logoUrl'       => 'https://leminhtriet.com/logo/logo.png',
                'headerTitle'   => 'Mật khẩu đã khôi phục thành công',
                'subTitle'      => $subti,
                'userName'      => "".$this->user->personalInfo->name,
                'actionUrl'     => 'https://leminhtriet.com/login',
                'actionLabel'   => 'Đăng nhập',
                'footerText'    =>  $footer,
                //Truyền biến messageBody
                'messageBody'  => $messageBody,

            ]);
    }
    public function buildDeleteAccount()
    {
        $subti = <<<HTML
        <p>Xin chào <strong>{$this->user->personalInfo->name}</strong>!</p>
        HTML;
        
        
        $messageBody = <<<HTML
        
        
        <p>Vì lý do nào đó mà bạn đã xóa tài khoản trên hệ thống, chúng tôi rất tiếc vì điều này.          
        </p>
        <p>Hy vọng bạn sẽ trở lại.</p>
        HTML;
        
        $footer = <<<HTML
        <p>©2025 MinhTrietEras. All rights reserved.</p>
        <p>District 7, HCMC</p>
        HTML;

        return $this
            ->subject('Lời tạm biệt từ MinhTriet')
            ->view('emails.test')
            ->with([
                'logoUrl'       => 'https://leminhtriet.com/logo/logo.png',
                'headerTitle'   => 'Chúng tôi đã hoàn tất xóa tài khoản của bạn',
                'subTitle'      => $subti,
                'userName'      => "".$this->user->personalInfo->name,
                'actionUrl'     => 'https://leminhtriet.com/',
                'actionLabel'   => 'Ghé thăm',
                'footerText'    =>  $footer,
                //Truyền biến messageBody
                'messageBody'  => $messageBody,

            ]);
    }
}
