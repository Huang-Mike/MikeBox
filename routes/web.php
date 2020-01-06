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

Route::get('/', function () {       /*閉函式*/ 
    return view('welcome');
});

Route::get('/main/{aaa}/bbb/{ccc?}','IndexController@IdidIt');
Route::get('/testJudgeTime','IndexController@JudgeTime')->middleware('judgeTimeMiddleWare');
Route::get('/Decimal/{aaa}/{bbb}','IndexController@practice');
