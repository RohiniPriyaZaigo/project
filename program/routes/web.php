<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontendProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ManagerController;
use App\Models\Admin;
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

Route::get('/create',[UserController::class, 'create'])->name('create')->middleware('auth');
Route::post('/store',[UserController::class, 'store'])->name('store');


Route::get('/add',[ProductController::class,'add'])->name('add');
Route::post('/index',[ProductController::class,'index'])->name('index');
Route::get('/list',[ProductController::class, 'list'])->name('list');
Route::get('/edit/{id}',[ProductController::class, 'edit'])->name('edit');
Route::put('/update/{id}',[ProductController::class, 'update'])->name('update');
Route::delete('/delete/{id}',[ProductController::class, 'destroy'])->name('delete');

Route::get('/createAdmin',[AdminController::class,'createAdmin'])->name('createAdmin')->middleware('auth');
Route::post('/storeAdmin',[AdminController::class,'storeAdmin'])->name('storeAdmin');
Route::get('/listAdmin',[AdminController::class,'listAdmin'])->name('listAdmin');
Route::get('/editAdmin/{id}',[AdminController::class, 'editAdmin'])->name('editAdmin');
Route::put('/updateAdmin/{id}',[AdminController::class, 'updateAdmin'])->name('updateAdmin');
Route::delete('/destroyAdmin/{id}',[AdminController::class, 'destroyAdmin'])->name('destroyAdmin');

Route::get('/createManager',[ManagerController::class,'createManager'])->name('createManager')->middleware('auth');
Route::post('/storeManager',[ManagerController::class,'storeManager'])->name('storeManager');
Route::get('/listManager',[ManagerController::class,'listManager'])->name('listManager');
Route::get('/editManager/{id}',[ManagerController::class, 'editManager'])->name('editManager');
Route::put('/updateManager/{id}',[ManagerController::class, 'updateManager'])->name('updateManager');
Route::delete('/destroyManager/{id}',[ManagerController::class, 'destroyManager'])->name('destroyManager');

Route::get('/customer',[UserController::class, 'createCustomer'])->name('customer')->middleware('auth');
Route::get('/listCustomer',[UserController::class,'listCustomer'])->name('listCustomer');
Route::get('/editCustomer/{id}',[UserController::class, 'editCustomer'])->name('editCustomer');
Route::put('/updateCustomer/{id}',[UserController::class, 'updateCustomer'])->name('updateCustomer');
Route::delete('/destroyCustomer/{id}',[UserController::class, 'destroyCustomer'])->name('destroyCustomer');

Route::get('/index',[FrontendProductController::class,'index'])->name('index')->middleware('auth');
Route::get('/productAdd',[FrontendProductController::class,'productAdd']);







Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* Route::get('/home',[App\Http\Controllers\FrontendProductController::class,'index'])->name('home'); */



