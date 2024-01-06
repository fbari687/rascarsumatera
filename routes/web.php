<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardArticleController;
use App\Http\Controllers\DashboardBannerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardFaqController;
use App\Http\Controllers\DashboardTypeController;
use App\Http\Controllers\DashboardBrandController;
use App\Http\Controllers\DashboardContactController;
use App\Http\Controllers\DashboardGalleryController;
use App\Http\Controllers\DashboardProductController;
use App\Http\Controllers\DashboardVideoController;
use App\Http\Controllers\MailController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get("/product", [ProductController::class, 'index'])->name('produk');
Route::get("/product/{product:slug}", [ProductController::class, 'detail'])->name('produk.detail');
Route::get('/sort', [ProductController::class, 'sort']);
Route::get('/search', [ProductController::class, 'search']);
Route::get('/faq', [FaqController::class, 'index'])->name('faq');
Route::get('/about', [AboutController::class, 'index'])->name('tentang');
Route::get('/contact', [ContactController::class, 'index'])->name('kontak');
Route::get('/article', [ArticleController::class, 'index'])->name('artikel');
Route::get('/article/{article:slug}', [ArticleController::class, 'detail'])->name('artikel.detail');
Route::post('/email', [MailController::class, 'index']);
Route::middleware('guest')->group(function () {
  Route::get('/admin', [AuthController::class, 'index'])->name('login');
  Route::post('/admin', [AuthController::class, 'login']);
});
Route::middleware('auth')->group(function () {

  Route::get('/logout', [AuthController::class, 'logout']);
  Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');
  Route::resource('/admin/dashboard/product', DashboardProductController::class);
  Route::get('/admin/dashboard/product/slug/checkSlug', [DashboardProductController::class, 'checkSlug']);
  Route::resource('/admin/dashboard/brand', DashboardBrandController::class);
  Route::get('/admin/dashboard/brand/slug/checkSlug', [DashboardBrandController::class, 'checkSlug']);
  Route::resource('/admin/dashboard/type', DashboardTypeController::class);
  Route::get('/admin/dashboard/type/slug/checkSlug', [DashboardTypeController::class, 'checkSlug']);
  Route::resource('/admin/dashboard/faq', DashboardFaqController::class);
  Route::resource('/admin/dashboard/contact', DashboardContactController::class);
  Route::resource('/admin/dashboard/article', DashboardArticleController::class);
  Route::get('/admin/dashboard/article/slug/checkSlug', [DashboardArticleController::class, 'checkSlug']);
  Route::resource('/admin/dashboard/gallery', DashboardGalleryController::class);
  Route::resource('/admin/dashboard/video', DashboardVideoController::class);
  Route::resource('/admin/dashboard/banner', DashboardBannerController::class);
});
