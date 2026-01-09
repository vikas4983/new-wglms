<?php

namespace App\Jobs;

use App\Mail\SendWebUrlMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SendWebUrlJob implements ShouldQueue
{
    use Queueable;
    public $tries = 3;
    public $data;
    public function backoff()
    {
        return [10, 20, 30];
    }

    /**
     * Create a new job instance.
     */

    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        try {
            if ($this->data->is_sent === 1) {
                return;
            }

            Mail::to($this->data->email)->queue(new SendWebUrlMail($this->data));

            $this->updateStatus($this->data);
        } catch (\Throwable $th) {
            Log::error('Form has not been created.', [
                'error' => $th->getMessage(),
                'file' => $th->getFile(),
                'line' => $th->getLine(),
            ]);
        }
    }
    private function updateStatus($guest)
    {
        $guest->update([
            'is_sent' => 1
        ]);
    }
}
