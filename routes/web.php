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
Route::get('/',[UserController::class,'index']);

Route::get('add_user',function(){
    return view('add');
});

Route::get('edit/{id}', [UserController::class, 'edit']);

Route::post('add',[UserController::class,'addUserMobile']);

Route::put('update/{id}',[UserController::class,'update']);

Route::delete('delete/{id}',[UserController::class,'delete']);