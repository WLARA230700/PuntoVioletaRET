<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DerechosController;

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
    return view('index');
});
Route::get('/temas_interes', function () {
    return view('temas_interes');
});
Route::get('/derechos', function () {
    return view('derechos');
});
Route::get('/redes_comunitarias', function () {
    return view('redes_comunitarias');
});
Route::get('/colaboradores', function () {
    return view('colaboradores');
});
Route::get('/galeria', function () {
    return view('galeria');
});


//ADMIN
Route::get('/dashboard', [AdminController::class, 'dashboard']);
Route::get('/login', [AdminController::class, 'index'])->name('login');
Route::post('/loginVerify', [AdminController::class, 'login'])->name('loginVerify');
Route::get('/signout', [AdminController::class, 'signOut'])->name('signout');
Route::get('/addRight', [DerechosController::class, 'index'])->name('addRight');
Route::post('/addRightPost', [DerechosController::class, 'store'])->name('addRightPost');
Route::get('/showDerechos', [DerechosController::class, 'showDerechos'])->name('showDerechos');