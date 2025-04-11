<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Livewire\Admin\Plantillas\ListJubilados;
use App\Livewire\Admin\Plantillas\ListPlantillas;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/dashboard', DashboardController::class)->name('admin.dashboard');
Route::get('admin/plantillas', ListPlantillas::class)->name('admin.plantillas');
Route::get('admin/jubilados', ListJubilados::class)->name('admin.jubilados');
/* Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
}); */
