<?php

use App\Http\Controllers\Admin\RoleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/permissions',[RoleController::class,'index']);
Route::post('/permissions/store',[RoleController::class,'storeRole']);
// Route::group(['middleware' => ['can:publish articles']], function () {
// });
