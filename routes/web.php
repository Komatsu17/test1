<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/', WelcomeController::class)->name('home');
Route::get('/about', AboutController::class)->name('about');
Route::get('/contact', ContactController::class)->name('contact');
Route::get('/portfolio', PortfolioController::class)->name('portfolio');

Route::post('/contact', [MessageController::class, 'store'])->name('messageStore');
Route::post('edit/{$message->id}', [MessageController::class, 'update'])->name('messageUpdate');

Route::post('/product', [ProductController::class, 'store'])->name('productStore');
Route::post('/edit/{$product->id}', [ProductController::class, 'update'])->name('productUpdate');

Route::resource('message', MessageController::class);
Route::resource('product', ProductController::class);