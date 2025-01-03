<?php

use App\Http\Controllers\CVController;
use App\Http\Controllers\ProfileController;
use App\Models\Employer;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

//Route::get('/', function () {
//    return Inertia::render('Welcome', [
//        'canLogin' => Route::has('login'),
//        'canRegister' => Route::has('register'),
//        'laravelVersion' => Application::VERSION,
//        'phpVersion' => PHP_VERSION,
//        //        'employers' => Employer::all(),
//    ]);
//});
//
//Route::get('/dashboard', function () {
//    return Inertia::render('Dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});

//Route::prefix('cv')->group(function () {
//    Route::get('/', [CVController::class, 'index'])->name('cv');
//});

Route::get('/', [App\Http\Controllers\PageController::class, 'home'])->name('home');

require __DIR__.'/auth.php';
