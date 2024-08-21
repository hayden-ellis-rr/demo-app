<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('home', 'home')
    ->middleware(['auth', 'verified'])
    ->name('home');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::view('marketing.summary', 'marketing.summary')
->middleware(['auth'])
->name('marketing.summary');

Route::view('disposition.summary', 'disposition.summary')
->middleware(['auth'])
->name('disposition.summary');

Route::view('lead-management.summary', 'lead-management.summary')
->middleware(['auth'])
->name('lead-management.summary');


require __DIR__.'/auth.php';
