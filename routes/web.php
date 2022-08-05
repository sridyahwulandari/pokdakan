<?php

use App\Http\Controllers\AcaraController;
use App\Http\Controllers\AktivitasController;
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
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ShareSocialController;

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
Route::get('/produk-front', [FrontController::class, 'produkFront']);
Route::get('/produk-front-detail/{slug}', [FrontController::class, 'produkFrontDetail'])->name('produk-front-detail');
Route::get('/jadwal-front', [FrontController::class, 'jadwalFront']);
Route::get('/event-front', [FrontController::class, 'eventFront']);
Route::get('/tentang-kami', [FrontController::class, 'tentang']);
Route::get('/formemail', [FrontController::class, 'formemail']);
Route::post('/kirim', [FrontController::class, 'kirim']);

Route::get('regis', 'UserController@regis')->name('user.regis');
Route::post('store_reg', 'UserController@store_regis')->name('user.store_regis');

Route::get('/reload-captcha', [App\Http\Controllers\Auth\UserController::class, 'reloadCaptcha']);

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
    Route::get('/share', [ShareSocialController::class,'shareSocial']);
    Route::resource('tambak', 'TambakController');
    Route::resource('jadwal', 'JadwalController');
    Route::resource('event', 'EventController');
    Route::resource('history', 'HistoryController');
    Route::resource('aktivitas', 'AktivitasController');
    Route::post('aktivitas/export-pdf', [AktivitasController::class, 'pdf']);
    Route::post('aktivitas/export-pdf-aksi', [AktivitasController::class, 'pdfAksi']);
    Route::resource('pembesaran', 'PembesaranController');
    Route::resource('panen', 'PanenController');
    Route::resource('kebutuhan-pengepul', 'KebutuhanPengepulController');
    Route::get('detailkebutuhanpengepul', 'KebutuhanPengepulController@detailkebutuhanpengepul')->name('kebutuhanpengepul.detailkebutuhanpengepul');
    Route::resource('kebutuhan-pembudidaya', 'KebutuhanPembudidayaController');
    Route::get('detailkebutuhanpembudidaya', 'KebutuhanPembudidayaController@detailkebutuhanpembudidaya')->name('kebutuhanpembudidaya.detailkebutuhanpembudidaya');


    // Route::get('generate-pdf', [PDFController::class, 'generatePDF']);
    
    // Route::post('/kirim', [FrontController::class, 'kirim']);
    Route::get('jadwal/update-pembesaran/{id}', 'JadwalController@updatePaksi');
    Route::get('pembesaran/update-panen/{id}', 'PembesaranController@updatePembesaranAksi');
    Route::get('panen/update-panen/{id}', 'PanenController@updatePanenAksi');
});
