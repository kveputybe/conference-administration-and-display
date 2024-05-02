<?php

use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\ConferenceController;

Route::get('/',[ConferenceController::class, 'show'])->name('conferences.show');
