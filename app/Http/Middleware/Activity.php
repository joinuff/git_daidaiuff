<?php
namespace App\Http\Middleware;

use Closure;

class Activity
{
    public function handle($request,Closure $next)
    {
        //判断如果小于开始时间，则跳转到宣传页
        if (time() < strtotime('2020-04-23')) {
            return redirect('activityBefore');
        } elseif (time() > strtotime('2020-04-23') && time() < strtotime('2020-04-30')) {
            return $next($request);
        } else {
            return redirect('activityEnd');
        }
    }
}