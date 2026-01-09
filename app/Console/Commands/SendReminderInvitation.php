<?php

namespace App\Console\Commands;

use App\Jobs\InvitationReminder;
use App\Models\Wedding;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class SendReminderInvitation extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'invitation:reminder';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Reminder Wedding Invitation';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $guests = Wedding::where('is_sent', 1)->get();
        foreach ($guests as $guest) {
           InvitationReminder::dispatch($guest);
           Log::info('Reminder command executed');
        }
        
    }
}
