<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/create',[UserController::class, 'create'])->middleware('auth');
Route::post('/store',[UserController::class, 'store'])->name('store');
Route::get('/admin',[UserController::class, 'admin'])->name('admin')->middleware('auth');
Route::get('/manager',[UserController::class, 'manager'])->name('manager')->middleware('auth');
Route::get('/customer',[UserController::class, 'customer'])->name('customer');
Route::get('/product',[UserController::class, 'product'])->name('product');

Route::get('/add',[ProductController::class,'add'])->name('add');
Route::post('/index',[ProductController::class,'index'])->name('index');
Route::get('/list',[ProductController::class, 'list'])->name('list');
Route::get('/edit',[ProductController::class, 'edit'])->name('edit');
Route::get('/update',[ProductController::class, 'update'])->name('update');

Route::get('/destroy',[ProductController::class, 'destroy']);






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
