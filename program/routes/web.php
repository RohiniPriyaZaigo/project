<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ManagerController;
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
Route::get('/product',[UserController::class, 'product'])->name('product');

Route::get('/add',[ProductController::class,'add'])->name('add');
Route::post('/index',[ProductController::class,'index'])->name('index');
Route::get('/list',[ProductController::class, 'list'])->name('list');
Route::get('/edit/{id}',[ProductController::class, 'edit'])->name('edit');
Route::put('/update/{id}',[ProductController::class, 'update'])->name('update');
Route::delete('/delete/{id}',[ProductController::class, 'destroy'])->name('delete');

Route::get('/createAdmin',[AdminController::class,'createAdmin'])->name('createAdmin');
Route::post('/storeAdmin',[AdminController::class,'storeAdmin'])->name('storeAdmin');
Route::get('/listAdmin',[AdminController::class,'listAdmin'])->name('listAdmin');
Route::get('/editAdmin/{id}',[AdminController::class, 'editAdmin'])->name('editAdmin');

Route::get('/createManager',[ManagerController::class,'createManager'])->name('createManager');
Route::post('/storeManager',[ManagerController::class,'storeManager'])->name('storeManager');
Route::get('/listManager',[ManagerController::class,'listManager'])->name('listManager');
Route::get('/editManager/{id}',[ManagerController::class, 'editManager'])->name('editManager');

Route::get('/customer',[UserController::class, 'createCustomer'])->name('customer');
Route::get('/listCustomer',[UserController::class,'listCustomer'])->name('listCustomer');








Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
