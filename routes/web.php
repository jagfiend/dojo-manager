<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Members;
use Illuminate\Http\RedirectResponse;
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

require __DIR__ . '/auth.php';

Route::get('/', fn(): RedirectResponse => to_route('dashboard'));

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
