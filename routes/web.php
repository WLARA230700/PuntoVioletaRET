<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DerechosController;
use App\Http\Controllers\ImagenesController;
use App\Http\Controllers\TalleresController;

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
/*Route::get('/temas_interes', function () {
    return view('temas_interes');
});*/
Route::get('/nosotras', function () {
    return view('nosotras');
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
Route::get('/denunciar', function () {
    return view('te_acompanamos_denunciar');
});
Route::get('/medidas-de-proteccion', function () {
    return view('medidas_proteccion');
});
Route::get('/solicitud-medidas-de-proteccion', function () {
    return view('solicitud_medidas_proteccion');
});
Route::get('/requisitos-medidas-de-proteccion', function () {
    return view('requisitos_medidas_proteccion');
});
Route::get('/violencia-sexual', function () {
    return view('violencia_sexual');
});
Route::get('/pension-alimentaria', function () {
    return view('pension_alimentaria');
});


// DB - USER
Route::get('/derechos/{tipo}', [DerechosController::class, 'showDerechosUser'])->name('derechos');
Route::get('/galeria/{tipo}', [ImagenesController::class, 'showImagenesUser'])->name('galeria');
Route::get('/temas_interes', [TalleresController::class, 'showTalleresUser'])->name('temas_interes');
//Descargar derecho
Route::get('/download/{file}', [DerechosController::class, 'descargarDerecho']);


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

Route::get('/showUsers', [AdminController::class, 'showUsers'])->name('showUsers');
Route::get('/addUser', [AdminController::class, 'indexAddUser'])->name('addUser');
Route::post('/addUserPost', [AdminController::class, 'store'])->name('addUserPost');
Route::get('/deleteUser/{id}', [AdminController::class, 'destroy'])->name('deleteUser');

Route::get('/showTalleres', [TalleresController::class, 'showTalleres'])->name('showTalleres');
Route::get('/addTaller', [TalleresController::class, 'index'])->name('addTaller');
Route::post('/addTallerPost', [TalleresController::class, 'store'])->name('addTallerPost');
Route::get('/modifyTaller/{id}', [TalleresController::class, 'edit'])->name('modifyTaller');
Route::post('/modifyTallerPost', [TalleresController::class, 'update'])->name('modifyTallerPost');
Route::get('/deleteTaller/{id}', [TalleresController::class, 'destroy'])->name('deleteTaller');