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

Route::get('/home', [SessionController::class,'home'])->name('home');
Route::post('login', [SessionController::class, 'login']);
Route::get('logout', [SessionController::class, 'logout']);

Route::post('create', [SessionController::class, 'create']);

Route::get('storepage', [SessionController::class, 'storepage']);
Route::get('about-us', [SessionController::class, 'aboutus']);

Route::get('/update', function () {
    return view('/auth/updateprofile');
});

Route::post('profileupdate', [SessionController::class, 'profileupdate'])->name('profileupdate');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
