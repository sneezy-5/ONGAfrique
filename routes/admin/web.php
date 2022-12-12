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
    Route::resource('/admin/stories',StoryController::class)->except(['edit','create','show']);
    Route::get('/admin/story/{story}/edit_story',[StoryController::class, 'edit'])->name('stories.edit');
    Route::get('/admin/story/create_story',[StoryController::class, 'create'])->name('stories.create');
    Route::get('/admin/story/show_story/{story}/show_story',[StoryController::class, 'show'])->name('stories.show');
    Route::resource('admin/dons',DonController::class);
    Route::resource('admin/events',EventController::class)->except(['edit','create','show']);
    Route::get('/admin/event/{event}/edit_event',[EventController::class, 'edit'])->name('events.edit');
    Route::get('/admin/event/create_event',[EventController::class, 'create'])->name('events.create');
    Route::get('/admin/event/show_event/{event}/show_event',[EventController::class, 'show'])->name('events.show');
    Route::resource('admin/users',UserController::class)->except(['edit','create','show']);
    Route::get('/admin/user/{user}/edit_user',[UserController::class, 'edit'])->name('users.edit');
    Route::get('/admin/user/create_user',[UserController::class, 'create'])->name('users.create');
    Route::get('/admin/user/show_user/{user}/show_user',[UserController::class, 'show'])->name('users.show');
    Route::resource('admin/members',MemberController::class)->except(['edit','create','show']);
    Route::get('/admin/member/{member}/edit_member',[MemberController::class, 'edit'])->name('members.edit');
    Route::get('/admin/member/create_member',[MemberController::class, 'create'])->name('members.create');
    Route::get('/admin/member/show_member/{member}/show_member',[MemberController::class, 'show'])->name('members.show');
    Route::resource('admin/newletter',NewsletterController::class);
     Route::get('/admin/newletter_download',[NewsletterController::class, 'export'])->name('newletter.export');
    });


