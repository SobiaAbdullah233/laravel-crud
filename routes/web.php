<?php

use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/creatform',function(){
    // return view('creatform');
// });
// Route::get('/table',function(){
//     return view('index_all');
// });

Route::get('createform',[RegistrationController::class,'create']);
Route::POST('createform',[RegistrationController::class,'store'])->name('create_form');
Route::get('index',[RegistrationController::class,'index']);
Route::get('editform/{id}',[RegistrationController::class,'edit']);
Route::put('editform/{id}',[RegistrationController::class,'update']);

// url('editform/123')
// url('editform/123')


