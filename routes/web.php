<?php

use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\ConferenceController;

Route::resource('conferences', ConferenceController::class)->only(['index','show','create','store']);

Route::get('/conferences/show',[ConferenceController::class, 'show'])->name('conferences.show');

Route::get('/conferences/create',[ConferenceController::class, 'create'])->name('conferences.create');
Route::post('/conferences/store',[ConferenceController::class, 'store'])->name('conferences.store');

