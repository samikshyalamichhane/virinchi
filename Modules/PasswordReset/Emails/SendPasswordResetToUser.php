<?php

namespace Modules\PasswordReset\Emails;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendPasswordResetToUser extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $token;

    public function __construct($user,$token)
    {
        $this->user = $user;
        $this->token = $token;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $user['name'] = $this->user->name;
        // $user['token'] = $this->token;

        return $this->from(env('MAIL_FROM_ADDRESS'), env('APP_NAME'))
        ->subject('Password Reset Link')
        ->view('passwordreset::emails.sendresetlinktouser', ['user' => $user])
        ->with(['name' => $this->user->name,
        'link' => url('reset-password/' . $this->token),]);
        // return $this->view('passwordreset::emails.sendresetlinktoadmin');
    }
}
