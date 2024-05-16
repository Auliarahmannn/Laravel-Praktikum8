<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get( '/',function () {
    return view(view:'welcome');
});
Route::get('/salam',function () {
    return "selamat datang di website app puskesmas!";
});
Route::get('/profil', function () {
    return view('profil');
});
Route::get('/About', function () {
    return view('About');
});
route::get('/dashboard', [DashboardController::class, 'show']);
route::get('/dashboard/laporan', [DashboardController::class, 'laporan']);
