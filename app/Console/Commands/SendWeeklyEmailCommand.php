<?php

namespace App\Console\Commands;

use App\Classes\Employ;
use App\Notifications\WeeklyReminderNotification;
use Illuminate\Console\Command;

class SendWeeklyEmailCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-weekly-email-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $employ = new Employ('John', 'Doe', 'jgon@gmail.com', 'IT');

        $employ->notify(new WeeklyReminderNotification());
    }
}
