<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\AsesorLoginController;
use App\Http\Controllers\DispoController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AsesorController;
Route::middleware('auth:web')->group(function () {
    Route::get('/admin/asesors', [AdminController::class, 'asesors']);
    Route::get('/admin/register-asesor', [AdminController::class, 'asesor_register']);
    Route::get('/admin/clients', [AdminController::class, 'clients']);
    Route::get('/admin/torre', [AdminController::class, 'torre'])->name('admin-torre');
    Route::get('/admin/ventas', [AdminController::class, 'ventas']);
    Route::get('/admin/cotizaciones', [AdminController::class, 'quotations']);
    Route::get('/admin/client-profile', [AdminController::class, 'profile'])->name('admin-client-profile');
    Route::get('/admin/clients-asesor', [AdminController::class, 'get_clients'])->name('clients-asesor');
    Route::post('/admin/reset-password', [AdminController::class, 'reset_password'])->name('reset-password');
});
Route::middleware('auth:asesor')->group(function () {
    Route::get('/client-login', [AsesorController::class, 'index'])->name('client-login');
    Route::get('/clients', [AsesorController::class, 'clients']);
    Route::get('/cotizaciones', [AsesorController::class, 'quotations'])->name('cotizaciones');
    Route::get('/disponibilidad', [DispoController::class, 'index'])->name('disponibilidad');
    Route::get('/listado', [DispoController::class, 'torre'])->name('torre');
    Route::get('/view-asesor', [DispoController::class, 'asesor'])->name('view-asesor');
    Route::get('/client-profile', [AsesorController::class, 'profile'])->name('client-profile');
    Route::post('/update-profile', [AsesorController::class, 'update_profile'])->name('update-profile');
    Route::get('/reset-password', [AsesorController::class, 'reset_password'])->name('reset-password-view');
});
Route::get('/', [AsesorLoginController::class, 'index'])->name('login');
Route::get('/admin', [AdminLoginController::class, 'index']);
Route::get('/logout', function () {
    auth()->logout();
    return redirect('/');
});

Route::get('/client-view', [DispoController::class, 'client'])->name('client-view');
Route::get('/unavailable', [DispoController::class, 'unavailable'])->name('unavailable');
