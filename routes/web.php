<?php

use App\Http\Controllers\AcaraController;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KirimEmailController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CountdownTimerController;


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

// Route::get('/', function () {
//     return view('front');
// });
Route::get('/', [FrontController::class, 'beranda']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/beranda', [FrontController::class, 'beranda']);
Route::get('/beranda-detail', [FrontController::class, 'berandaDetail']);
Route::get('/berita-front', [FrontController::class, 'beritaFront']);
Route::get('/berita-front-detail/{slug}', [FrontController::class, 'beritaFrontDetail'])->name('berita-front-detail');
Route::get('/edukasi-front', [FrontController::class, 'edukasiFront']);
Route::get('/edukasi-front-detail/{slug}', [FrontController::class, 'edukasiFrontDetail'])->name('edukasi-front-detail');
Route::get('/tentang-kami', [FrontController::class, 'tentang']);
Route::get('/formemail', [FrontController::class, 'formemail']);
Route::post('/kirim', [FrontController::class, 'kirim']);

Route::get('regis', 'UserController@regis')->name('user.regis');
Route::post('store_reg', 'UserController@store_regis')->name('user.store_regis');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('users', 'UserController');
    Route::get('myprofile', 'UserController@myProfile')->name('user.myProfile');
    Route::get('profile', 'UserController@profile')->name('user.profile');
    Route::post('/profile', 'UserController@postProfile')->name('user.postProfile');
    Route::get('/password/change', 'UserController@getPassword')->name('userGetPassword');
    Route::post('/password/change', 'UserController@postPassword')->name('userPostPassword');
    Route::resource('roles', 'RoleController');
    Route::resource('permissions', 'PermissionController');
    Route::resource('supplier', 'SupplierController');
    Route::resource('pembudidaya', 'PembudidayaController');
    Route::resource('pengepul', 'PengepulController');
    Route::resource('berita', 'BeritaController');
    Route::resource('edukasi', 'EdukasiController');
    Route::resource('produk', 'ProdukController');
    Route::get('produktersedia', 'ProdukController@produktersedia')->name('produk.produktersedia');
    Route::resource('tambak', 'TambakController');
    Route::resource('jadwal', 'JadwalController');
    Route::resource('pembesaran', 'PembesaranController');
    Route::resource('panen', 'PanenController');
    Route::resource('kebutuhan-pengepul', 'KebutuhanPengepulController');
    Route::resource('kebutuhan-pembudidaya', 'KebutuhanPembudidayaController');
    
    // Route::post('/kirim', [FrontController::class, 'kirim']);
    Route::get('jadwal/update-pembesaran/{id}', 'JadwalController@updatePaksi');
    Route::get('pembesaran/update-panen/{id}', 'PembesaranController@updatePembesaranAksi');
    Route::get('panen/update-panen/{id}', 'PanenController@updatePanenAksi');
});
