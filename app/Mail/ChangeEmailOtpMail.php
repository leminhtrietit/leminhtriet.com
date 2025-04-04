<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ChangeEmailOtpMail extends Mailable
{
    use Queueable, SerializesModels;

    public $otp;
    public $recipientEmail;

    /**
     * Tạo một instance mới.
     *
     * @param  int  $otp
     * @param  string  $recipientEmail
     */
    public function __construct($otp, $recipientEmail)
    {
        $this->otp = $otp;
        $this->recipientEmail = $recipientEmail;
    }

    /**
     * Xây dựng nội dung email.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Mã OTP thay đổi email đăng nhập')
                    ->view('emails.change_email_otp')
                    ->with([
                        'otp' => $this->otp,
                        'recipientEmail' => $this->recipientEmail,
                    ]);
    }
}
