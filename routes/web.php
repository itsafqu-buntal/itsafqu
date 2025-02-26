<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Auth;

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

Route::prefix('admin')
    ->namespace('admin')
    ->middleware(['auth', 'admin'])
    ->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])
            ->name('dashboard');
        Route::resource('produk-web', '\App\Http\Controllers\Admin\ProductWebController');
        Route::get('/actioneditweb/{id}', '\App\Http\Controllers\Admin\ProductWebController@actionedit');
        Route::get('/actionedittweb/{id}', '\App\Http\Controllers\Admin\ProductWebController@actioneditt');
        Route::resource('produk-gambar', '\App\Http\Controllers\Admin\ProductImageController');
        Route::get('/actioneditgambar/{id}', '\App\Http\Controllers\Admin\ProductImageController@actionedit');
        Route::get('/actionedittgambar/{id}', '\App\Http\Controllers\Admin\ProductImageController@actioneditt');
        Route::resource('produk-video', '\App\Http\Controllers\Admin\ProductVideoController');
        Route::get('/actioneditvideo/{id}', '\App\Http\Controllers\Admin\ProductVideoController@actionedit');
        Route::get('/actionedittvideo/{id}', '\App\Http\Controllers\Admin\ProductVideoController@actioneditt');
        Route::resource('order', '\App\Http\Controllers\Admin\OrderController');
    });

Route::prefix('customer')
    ->namespace('customer')
    ->middleware(['auth', 'user'])
    ->group(function () {
        Route::get('/', [App\Http\Controllers\User\DashboardController::class, 'index'])
            ->name('dashboard-user');
        Route::resource('pesanan-ku', '\App\Http\Controllers\User\MyOrderController');
        Route::get('/info-team', [App\Http\Controllers\User\TeamInfoController::class, 'index'])
            ->name('info-team');
        Route::get('/single-produk', [App\Http\Controllers\User\SingleProductController::class, 'index'])
            ->name('single-produk');
        Route::get('/paket-produk', [App\Http\Controllers\User\PackageProductController::class, 'index'])
            ->name('paket-produk');
        Route::resource('edit-profile', '\App\Http\Controllers\User\EditProfileController');
    });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/template', [TemplateController::class, 'index'])->name('template');
Route::get('/template/{slug}', [TemplateController::class, 'show'])->name('template-detail');

Route::get('/form_daftar/{id}/create', [App\Http\Controllers\OrderController::class, 'formDaftar']);

Route::post('/form_daftar/{id_kode}/create/store', [App\Http\Controllers\OrderController::class, 'daftar']);

Route::get('/order/{id_kode}', [App\Http\Controllers\OrderController::class, 'order'])->name('order')->middleware(['auth']);
Route::post('/order/store/{id_kode}', [App\Http\Controllers\OrderController::class, 'orderStore'])->middleware(['auth']);

Route::get('/link/{kode_pesanan}', [App\Http\Controllers\OrderController::class, 'link'])->name('link')->middleware(['auth']);
Route::post('/link/store/{kode_pesanan}', [App\Http\Controllers\OrderController::class, 'linkStore'])->middleware(['auth']);

Route::get('/.{link}', [App\Http\Controllers\OrderController::class, 'show'])->name('show-wedding');



Route::get('/form2', [HomeController::class, 'form2'])->name('form2');
Route::get('/formTemplate', [HomeController::class, 'formTemplate'])->name('formTemplate');
Route::get('/pembayaran', [HomeController::class, 'pembayaran'])->name('pembayaran');
Route::get('/templateWeb', [HomeController::class, 'web'])->name('web');
Route::get('/templateGambar', [HomeController::class, 'gambar'])->name('gambar');
Route::get('/PesananUser', [HomeController::class, 'MyOrders'])->name('myorders');
Route::view('/formPaketTemplate', 'pages/users/formPaketTemplate');
Auth::routes();
