<?php

use App\Http\Controllers\mainController;
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


//LOGIN, SIGNUP, LOGOUT
Route::get('/login',[mainController::class, 'loginpage'])->name('login')->middleware('guest');
Route::post('/login',[mainController::class, 'login']);
Route::get('logout', [mainController::class, 'logout']);
Route::post('signup',[mainController::class, 'store']);
Route::get('signup',[mainController::class, 'signup_page'])->middleware('guest');

//HOME, HOME USER, HOME ADMIN, TEMPORARY PAGE
Route::get('home_user',[mainController::class, 'home_user']);
Route::get('home_admin',[mainController::class, 'home_admin'])->name('home_admin')->middleware('checkrole');
Route::get('/', function () {
    return view('home');
});
Route::get('temporary_page',[mainController::class, 'temporary_page']);

//VALIDASI UNTUK MEMPERLIHATKAN EBOOK
Route::get('/home_user',[mainController::class,'show_ebook']);
Route::get('/home_admin',[mainController::class,'show_ebook']);

//EBOOK DETAIL
Route::get('/ebook_detail/{id}',[mainController::class, 'ebook_detail']);

//PROFILE
Route::get('/profile/{id}',[mainController::class, 'old_data']);
Route::post('/profile',[mainController::class, 'update_profile']);

//RENT, CART, DELETE RENT, SUBMIT
Route::get('/cart',[mainController::class,'cart']);
Route::get('/cart/{id}',[mainController::class,'rent_book']);
Route::delete('cart/{id}',[mainController::class, 'delete_rent']);
Route::get('submit',[mainController::class,'submit']);

//ACC MAINTAIN & UPDATE ROLE
Route::get('/acc_maintain',[mainController::class,'acc_mt']);
Route::delete('/acc_maintain/{id}',[mainController::class, 'delete_user']);
Route::get('/update_role/{id}',[mainController::class,'update_role']);
Route::post('/update_role',[mainController::class, 'update_data']);




