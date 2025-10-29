<?php

use Illuminate\Support\Facades\Route;
use App\Models\Hobby;
use App\Http\Controllers\ProjectController;



Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    $hobbies = Hobby::all();
    return view('about', compact('hobbies'));
})->name('about');

Route::get('/project', [ProjectController::class, 'index'])->name('projects.index');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
