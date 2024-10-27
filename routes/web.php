<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [ProductController::class, 'index'])->name('product.index');



Route::prefix('/admin')->group(function(){
    
Route::get('/',function(){

    return view('pages.admin.dashboard');


});

Route::get('/login',function(){

    return view('pages.login');


});
Route::post('/login','App\Http\Controllers\LoginController@login')->name('login');


Route::get('/add-product',function(){

    return view('pages.admin.add_product');


})->name('addproduct');

Route::post('/add-product', [ProductController::class, 'store'])->name('product.store');
Route::get('/promotion',function(){

    return view('pages.admin.promotion');


})->name('promotion');
Route::get('/create-blog',function(){

    return view('pages.admin.blog');


})->name('create-blog');





});
