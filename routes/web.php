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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('create.home');
});


// Route::get('/check', function () {
//     return 'อายุเกิน 200 จ้า';
// })->middleware(\App\Http\Middleware\CheckAge::class);

// Route::get('/home', function () {
//     return 'ยินดีต้อนรับสู่หน้าแรก';
// });

// Route::get('user/{name}', 'UserController@index');

Route::get('/show', 'UserController@show');
