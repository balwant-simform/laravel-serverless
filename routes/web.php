<?php

use App\Jobs\ProcessAutomation;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    logger()->info('I was inside the serverless architecture');
    dump([1,2,3]);
    ProcessAutomation::dispatch();
    return view('welcome');
});
