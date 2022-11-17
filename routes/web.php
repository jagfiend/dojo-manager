<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Members\CreateController as MemberCreateController;
use App\Http\Controllers\Members\DeleteController as MemberDeleteController;
use App\Http\Controllers\Members\EditController as MemberEditController;
use App\Http\Controllers\Members\IndexController as MemberIndexController;
use App\Http\Controllers\Members\StoreController as MemberStoreController;
use App\Http\Controllers\Members\UpdateController as MemberUpdateController;
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

Route::get('/', fn (): RedirectResponse => to_route('dashboard'));

Route::middleware(['auth', 'verified'])->group(function (): void {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');

    Route::prefix('members')->group(function (): void {
        Route::get('/', MemberIndexController::class)->name('members.index');
        Route::get('/create', MemberCreateController::class)->name('members.create');
        Route::post('/', MemberStoreController::class)->name('members.store');
        Route::get('/{member}/edit', MemberEditController::class)->name('members.edit');
        Route::put('/{member}', MemberUpdateController::class)->name('members.update');
        Route::delete('/{member}', MemberDeleteController::class)->name('members.delete');
    });
});
