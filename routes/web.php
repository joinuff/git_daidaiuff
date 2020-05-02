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

/**
 * ---------------------------------------    前台路由     ------------------------------------
 */
Route::get('/', 'Home\IndexController@index');
Route::get('getSession','Home\IndexController@getSession');

Route::get('login',function(){
    echo session('session_name');
    return 'login page';
});

//注册活动页面中间件
//活动开始页面路由
Route::any('activityBefore','Home\IndexController@activityBefore');
//添加活动过滤中间件
Route::group(['middleware'=>['activity']],function() {
    Route::any('activity1','Home\IndexController@activity1');
    Route::any('activity2','Home\IndexController@activity2');
});

//活动结束页面路由
Route::any('activityEnd','Home\IndexController@activityEnd');



/**
 * ---------------------------------------  后台路由  -----------------------------------------
 * 
 */

 Route::group(['namespace'=>'Admin','prefix'=>'admin','middleware'=>['admin.login']],function(){
    Route::get('/','IndexController@index');

    //后台管理员路由
    Route::get('admin/index','AdminController@index');

    //后台会员管理路由
    Route::get('user/index','UserController@index');
 });
 