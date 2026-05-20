<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    //student management
    Route::get('student', [\App\Http\Controllers\studentmngtController::class, 'index'])->name('student.index');
    Route::get('student/create', [\App\Http\Controllers\studentmngtController::class, 'create'])->name('student.create');
    Route::post('/studentstore', [App\Http\Controllers\studentmngtController::class, 'store'])->name('student.store');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});
