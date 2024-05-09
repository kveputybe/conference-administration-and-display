<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\ConferenceController;
use App\Http\Controllers\Auth\LoginController;



Route::resource('conferences', ConferenceController::class)->only(['index','show','create','store']);

Route::middleware('auth')->group(function(){
    Route::get('/conferences/create',[ConferenceController::class, 'create'])->name('conferences.create');
    Route::post('/conferences/store',[ConferenceController::class, 'store'])->name('conferences.store');

    Route::get("/conferences/{id}/edit", [ConferenceController::class, 'edit'])->name("conferences.edit");
    Route::put('/conferences/{id}',[ConferenceController::class, 'update'])->name('conferences.update');
    Route::delete('/conferences/{id}',[ConferenceController::class, 'delete'])->name('conferences.delete');

    Route::post('logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');
});

Route::get('/conferences/show',[ConferenceController::class, 'show'])->name('conferences.show');

Route::middleware('guest')->group(function(){
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login.form');
    Route::post('login', [LoginController::class, 'login'])->name('login');
});




