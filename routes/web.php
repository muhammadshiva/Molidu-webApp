<?php

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

use App\Http\Controllers\HomeController;
// use Illuminate\Routing\Route;

// Route::get('/', function () {
//     return view('index');
// });


Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/classification', function () {
    return view('classification');
});

// Auth::routes();

Route::get('/', [HomeController::class, 'index']);
