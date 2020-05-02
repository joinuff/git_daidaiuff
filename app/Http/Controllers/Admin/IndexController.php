<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

/**
 * 后台首页控制器
 */
class IndexController extends Controller 
{
    //进入后台首页面
    public function index(){
        echo '后台首页';
    }   
}