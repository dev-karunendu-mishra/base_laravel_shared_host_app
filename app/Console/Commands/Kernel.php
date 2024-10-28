<?php

namespace App\Console;

use App\Console\Commands\MakeCustomMigration; // Import your custom command
use App\Console\Commands\MakeCustomModel;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        MakeCustomMigration::class, // Register your custom command here
        MakeCustomModel::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // Schedule your commands here
        // For example:
        // $schedule->command('inspire')->hourly();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        // This method is used to load the commands from the routes
        $this->load(__DIR__.'/Commands');

        // Or you can manually register additional commands
        // $this->command('custom:command', function () {
        //     // Command logic
        // });
    }
}
