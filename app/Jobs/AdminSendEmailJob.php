<?php

namespace App\Jobs;

use App\Models\Newsletter;
use App\Mail\AdminSendEmail;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use App\Notifications\AdminSendEmailNotification;

class AdminSendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(private $subject, private $message, private $picture=null)
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $newsletters = Newsletter::all();
        foreach($newsletters as $key=>$newletter){
          
            (new AdminSendEmail($this->subject, $this->message, $this->picture))
            ->to($newletter->email);
            #$newletter->email->notify(new AdminSendEmailNotification($this->subject,  $this->message, $this->picture));
        }
      
    }
}
