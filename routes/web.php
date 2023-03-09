<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\crudController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['middleware'=>'web'],function(){

    Route::view('/login','login');
    Route::post('/login', [crudController::class, 'login']);

    Route::get('/',[crudController::class,'index']);
    Route::get('/list',[crudController::class,'list']);
    Route::view('/add', 'add');
    Route::post('/addsubmit',[crudController::class,'add']);
    Route::get('/delete/{id}', [crudController::class, 'delete']);
    Route::get('/edit/{id}', [crudController::class, 'edit']);
    Route::post('/edit', [crudController::class, 'update']);
    Route::view('/register','register');
    Route::post('/register', [crudController::class, 'register']);
});
