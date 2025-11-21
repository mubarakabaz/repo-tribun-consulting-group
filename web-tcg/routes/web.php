<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

// Route umum untuk Tamu
Route::get('/', [FrontController::class, 'index'])->name('index');
Route::get('about', [FrontController::class, 'about'])->name('about');
Route::get('pelatihan', [FrontController::class, 'pelatihan'])->name('pelatihan');
Route::get('artikel', [FrontController::class, 'artikel'])->name('artikel');
Route::get('kontak', [FrontController::class, 'kontak'])->name('kontak');
// Route Layanan
Route::get('/layanan/seo', [FrontController::class, 'servicesSeo'])->name('seo');
Route::get('/layanan/iklan-digital-marketing', [FrontController::class, 'servicesAds'])->name('ads');
// Route::get('/layanan/manajemen-sosial-media', [FrontController::class, 'servicesSosmed'])->name('sosmed');
Route::get('/layanan/jasa-pembuatan-website', [FrontController::class, 'servicesWeb'])->name('website');
Route::get('/layanan/content-marketing', [FrontController::class, 'servicesContentMarketing'])->name('content-marketing');
Route::get('/layanan/desain-visual-dan-digital-branding', [FrontController::class, 'servicesVisualBranding'])->name('visual-branding');



Route::post('/subscribe', [FrontController::class, 'subscribeStore'])->name('subscribe');
