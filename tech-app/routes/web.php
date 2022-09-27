<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\editEmployeeController;
use App\Http\Controllers\addController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\AddbookController;
use App\Http\Controllers\RequestController;
use Symfony\Component\Routing\RequestContext;

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

Route::get('/admin/login',[adminController::class,'index']);

Route::get('login', [adminController::class, 'index'])->name('login');
Route::post('post-login', [adminController::class, 'postLogin'])->name('login.post');
Route::get('registration', [adminController::class, 'registration'])->name('register');
Route::post('post-registration', [adminController::class, 'postRegistration'])->name('register.post');
Route::get('dashboard', [adminController::class, 'dashboard']);
Route::get('logout', [adminController::class, 'logout'])->name('logout');

Route::get('/',[RequestController::class,'index'])->name('request.index');
Route::post('add-employee',[RequestController::class,'store']);
Route::get('edit-employee/{id}',[RequestController::class,'edit'])->name('editEmployee');
Route::post('edit',[RequestController::class,'update'])->name('updateEmployee');

Route::get('search',[RequestController::class,'search'])->name('request.search');
Route::get('book',[AddbookController::class,'test']);
Route::get('book/{id}',[AddbookController::class,'index'])->name('Book');
Route::post('add-book',[AddbookController::class,'store']);
?>
