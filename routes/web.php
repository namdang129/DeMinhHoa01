<?php

use App\Http\Controllers\StudentController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/student',[StudentController::class,'get_all_student']);
Route::get('/student/create',[StudentController::class,'go_create']);
Route::post('/student/create',[StudentController::class,'create']);

Route::get('/student/edit/{id}',[StudentController::class,'get_student_by_id']) ;
Route::post('/student/edit/{id}',[StudentController::class,'edit']);
