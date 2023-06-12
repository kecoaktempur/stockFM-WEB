<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\PageController;

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
// Home
Route::get('/', [PageController::class,'home']);

// Login Regist Logout
Route::post('login', [SessionController::class, 'login']);
Route::post('logout', [SessionController::class, 'logout']);
Route::post('create', [SessionController::class, 'create']);

//Pagging
Route::get('storepage', [PageController::class, 'storepage']);
Route::get('about-us', [PageController::class, 'aboutus']);
Route::get('/update', function () {
    return view('/auth/updateprofile');
});
Route::get('product', [PageController::class, 'product']);
Route::get('product1', [PageController::class, 'product1']);
Route::get('product2', [PageController::class, 'product2']);
Route::get('product3', [PageController::class, 'product3']);
Route::get('product4', [PageController::class, 'product4']);
Route::get('product5', [PageController::class, 'product5']);
Route::get('product6', [PageController::class, 'product6']);
Route::get('product7', [PageController::class, 'product7']);
Route::get('product8', [PageController::class, 'product8']);
Route::get('product9', [PageController::class, 'product9']);

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
