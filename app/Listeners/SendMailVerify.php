<?php

namespace App\Listeners;

use App\Events\CustomRegistered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegisterMail;
use App\Traits\VerifyEmail;

class SendMailVerify
{
    use VerifyEmail;
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
        dd("dddddd");
        
    }

    /**
     * Handle the event.
     */
    public function handle(CustomRegistered $event): void
    {
        Mail::to(env('MAIL_TO_ADDRESS'))->send(
            new RegisterMail([
                'email'=> $event->user['email'],
                'name'=> $event->user['name'],
                'opt' => $event->user['code']
            ]
        ));
    }
}
