<?php

namespace Modules\PasswordReset\Emails;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendPasswordResetToAdmin extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $requested_email;

    public function __construct($user, $requested_email)
    {
        $this->user = $user;
        $this->requested_email = $requested_email;
    }

    public function build()
    {
        $user['name'] = $this->user->name;
        return $this->from(env('MAIL_FROM_ADDRESS'), env('APP_NAME'))
        ->subject('Password Reset Link')
        ->view('passwordreset::emails.sendresetlinktoadmin', ['user' => $user])
        ->with(['name' => $this->requested_email,
        ]);
    }
}
