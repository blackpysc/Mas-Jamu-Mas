<?php

use App\Livewire\AddCategory;
use App\Livewire\AddProductForm;
use App\Livewire\AdminDashboard;
use App\Livewire\ManageCategory;
use App\Livewire\ManageOrder;
use App\Livewire\ManageProduct;
use App\Livewire\ProductDetail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/product/detail', ProductDetail::class);

Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin/dashboard', AdminDashboard::class)->name('dashboard');
    Route::get('/products', ManageProduct::class)->name('products');
    Route::get('/orders', ManageOrder::class)->name('orders');
    Route::get('/add/product', AddProductForm::class);
    Route::get('/manage/category', ManageCategory::class);
    Route::get('/add/category', AddCategory::class);
});
