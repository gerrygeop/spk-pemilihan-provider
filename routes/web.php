<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/kriteria', function () {
        return view('kriteria.list');
    })->name('kriteria.list');

    Route::get('/kriteria/create', function () {
        return view('kriteria.create');
    })->name('kriteria.create');

    Route::get('/alternatif', function () {
        return view('alternatif.list');
    })->name('alternatif.list');

    Route::get('/alternatif/create', function () {
        return view('alternatif.create');
    })->name('alternatif.create');
});

require __DIR__ . '/auth.php';
