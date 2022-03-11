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
use App\Http\Middleware\helloMiddleware;

Route::get('/', function () {
    return view('welcome');
});
Route::get('hello','HelloController@index');
Route::post('hello','HelloController@post');

/* 実習2 */
Route::get('jissyu2', 'JissyuController@index');
/* 実習3 */
Route::get('jissyu3', 'Jissyu3_1Controller@index');
Route::post('jissyu3', 'Jissyu3_1Controller@post');
/* 実習3_2 */
Route::get('jissyu3_2', 'Jissyu3_2Controller@index');
Route::post('jissyu3_2', 'Jissyu3_2Controller@post');
/* 実習3_3 */
Route::get('jissyu5', 'Jissyu3_3Controller@index');
/* 実習4_1 */
Route::get('jissyu6', 'Jissyu4_1Controller@index');
Route::post('jissyu6', 'Jissyu4_1Controller@post');
