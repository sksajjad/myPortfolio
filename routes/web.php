<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\MyController;
use App\Http\Controllers\mailSender;

Route::get('/', function () {
    return view('welcome');
});

Route::any('/home', [myController::class, 'goto']);

Route::any('/contact', [myController::class, 'fifth']);