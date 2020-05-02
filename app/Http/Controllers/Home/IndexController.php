<?php
namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

/**
 * 首页控制器
 */
class IndexController extends Controller 
{
    /**
     * 进入首页
     */
    public function index(Request $request)
    {
        $request->session()->put('session_name','default');
        return view('home.index.index');
    }


    public function getSession(Request $request)
    {
        echo $request->session()->get('session_name');

        $data = [
            'code'=>200,
            'msg'=>'success',
            'data'=>[
                'name'=>'dailihong',
                'age'=>18
            ]
        ];
        return response()->json($data);
    }



    /**
     * 活动宣传页面
     */
    public function activityBefore()
    {
        echo '活动宣传页面';
    }

    /**
     * 活动1
     */
    public function activity1()
    {
        echo '活动一';
    }

    /**
     * 活动2
     */
    public function activity2()
    {
        echo '活动一';
    }

    /**
     * 活动结束页面
     */
    public function activityEnd()
    {
        echo '活动结束。。。';
    }
}