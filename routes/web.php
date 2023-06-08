<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FeaturedController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\ContactWidgetController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\MarketplaceController;
use App\Http\Controllers\UserController;
use App\Models\Product;

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
//     return view('main');
// });

Route::get('/', [LandingController::class, 'index'])->name('landing');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::resource('/header', HeaderController::class);
Route::resource('/banner', BannerController::class);
Route::resource('/product', ProductController::class);
Route::resource('/featured', FeaturedController::class);
Route::resource('/sales', SalesController::class);
Route::resource('/footer', FooterController::class);
Route::resource('/contact', ContactWidgetController::class);
Route::resource('/marketplace', MarketplaceController::class);
Route::post('image/change/{id}', [ImageController::class, 'change'])->name('image.change');
Route::post('image/store', [ImageController::class, 'store'])->name('image.store');
Route::post('map/change/{id}', [MapController::class, 'change'])->name('map.change');
Route::post('map/store', [MapController::class, 'store'])->name('map.store');
Route::get('/user', [UserController::class, 'index'])->name('user');
