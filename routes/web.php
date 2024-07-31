<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MainController;


Route::get('/home', function () {
    return view('home');
});
Route::get('/register', function () {
    return view('register');
});

Route::get('/logout', function () {
    Session::forget('logins');
    return redirect('/login');
});

Route::view('/login',"login");

Route::get('/login',[MainController ::class,'login'])->name('login');
Route::get('/register',[MainController ::class,'register'])->name('register');
Route::post('/check',[MainController ::class,'check'])->name('check');
Route::post('save',[MainController ::class,'save'])->name('save');


Route::get('/', [ProductController::class,'index']);
Route::post('/', [ProductController::class,'index']);
Route::get('detail/{id}',[ProductController ::class,'detail']);
Route::get('search',[ProductController ::class,'search']);
Route::post('add_to_cart',[ProductController ::class,'addToCart']);
Route::get('cartlist',[ProductController ::class,'cartlist']);
Route::get('removeCart/{id}',[ProductController ::class,'removeCart']);
Route::get('ordernow',[ProductController ::class,'ordernow']);
Route::post('orderplace',[ProductController ::class,'orderplace']);
Route::get('myorder',[ProductController ::class,'myorder']);

Route::get('/Alogin',[MainController ::class,'Alogin'])->name('Alogin');
Route::get('/AdminDashboard', function () {
    return view('AdminDashboard');
});



