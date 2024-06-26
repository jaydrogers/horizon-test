<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;

class SSULongRunningJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $time = 10;
    protected $version;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        $this->version = config('services.ssu_version');
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        for ($i = 0; $i < $this->time; $i++) {
            \Log::info('SSULongRunningJob has been processed ' . now().' on version '.config('services.ssu_version'));
            sleep(1);
        }
    }
}
