<?php

namespace App\Jobs;

use App\Mail\EnvoiMail;
use App\Models\Newsletter;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class SendNotifyNewsletterJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $newsletter;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Newsletter $newsletter )
    {
        //
        $this->newsletter= $newsletter;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle($newsletter)
    {
        //
        Mail::to($newsletter->email)->send(new EnvoiMail());
    }
}
