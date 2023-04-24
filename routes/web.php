<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Members;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::middleware(['auth', 'verified'])->group(function (): void {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');

    Route::prefix('members')->group(function (): void {
        Route::get('/', Members\IndexController::class)->name('members.index');
        Route::get('/create', Members\CreateController::class)->name('members.create');
        Route::post('/', Members\StoreController::class)->name('members.store');
        Route::get('/{member}/edit', Members\EditController::class)->name('members.edit');
        Route::put('/{member}', Members\UpdateController::class)->name('members.update');
        Route::delete('/{member}', Members\DeleteController::class)->name('members.delete');
    });
});
