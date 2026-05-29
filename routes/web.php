<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');


// Route::get('/', [TaskController::class, 'index'])->name('index');
// Route::get('/tache/creer', [TaskController::class, 'create'])->name('create');









// Dans routes/web.php



Route::get('propos', function () {
    return view('propos'); // pointe vers tasks_view/propos.blade.php
})->name('propos');

Route::get('predications', function () {
    return view('predications');
})->name('predications');

Route::get('evenements', function () {
    return view('evenement');
})->name('evenements');

Route::get('departements', function () {
    return view('departements');
})->name('departements');

Route::get('eglises', function () {
    return view('eglises');
})->name('eglises');

Route::get('contact', function () {
    return view('contact');
})->name('contact');