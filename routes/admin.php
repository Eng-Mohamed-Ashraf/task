<?php

use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\Backend\{
     Dashboard,
     UserController,
     TaskController
 };
//Route::get('show_invoice/{id}','Backend\InvoiceController@show_invoice')->name('show_invoice');
Route::group(['middleware'=>'guest:admin','namespace'=>'Backend'],function() {
    Route::get('/login',[UserController::class,'login'])->name('admin.login');
    Route::post('/login',[UserController::class,'auth_admin'])->name('admin.auth');




});
Route::get('/refresh-csrf', function(){
    return csrf_token();
})->name("refresh_csrf");

Route::group(['middleware'=>'auth:admin'],function() {
    Route::get('/logout',[UserController::class,'logout'])->name('admin.logout');
    Route::get('/',[Dashboard::class,"dashboard"])->name('dashboard');
     Route::resource("tasks",TaskController::class);
     Route::resource("users",UserController::class);










});
