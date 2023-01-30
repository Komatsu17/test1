<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\MessageController;
use App\Models\Message;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Mime\MessageConverter;

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
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', ContactController::class)->name('contact');
Route::post('/contact', [MessageController::class, 'store']);

Route::get('/edit', EditController::class)->name('edit');
Route::post('edit', [MessageController::class, 'update']);

Route::resource('message', MessageController::class);

Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');
