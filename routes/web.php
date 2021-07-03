<?php

use App\Http\Controllers\AppointmentsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionsController;
use App\Http\Controllers\CenterController;
use App\Http\Controllers\ChannelingController;
use App\Http\Controllers\ReservationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'role'])->name('dashboard');

Route::get('/home', function () {
    return view('home');
})->middleware(['auth'])->name('home');

Route::get('/about-us', function () {
    return view('about');
});

Route::get('/channeling', [ChannelingController::class, 'index'])->middleware(['auth'])->name('channels');

Route::get('/meet-your-doctor/{id}', [AppointmentsController::class, 'show'])->middleware(['auth'])->name('appointments');

Route::get('/make-reservation/{id}', [ReservationController::class, 'show'])->middleware(['auth'])->name('reserve');

Route::resources([
    'centers' => CenterController::class,
    'forum' => QuestionsController::class,
    'appointments' => AppointmentsController::class,
    'channels' => ChannelingController::class,
    'reservations' => ReservationController::class
]);

require __DIR__.'/auth.php';
