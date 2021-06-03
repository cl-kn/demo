<?php

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

//練習用
Route::get('/contact', function() {
    return view('contact');
});

Route::get('/test', function() {
    return view('test');
});

//CRUD STEP1
// Route::get('/index', function() {
//     return view('boot_template.index');
// });

Route::get('/index', function() {
    return view('boot_template.index');
});

// Route::get('/index','PostController@getIndex');

Route::get('student/list','App\Http\Controllers\StudentController@getIndex');



// Route::get('/index',[boot_template::class, 'index']);
// Route::get('/flat_ui/{name}','ComponentsController@parts');




// Route::get('/', function () {
//     return view('contact');
// });

// Route::get('/posts/{id}', [PostController::class,'show']);
