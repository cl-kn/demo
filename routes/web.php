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
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/test', function () {
    return view('test');
});

//CRUD STEP1
// Route::get('/index', function() {
//     return view('boot_template.index');
// });

Route::get('/index', function () {
    return view('boot_template.index');
});

// Route::get('/index','PostController@getIndex');

Route::get('student/list', 'App\Http\Controllers\StudentController@getIndex');

//0606追加
// Route::group(['prefix' => 'student'], function () {
//     Route::get('student/list', 'App\Http\Controllers\StudentController@getIndex'); //一覧
//     Route::get('student/new_index', 'App\Http\Controllers\StudentController@new_index'); //入力
//     Route::patch('student/new_confirm', 'App\Http\Controllers\StudentController@new_confirm'); //確認
//     Route::post('student/new_finish', 'App\Http\Controllers\StudentController@new_finish'); //完了
// });

Route::get('student/list', 'App\Http\Controllers\StudentController@getIndex'); //一覧
Route::get('student/new_index', 'App\Http\Controllers\StudentController@new_index'); //入力
Route::get('student/new_confirm', 'App\Http\Controllers\StudentController@new_confirm'); //確認
Route::post('student/new_finish', 'App\Http\Controllers\StudentController@new_finish'); //完了

//３）ルーティングの設定 より
//https://laraweb.net/knowledge/2100/
# 入力画面
// Route::get('student/list', [
//     'uses' => 'CheckStudentRequest@getIndex',
//     'as' => 'student.new_index'
// ]);

# 確認画面
// Route::post('student/new_confirm', [
//     'uses' => 'CheckStudentRequest@confirm',
//     'as' => 'student.new_confirm'
// ]);

Route::resource('tasks', 'App\Http\Controllers\TasksController');
// Route::get('tasks/show', 'App\Http\Controllers\TasksController@show');
// Route::get('tasks/index', 'App\Http\Controllers\TasksController@index');
// Route::get('tasks/create', 'App\Http\Controllers\TasksController@create');
// Route::get('tasks/edit', 'App\Http\Controllers\TasksController@edit');
// Route::put('tasks/update', 'App\Http\Controllers\TasksController@update');
// Route::delete('tasks/destroy', 'App\Http\Controllers\TasksController@destroy');


// Route::get('/index',[boot_template::class, 'index']);
// Route::get('/flat_ui/{name}','ComponentsController@parts');




// Route::get('/', function () {
//     return view('contact');
// });

// Route::get('/posts/{id}', [PostController::class,'show']);
