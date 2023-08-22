<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\WebController\HomeController as WebControllerHomeController;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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



Auth::routes();

Route::view('admin-login','auth.login')->name('admin-login');
// These are Routes for Admin pages

Route::middleware(['auth'])->group(function () {

    Route::middleware(['admin'])->group(function () {

    Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');



    Route::get('/dashboard', function() {
        return view('admin.dashboard');
    })->name('dashboard');
    Route::get('/web', function() {
        return view('admin.web');
    })->name('web');
    Route::get('/admin-profile', function() {
        return view('admin.profile');
    })->name('profile');

    Route::get('/all-user',[HomeController::class,'all_users'])->name('all_users');
    Route::view('add_user','admin.user.add_user');

    Route::post('/add_user',[HomeController::class,'add_new_user'])->name('add_user');
    Route::get('/delete-user/{id}',[HomeController::class,'delete_user'])->name('delete-user');
    Route::get('/update-user/{id}',[HomeController::class,'update_user'])->name('update-user');
    Route::get('/view-user/{id}',[HomeController::class,'view_user'])->name('view-user');

    // View Users

    // Products

    // Route::get('all_products',[ProductController::class,'all_products'])->name('all_products');

    Route::get('/all_messages',[HomeController::class,'all_messages'])->name('all_messages');
    Route::get('/view-post/{id}',[HomeController::class,'view_post'])->name('view-post');
    Route::get('/update_view/{id}',[HomeController::class,'update_view'])->name('update_view');
    Route::get('/delete-post/{id}',[HomeController::class,'delete_post'])->name('delete_post');
    Route::post('update_view/update_post/{id}',[HomeController::class,'update_post'])->name('update_post');
    // Route::get('/add_product',[ProductController::class,'view_add_form'])->name('add_product_view');
    // Route::post('/add_product',[ProductController::class,'add_new_product'])->name('add_product_submit');
    // // This is for update view route
//


    // Products End

    Route::get('logout',[HomeController::class,'logout_admin'])->name('admin_logout');
});
});
//

// These are Routes for web pages
Route::get('/',[WebController::class,'HomePage'])->name('/');
Route::middleware(['user_auth'])->group(function () {



// Route::view('/shopping-cart','website\cart')->name('cart');
// Route::get('/view/product/{id}',[WebControllerHomeController::class,'product_detail'])->name('details');
// Route::view('/checkout','website\checkout')->name('checkout');
//
});

Route::view('signin','Website.signin_page')->name('signin');
Route::view('forum','Website.looking_for');
Route::view('message','Website.message')->name('message');
Route::get('browse_posts',[WebController::class,'posts'])->name('posts');
Route::post('signup_user',[WebController::class,'signup_user'])->name('signup_user');
Route::get('view_post/{id}',[WebController::class,'single_post'])->name('posts');
Route::middleware('auth_check')->group(function () {

    Route::get('profile',[WebController::class,'profile'])->name('profile');
    Route::get('edit/profile',[WebController::class,'edit_profile'])->name('edit-profile');
Route::post('update/profile',[WebController::class,'update_profile'])->name('update-profile');
Route::view('welcome','Website.welcome')->name('welcome');

Route::view('available','Website.available_form');
Route::view('looking-for','Website.looking_for');
Route::view('hired-gun','Website.hired_gun');

Route::get('user-logout',[WebController::class,'user_logout'])->name('user-logout');
Route::post('message_send',[WebController::class,'message_send'])->name('message_send');
});




Route::view('create_post','Website.create-posts')->name('create-post');
Route::view('faq','Website.faq')->name('faq');
Route::view('skill-level','Website.skill-level')->name('skill-level');
Route::post('form_submission',[WebController::class, 'form_submission'])->name('form_submission');



Route::post('user-login',[WebController::class, 'user_login'])->name('user_login');

