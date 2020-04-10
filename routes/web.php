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


//いけてる？

//TOP画面
Route::get('/', 'HomeController@index')->name('home.index');


//勤怠画面
Route::get('/','AttendanceController@index')->name('attendance.index');//勤怠打刻画面

//日報画面
Route::get('/','ReportController@create')->name('report.create');//日報での投稿画面
Route::get('report/index','ReportController@index')->name('report.index');//日報入力での投稿画面
Route::post('report/create','ReportController@store')->name('report.create');//日報の保存処理
Route::get('report/{id}/edit', 'ReportController@edit')->name('report.edit'); // 編集画面
Route::put('report/{id}/update', 'ReportController@update')->name('report.update'); //更新処理

//月次画面
Route::get('/','MonthlyreportController@create')->name('monthlyreport.create');//月報入力画面
Route::get('/','MonthlyreportController@index')->name('monthlyreport.index');//月報確認画面・先月と今月分


// タスク画面
Route::get('/', 'TaskController@index')->name('task.index'); //task確認画面追加
Route::get('task/create', 'TaskController@create')->name('task.create'); //task投稿画面追加
Route::post('task/create', 'TaskController@store')->name('task.create'); //task保存処理追加
Route::delete('task/{id}/delete', 'TaskController@destroy')->name('task.destroy'); //task削除追加
Route::get('task/{id}/edit', 'TaskController@edit')->name('task.edit'); // 編集画面
Route::put('task/{id}/update', 'TaskController@update')->name('task.update'); //更新処理
