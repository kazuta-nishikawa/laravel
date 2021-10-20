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


Route::get('/member/index', 'MemberController@index')->name('member.index');

// 登録フォーム
Route::get('/signin', 'MemberController@create')->name('signin.create');
Route::post('/signin/confirm', 'MemberController@confirm')->name('signin.confirm');
Route::post('/signin/complete', 'MemberController@complete')->name('signin.complete');
