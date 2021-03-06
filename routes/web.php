<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
//Route::get('/',[UserController::class,'home'])->name('home');
Route::get('/register',[UserController::class,'register']);
Route::get('/login',[UserController::class,'login'])->name('login');
Route::get('/dashbord',[UserController::class,'details'])->name('student.details');
//Route::get('/user/details/{id}',[UserController::class,'create'])->name('student.create');
Route::post('/register',[UserController::class,'userregistration'])->name('userregistration');
Route::get('/user/details/{id}',[UserController::class,'ShowDetails'])->name('user.details');
Route::post('/login',[UserController::class,'userlogin'])->name('user.login');
