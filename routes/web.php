<?php

use App\Http\Controllers\Back\BlogController;
use App\Http\Controllers\Back\ContactController;
use App\Http\Controllers\Back\DeskripsiTeamController;
use App\Http\Controllers\Back\KategoriController;
use App\Http\Controllers\Back\PesanController;
use App\Http\Controllers\Back\ProfileController;
use App\Http\Controllers\Back\ProfileGambarController;
use App\Http\Controllers\Back\SlideController;
use App\Http\Controllers\Back\TeamController;
use App\Http\Controllers\Front\FrontendController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [FrontendController::class, 'index'])->name('homepage');
Route::get('/blog/detail/{slug}', [FrontendController::class, 'detail'])->name('detail');
Route::post('/kirim-pesan', [FrontendController::class, 'store'])->name('kirimpesan');


Auth::routes([
    'register' => false, // Register Routes...
    'reset' => false, // Reset Password Routes...
    'verify' => false, // Email Verification Routes...
]);


Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
Route::resource('slide', SlideController::class);
Route::resource('profile', ProfileController::class);
Route::resource('profile-gambar', ProfileGambarController::class);
Route::resource('kategori', KategoriController::class);
Route::resource('blog', BlogController::class);
Route::resource('team', TeamController::class);
Route::resource('deskripsi-team', DeskripsiTeamController::class);
Route::resource('contact', ContactController::class);
Route::resource('pesan', PesanController::class);



