<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegisterMail;

class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-emails';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This is command for example send mail to user test';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        Mail::to('pvnam020595@gmail.com')->send(new RegisterMail(['email'=> 'pvnam020595@gmail.com', 'name' => 'Phạm Văn Nam']));
    }
}
