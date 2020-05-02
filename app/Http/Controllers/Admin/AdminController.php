<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

/**
 * 后台管理员控制器
 */
class AdminController extends Controller 
{
    //进入后台管理员首页面
    public function index(){
        echo '后台管理员首页';
    }   

    public function list(){
        echo '管理员列表';
    }
}