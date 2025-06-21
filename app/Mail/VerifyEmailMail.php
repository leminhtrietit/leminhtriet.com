<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Carbon;
use App\Models\EmailVerification;

class VerifyEmailMail extends Mailable
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

    public function build()
    {
        $token = Str::random(64);

        EmailVerification::updateOrCreate(
            ['user_id' => $this->user->id],
            ['token' => $token, 'used_at' => null]
        );

        $verificationUrl = URL::temporarySignedRoute(
            'verification.verify',
            Carbon::now()->addMinutes(5),
            [
                'id'   => $this->user->id,
                'hash' => sha1($this->user->email),
            ]
        );
        
        $subti = <<<HTML
        <p>Xin chào</p>
        HTML;
        
        
        $messageBody = <<<HTML
        
        
        <p>Ấn vào nút ở dưới để xác thực email          
        </p>
        <p>Lưu ý, đường dẫn xác thực hết hạn sau 5 phút.</p>
        HTML;
        
        $footer = <<<HTML
        <p>©2025 MinhTrietEras. All rights reserved.</p>
        <p>District 7, HCMC</p>
        HTML;

        return $this
            ->subject('MinhTrietEras | Xác thực email')
            ->view('emails.test')
            ->with([
                'logoUrl'       => 'https://leminhtriet.com/logo/logo.png',
                'headerTitle'   => 'Yêu cầu xác thực email đã được tạo',
                'subTitle'      => $subti,
                'userName'      => "".$this->user,
                'actionUrl'     => $verificationUrl,
                'actionLabel'   => 'Xác thực',
                'footerText'    =>  $footer,
                //Truyền biến messageBody
                'messageBody'  => $messageBody,

            ]);
    }
}
