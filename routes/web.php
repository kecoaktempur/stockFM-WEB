<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [SessionController::class,'index']);
Route::post('/login', [SessionController::class, 'login'])->name('login');
Route::get('/logout', [SessionController::class, 'logout'])->name('logout');

Route::post('/create', [SessionController::class, 'create'])->name('create');

Route::get('/storepage', [SessionController::class, 'storepage']);
Route::get('/about-us', [SessionController::class, 'aboutus']);

Route::get('goupdate', [SessionController::class, 'update'])->name('goupdate');
Route::post('updateprofile', [SessionController::class, 'updateprofile']);
