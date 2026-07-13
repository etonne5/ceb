<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TaskController;
use App\Http\Controllers\SermonController;
use App\Http\Controllers\EgliseController;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\TwilioSMSController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RecaptchaController;

Route::get('/', function () {
    return view('index');
})->name('home');


// Route::get('/', [TaskController::class, 'index'])->name('index');
// Route::get('/tache/creer', [TaskController::class, 'create'])->name('create');

Route::get('sendSMS', [TwilioSMSController::class, 'index']);


// ===== PRÉDICATIONS =====
Route::get('predications', [SermonController::class, 'index'])->name('predications');
Route::get('predications/{id}', [SermonController::class, 'show'])->name('predications.show');

// ===== ÉGLISES =====
Route::get('eglises', [EgliseController::class, 'index'])->name('eglises');
Route::get('eglises/{id}', [EgliseController::class, 'show'])->name('eglises.show');

// ===== DÉPARTEMENTS =====
Route::get('departements', [DepartementController::class, 'index'])->name('departements');
Route::get('departements/{id}', [DepartementController::class, 'show'])->name('departements.show');


///////////
// Route::get('departements', function () {
//     return view('departements');
// })->name('departements');

// Route::get('eglises', function () {
//     return view('eglises');
// })->name('eglises');

// Route::get('predications', function () {
//     return view('predications');
// })->name('predications');
///////////


// Dans routes/web.php


// ===== PAGES STATIQUES =====
Route::get('propos', function () {
    return view('propos'); // pointe vers tasks_view/propos.blade.php
})->name('propos');

Route::get('evenements', function () {
    return view('evenement');
})->name('evenements');

// Route::get('contact', function () {
//     return view('contact');
// })->name('contact');


Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::post('contact', [ContactController::class, 'store'])->name('contact.store');


Route::post('/verify-recaptcha', [RecaptchaController::class, 'verify'])
     ->name('verify.recaptcha');
