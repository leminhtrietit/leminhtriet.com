<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ResetPasswordMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $plainPassword;

    /**
     * Create a new message instance.
     *
     * @param  mixed  $user
     * @param  string  $plainPassword
     * @return void
     */
    public function __construct($user, string $plainPassword)
    {
        $this->user = $user;
        $this->plainPassword = $plainPassword;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build1()
    {
        // Đường dẫn ảnh logo
        $logoPath = public_path('assets/images/logo.png');

        // Đính kèm logo dưới dạng inline sử dụng attach()
        $this->attach($logoPath, [
            'as'       => 'logo.png',
            'mime'     => 'image/png',
            'inline'   => true,
        ]);

        return $this->subject('Mật khẩu mới của bạn')
                    ->view('emails.reset_password')
                    ->with([
                        'logoCid'       => 'logo.png',
                        'subject' => 'Mật Khẩu mới của bạn',
                        'plainPassword' => $this->plainPassword,
                        'content' => "Xin chào " 
                                     . ($this->user->personalInfo->name ?? $this->user->email)
                                     . ".<br>"
                                     . "Mật khẩu mới của bạn là: <strong>" 
                                     . $this->plainPassword 
                                     . "</strong><br>"
                                     . "Vui lòng đăng nhập và đổi mật khẩu ngay sau khi đăng nhập."
                    ]);
    }

    public function build()
    {
        
        $subti = <<<HTML
        <p>Xin chào <strong>{$this->user->personalInfo->name}</strong>!</p>
        HTML;
        
        
        $messageBody = <<<HTML
        
        
        <p>Mật khẩu đã khôi phục thành công.          
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
                'headerTitle'   => 'Thông báo từ MinhTrietEras',
                'subTitle'      => $subti,
                'userName'      => "".$this->user->personalInfo->name,
                'actionUrl'     => 'https://leminhtriet.com/admin/login',
                'actionLabel'   => 'Đăng nhập',
                'footerText'    =>  $footer,
                //Truyền biến messageBody
                'messageBody'  => $messageBody,

            ]);
    }
}
