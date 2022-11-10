<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\SectionController;
use App\Http\Controllers\Admin\FeaturedBannerController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\LanguageController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\SmptController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\NotificationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
Route::get('/subcategories', [CategoryController::class, 'subcategories'])->name('subcategories');
Route::get('/brand', [BrandController::class, 'index'])->name('brands');
Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
Route::post('/product/update/{id}', [ProductController::class, 'update'])->name('product.update');

Route::get('/orders', [OrderController::class, 'index'])->name('orders');

Route::get('/users', [UserController::class, 'index'])->name('users');

Route::get('/sections', [SectionController::class, 'index'])->name('sections');
Route::get('/featuredBanners', [FeaturedBannerController::class, 'index'])->name('featuredBanners');
Route::get('/pages', [PageController::class, 'index'])->name('pages');
Route::get('/sliders', [SliderController::class, 'index'])->name('sliders');
Route::get('/contact', [PageController::class, 'index'])->name('page.contact');
Route::get('/menulinks', [SettingController::class, 'index'])->name('page.menulinks');

Route::get('/blogs', [BlogController::class, 'index'])->name('blogs');
Route::get('/blog/settings', [BlogController::class, 'settings'])->name('blog.settings');
Route::get('/blog/category', [BlogController::class, 'blogcategories'])->name('blogcategories');

Route::get('/settings', [SettingController::class, 'index'])->name('settings');
Route::get('/shipping', [SettingController::class, 'index'])->name('setting.shipping');
Route::get('/home-customization', [SettingController::class, 'index'])->name('setting.customize');
Route::get('/content', [SettingController::class, 'index'])->name('setting.content');

Route::get('/report', [ReportController::class, 'index'])->name('report');

Route::get('/notification', [NotificationController::class, 'index'])->name('notification');
Route::get('/smpt', [SmptController::class, 'index'])->name('smpt');
Route::get('/language', [LanguageController::class, 'index'])->name('language');
Route::get('/roles', [RolesController::class, 'index'])->name('roles');
Route::get('/permissions', [UserController::class, 'permissions'])->name('permissions');
Route::get('/currencies', [SettingController::class, 'currencies'])->name('currencies');
});