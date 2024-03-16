<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ResendOTPMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
   protected $code;

    public function __construct($code)
    {
        $this->code = $code;
    }
 public function build()
    {
        $this->subject('OTP Verification')->markdown('resendOTP',[
         
            'otp' => $this->code,
            // 'name' => $this->name,
            // 'email' => $this->email,

        ]);
    }
    /**
     * Get the message envelope.
     */
    
}
