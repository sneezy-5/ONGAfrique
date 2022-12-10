<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DonController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\StoryController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\NewsletterController;
use App\Http\Controllers\Auth\AdminAuthenticatedSessionController;

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


Route::namespace('Auth')->middleware('guest')->group(function(){
    // login route
    Route::get('/admin/login',[AdminAuthenticatedSessionController::class, 'create'])->name('admin.login');
    Route::post('/admin/login',[AdminAuthenticatedSessionController::class, 'store'])->name('adminlogin');
});


Route::middleware(['auth','admin','visitor'])->group(function(){
   
Route::get('/admin/dashboard',[HomeController::class, 'index'])->name('admin.dashboard');
Route::resource('/admin/stories',StoryController::class);
Route::resource('admin/dons',DonController::class);
Route::resource('admin/events',EventController::class);
Route::resource('admin/users',UserController::class);
Route::resource('admin/members',MemberController::class);
// Route::resource('admin/storyrequests',StoryRequestController::class);
Route::resource('admin/newletter',NewsletterController::class);
 Route::get('/admin/newletter_download',[NewsletterController::class, 'export'])->name('newletter.export');
// Route::get('/admin/users',[UserController::class, 'index'])->name('users.index');
// Route::post('/admin/users/reg',[UserController::class, 'store'])->name('users.store');
// Route::get('/admin/users/ss',[UserController::class, 'create'])->name('users.create');
});


