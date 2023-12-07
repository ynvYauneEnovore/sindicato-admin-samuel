<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\AsociadosController;

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return view('frontend.landing.index');
});

Route::middleware(['auth'])->group(function () {
    Route::get('inicio', [DashboardController::class, 'index'])->name('dashboard');

    Route::group(['prefix' => 'asociado'], function () {
        Route::get('/', [AsociadosController::class, 'index'])->name('backend.asociado.index');
        Route::get('/create', [AsociadosController::class, 'create'])->name('backend.asociado.create');
        Route::post('store', [AsociadosController::class, 'store'])->name('backend.asociado.store');
        Route::get('edit/{id}', [AsociadosController::class, 'edit'])->name('backend.asociado.edit');
        Route::post('update', [AsociadosController::class, 'update'])->name('backend.asociado.update');
        Route::post('delete', [AsociadosController::class, 'delete'])->name('backend.asociado.delete');
    });
});
