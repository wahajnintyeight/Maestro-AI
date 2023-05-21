<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserSubscription extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $sub_type;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user, $sub_type)
    {
        $this->user = $user;
        $this->sub_type = $sub_type;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject('MaestroIA - New User Subscription')
            ->markdown('emails.userSubscription');
    }
}
