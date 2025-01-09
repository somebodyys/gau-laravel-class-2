<?php

use App\Console\Commands\HelloGau;
use App\Console\Commands\SendWeeklyEmailCommand;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;

//Artisan::command('inspire', function () {
//    $this->comment(Inspiring::quote());
//})->purpose('Display an inspiring quote')->hourly();


Schedule::call(SendWeeklyEmailCommand::class)->weekly();
