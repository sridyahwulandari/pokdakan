<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KirimEmailController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PostController;


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
Route::get('/tentang-kami', [FrontController::class, 'tentang']);
Route::get('/acara', [FrontController::class, 'acara']);
// Route::get('/hubungi-kami', [FrontController::class, 'hubungi']);
Route::get('/formemail', [FrontController::class, 'formemail']);
Route::post('/kirim', [FrontController::class, 'kirim']);
// Route::get('formemail', [KirimEmailController::class, 'index']);
// Route::post('kirim', [KirimEmailController::class, 'kirim']);

Route::group(['middleware' => ['auth']], function() {
    Route::resource('users', 'UserController');
    Route::get('myprofile', 'UserController@myProfile')->name('user.myProfile');
    Route::get('profile', 'UserController@profile')->name('user.profile');
    Route::post('/profile', 'UserController@postProfile')->name('user.postProfile');
    Route::get('/password/change', 'UserController@getPassword')->name('userGetPassword');
    Route::post('/password/change', 'UserController@postPassword')->name('userPostPassword');
    Route::resource('roles', 'RoleController');
    Route::resource('permissions', 'PermissionController');
    Route::resource('posts', 'PostController');
    Route::resource('kategori', 'KategoriController');
    Route::resource('jenis', 'JenisController');
});
