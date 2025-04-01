<?php

use App\Http\Controllers\Frontend\AuthController;
use App\Http\Controllers\Frontend\BarangController;
use App\Http\Controllers\Frontend\DashboardController;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/scan-result', function (Request $request) {
    $data = $request->query('data');
    return view('scan-result', compact('data'));
});


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'handleLogin'])->name('post.login');
Route::post('/logout', [AuthController::class, 'handleLogout'])->name('auth.logout');

route::get('/user_profile', function () {
    return view('profile.user_profile');

})->name('user_profile');

route::get('/user_profile', function () {
    return view('profile.user_profile');
})->name('user_profile');

    Route::resource('barangs', BarangController::class);


route::get('/error', function () {
    return view('error.error');
})->name('error');
