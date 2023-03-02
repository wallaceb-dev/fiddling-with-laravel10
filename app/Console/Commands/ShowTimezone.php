<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ShowTimezone extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'show:timezone';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Shows app current timezone';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        echo config('app.timezone') . PHP_EOL;
    }
}
