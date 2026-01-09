<?php

namespace App\Jobs;

use App\Mail\SendInvitationReminder;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Mail;

class InvitationReminder implements ShouldQueue
{
    use Queueable;
    public $guest;

    /**
     * Create a new job instance.
     */
    public function __construct($guest)
    {
        $this->guest = $guest;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to($this->guest->email)->queue(new SendInvitationReminder($this->guest));
    }
}
