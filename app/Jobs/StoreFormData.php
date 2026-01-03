<?php

namespace App\Jobs;

use App\Models\Wedding;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Log;

class StoreFormData implements ShouldQueue
{
    use Queueable;
    public $tries = 3;


    /**
     * Create a new job instance.
     */
    public $data;
    public function __construct($data)
    {
        $this->data = $data;
    }
    public function backoff(): array
    {
        return [10, 20, 30];
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        try {
            Wedding::create($this->data);
        } catch (\Throwable $th) {
            Log::error('Form has not been created.', [
                'error' => $th->getMessage(),
                'file' => $th->getFile(),
                'line' => $th->getLine(),
            ]);
        }
    }
}
