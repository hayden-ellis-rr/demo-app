<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('home', 'home')
    ->middleware(['auth', 'verified'])
    ->name('home');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::view('marketing/summary', 'marketing.summary')
->middleware(['auth'])
->name('marketing.summary');

Route::view('disposition/summary', 'disposition.summary')
->middleware(['auth'])
->name('disposition.summary');

Route::middleware(['auth'])->get('lead-management/profiles', [ProfileController::class, 'index'])->name('lead-management.profiles');
Route::middleware(['auth'])->get('lead-management/profile/{profile}', [ProfileController::class, 'show'])->name('lead-management.profiles.show');
Route::middleware(['auth'])->get('lead-management/jobs', [JobController::class, 'index'])->name('lead-management.jobs.index');
Route::view('lead-management/reporting', 'lead-management.reporting')->middleware(['auth'])->name('lead-management.reporting');


require __DIR__.'/auth.php';
