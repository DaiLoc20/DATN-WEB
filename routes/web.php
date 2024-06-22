<?php


use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('/User/Home/');
});
Route::resource('/Home',ProductController::class);
