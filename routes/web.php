<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DerechosController;
use App\Http\Controllers\ImagenesController;

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
Route::get('/showRights', [DerechosController::class, 'showDerechos'])->name('showDerechos');
Route::get('/modifyRight/{id}', [DerechosController::class, 'edit'])->name('modifyRight');
Route::post('/modifyRightPost', [DerechosController::class, 'update'])->name('modifyRightPost');
Route::get('/deleteRight/{id}', [DerechosController::class, 'destroy'])->name('deleteRight');

Route::get('/addImage', [ImagenesController::class, 'index'])->name('addImage');
Route::post('/addImagePost', [ImagenesController::class, 'store'])->name('addImagePost');
Route::get('/showPhotos', [ImagenesController::class, 'showFotografias'])->name('showPhotos');
Route::get('/showInfografias', [ImagenesController::class, 'showInfografias'])->name('showInfografias');
Route::get('/modifyImage/{id}', [ImagenesController::class, 'edit'])->name('modifyImage');
Route::post('/modifyImagePost', [ImagenesController::class, 'update'])->name('modifyImagePost');
Route::get('/deleteImage/{id}', [ImagenesController::class, 'destroy'])->name('deleteImage');