<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendOtpMail extends Mailable
{
    public $otp, $name, $forget;
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct($otp, $name = "", $forget = false)
    {
        $this->otp = $otp;
        $this->name = $name;
        $this->forget = $forget;
    }


    /**
     * Get the message content definition.
     */
    public function build()
    {
        return $this->with(['otp' => $this->otp, 'name' => $this->name, 'forget' => $this->forget])
            ->subject('Quick Rashi Verification')
            ->from('anuradha@quickrashi.com')
            ->view('email.otpMail');
    }
}
