<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

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


// Route::get('/', function () {
//     return view('home');
// });
// // Route::get('/home', function () {
// //     return view('home'); //diambil dari nama depan view (home.blade.php)
// // });
Route::get('/contacts', function () {
    return view('contacts');
});
Route::post('/contacts/store', [ContactController::class, 'store']);

// Route::get('/about', function () {
//     return view('about');
// });

//LOGIN
Route::get('/', [AuthController::class, 'showFormLogin'])->name('login');
Route::get('login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showFormRegister'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::get('/contacts', function () {
    return view('contacts');
});
Route::post('/contacts/store', [ContactController::class, 'store']);

Route::group(['middleware' => 'auth'], function () {
    Route::get('home', [HomeController::class, 'index'])->name('home');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});
