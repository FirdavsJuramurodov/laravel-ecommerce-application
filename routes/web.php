<?php

use App\Http\Controllers\SearchController;
use App\Http\Controllers\Site\CategoryController;
use App\Http\Controllers\Site\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


require 'admin.php';



Route::view('/', 'site.pages.homepage');

Auth::routes();




Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');

Route::get('/category/{slug}', [CategoryController::class, 'show'])->name('category.show');



Route::get('/product/{slug}', [ProductController::class, 'show'])->name('product.show');


Route::post('search-record', [SearchController::class, 'search'])->name('product.search');


