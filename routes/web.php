<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TouristSpotController;
use App\Http\Controllers\LugaresController;
use App\Http\Controllers\ViajarController;
use App\Http\Controllers\ContactanosController;

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

Route::get('/', [TouristSpotController::class, 'index'])->name('tourist-spots.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/lugares', [LugaresController::class, 'index'])->name('lugares');

Route::post('/lugares/nuevo', [LugaresController::class, 'store'])->name('tourist-spots.nuevo');

Route::get('/lugares/nuevo', [LugaresController::class, 'create'])->name('tourist-spots.nuevo');

Route::get('/lugares/mostrar/{id}', [LugaresController::class, 'show'])->name('tourist-spots.mostrar');

Route::get('/viajar', [ViajarController::class, 'index'])->name('viajar');

Route::post('/viajar/nuevo', [ViajarController::class, 'store'])->name('travels.nuevo');

Route::get('/viajar/nuevo', [ViajarController::class, 'create'])->name('travels.nuevo');

Route::get('/viajar/editar/{id}', [ViajarController::class, 'edit'])->name('travels.editar');

Route::put('/viajar/editar/{viajes}', [ViajarController::class, 'update'])->name('travels.actualizar');

Route::delete('/viajar/eliminar/{viaje}', [ViajarController::class, 'destroy'])->name('travels.eliminar');

Route::get('/contactanos', [ContactanosController::class, 'index'])->name('contactanos');

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

