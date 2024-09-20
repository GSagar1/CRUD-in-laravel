<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('index');

    Route::resource('category',CategoryController::class);
// Route::get('category/index',[CategoryController::class,'index'])->name('category.index');
