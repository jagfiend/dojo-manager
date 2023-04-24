<?php

use App\Http\Controllers\Members;
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

Route::get('/', fn () => view('welcome'));

Route::middleware(['auth', 'verified'])->group(function (): void {
    Route::prefix('members')->group(function (): void {
        Route::get('/', Members\IndexController::class)->name('members.index');
        Route::get('/create', Members\CreateController::class)->name('members.create');
        Route::post('/', Members\StoreController::class)->name('members.store');
        Route::get('/{member}/edit', Members\EditController::class)->name('members.edit');
        Route::put('/{member}', Members\UpdateController::class)->name('members.update');
        Route::delete('/{member}', Members\DeleteController::class)->name('members.delete');
    });
});
