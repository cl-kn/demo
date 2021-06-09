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

// Route::get('/index',[boot_template::class, 'index']);
// Route::get('/flat_ui/{name}','ComponentsController@parts');
// Route::get('/', function () {
//     return view('contact');
// });

// Route::get('/posts/{id}', [PostController::class,'show']);

//210604 URL2804 ルーティング設定
// Route::group(['prefix' => 'student'], function () {
//     Route::get('list', 'App\Http\Controllers\StudentController@getIndex'); //一覧
//     Route::get('new', 'App\Http\Controllers\StudentController@new_index'); //入力
//     Route::patch('new', 'App\Http\Controllers\StudentController@new_confirm'); //確認
//     Route::post('new', 'App\Http\Controllers\StudentController@new_finish'); //完了

//     Route::get('edit/{id}/', 'App\Http\Controllers\StudentController@edit_index'); //編集
//     Route::patch('edit/{id}/', 'App\Http\Controllers\StudentController@edit_confirm'); //確認
//     Route::post('edit/{id}/', 'App\Http\Controllers\StudentController@edit_finish'); //完了
// });

Route::get('student/list', 'App\Http\Controllers\StudentController@getIndex');

//0607 追記 「新規登録」
Route::get('student/list', 'App\Http\Controllers\StudentController@getIndex')->name('list'); //一覧
Route::get('student/new_index', 'App\Http\Controllers\StudentController@new_index'); //入力
Route::get('student/new_confirm', 'App\Http\Controllers\StudentController@new_confirm'); //確認
Route::get('student/new_finish', 'App\Http\Controllers\StudentController@new_finish'); //完了

//0607 追記 「確認（編集）」
Route::get('student/edit_index/{id}', 'App\Http\Controllers\StudentController@edit_index')->name('edit_index'); //編集
Route::get('student/edit_confirm/{id}', 'App\Http\Controllers\StudentController@edit_confirm')->name('edit_confirm'); //確認
Route::get('student/edit_finish/{id}', 'App\Http\Controllers\StudentController@edit_finish')->name('edit_finish'); //完了

//0609 追記 「削除」
Route::post('student/delete/{id}/', 'App\Http\Controllers\StudentController@us_delete');

Route::resource('tasks', 'App\Http\Controllers\TasksController');
// Route::get('tasks/show', 'App\Http\Controllers\TasksController@show');
// Route::get('tasks/index', 'App\Http\Controllers\TasksController@index');
// Route::get('tasks/create', 'App\Http\Controllers\TasksController@create');
// Route::get('tasks/edit', 'App\Http\Controllers\TasksController@edit');
// Route::put('tasks/update', 'App\Http\Controllers\TasksController@update');
// Route::delete('tasks/destroy', 'App\Http\Controllers\TasksController@destroy');
