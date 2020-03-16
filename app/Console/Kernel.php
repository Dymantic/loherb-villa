<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
         $schedule->command('simple-weather:forecast')
                  ->cron('0 */4 * * *');

        $schedule->command('instagram-feed:refresh')
                 ->dailyAt('02:00');

        $schedule->command('backup:clean')
                 ->dailyAt('02:30');
        $schedule->command('backup:run')
                 ->dailyAt('03:00');
        $schedule->command('sitemap:generate')
                 ->dailyAt('03:30');
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
