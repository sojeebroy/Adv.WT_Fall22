<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\crudController;


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
Route::get('home', function () {
    return view('home');
});

Route::get('profile', function () {
    return view('profile');
});
Route::get('signup', function () {
    return view('signup');
});

//Route::get('signup',[crudController::class,'signup']);

//Route::post('submit',[crudController::class,'submit']);
