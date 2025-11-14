<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('welcome');
});

// Otentikasi
Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
]);

// Override rute login agar menggunakan slug /rumah
Route::get('/home',[LoginController::class, 'showLoginForm'])->name('login');
Route::post('home', [LoginController::class, 'login']);

// Route Dashboard setelah login
Route::get('/home', [DashboardController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function(){
    // route resource untuk aksi crud
    // controller PostController akan menangani pembatasan akses role
    Route::resource('posts', PostController::class);

    // Route khusus admin: mengubah status post menjadi published (1)
    // middleware 'admin' akan membloir akses jika user bukan admin.
    Route::post('posts/{post}/publish', [PostController::class, 'publish'])
        ->name('posts.publish')
        ->middleware('admin');
});


require __DIR__.'/auth.php';
