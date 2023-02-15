<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyPlaceController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Post2Controller;



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

Route::get('/my_page', function () {
    return 'this is my page';
});

Route::get('/yaro', function() {
    return 'Yaroslav my teacher';
});

Route::get('/danil', function() {
    return 'Danil student';
});

Route::get('/kyiv', function() {
    return 'Kyiv is my city where i live';
});

Route::get('/ukraine', function() {
    return 'Ukraine';
});

Route::get('/2023', function() {
    return '2023';
});

// dd(MyPlaceController::class);
Route::get('/iphone', [MyPlaceController::class, 'index']);

// dd(MyPlaceController::class);
Route::get('/post', [PostController::class, 'index']);

// dd(MyPlaceController::class);
Route::get('/post2', [Post2Controller::class, 'index']);




