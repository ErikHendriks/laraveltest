<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\StudInsertController;
use App\Http\Controllers\StudViewController;
use App\Http\Controllers\MessageController;

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
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/test', [TestController::class, 'index'])->name('test');
Route::get('/contact', [ContactFormController::class, 'index'])->name('contact');

Route::get('/insert', [StudInsertController::class, 'insertform']);
Route::post('/create', [StudInsertController::class, 'insert']);
Route::get('/view-records', [StudViewController::class, 'index']);

Route::get('/message', [MessageController::class, 'insertform']);
Route::post('/sent', [MessageController::class, 'insert']);
