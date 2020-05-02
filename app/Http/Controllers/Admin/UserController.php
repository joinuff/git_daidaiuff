<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

/**
 * 后台会员控制器
 */
class UserController extends Controller 
{
    //进入后台会员管理首页面
    public function index(){
        echo '后台会员管理列表';
    }   
}