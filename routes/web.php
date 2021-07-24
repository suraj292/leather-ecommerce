<?php

use Illuminate\Support\Facades\Route;

//      PUBLIC
Route::get('/', \App\Http\Livewire\Public\Home::class)->name('home');
Route::get('products/{category?}', App\Http\Livewire\Public\Products::class)->name('products');
Route::get('product/{slug?}', App\Http\Livewire\Public\ProductDetail::class)->name('product_details');
//Route::get('register', App\Http\Livewire\Public\Register::class)->middleware('guest')->name('register');

//      ADMIN
Route::get('admin', App\Http\Livewire\Admin\Login::class)->name('admin_login')->middleware('admin');
Route::group(['prefix'=>'admin', 'middleware'=>['R_admin']], function (){
    Route::get('dashboard', \App\Http\Livewire\Admin\Dashboard::class)->name('dashboard');
//    Route::get('home/{component?}', \App\Http\Livewire\Admin\Home::class)->name('admin_home');
    Route::group(['prefix'=>'home'], function (){
        Route::get('slider', App\Http\Livewire\Admin\Component\Slides::class)->name('slider');
        Route::get('collection_banner', \App\Http\Livewire\Admin\Component\CollectionBanner::class)->name('collection_banner');
    });
    Route::group(['prefix'=>'product'], function (){
        Route::get('category', App\Http\Livewire\Admin\Component\ProductCategory::class)->name('product_category');
        Route::get('sub-category', App\Http\Livewire\Admin\Component\SubCategory::class)->name('sub_category');
        Route::get('/', App\Http\Livewire\Admin\Component\Products::class)->name('admin.products');
        Route::get('select_color', App\Http\Livewire\Admin\Component\SelectColor::class)->name('admin.color');
    });

});
//      Test
Route::get('test', App\Http\Livewire\Test::class);
