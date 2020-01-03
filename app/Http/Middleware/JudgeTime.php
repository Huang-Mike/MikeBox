<?php

namespace App\Http\Middleware;

use Closure;

class JudgeTime
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        date_default_timezone_set("Asia/Taipei");     //格林威治時區，台北時區
        $t = date("i");                               //取分，t等於時間的"分"
        if ($t%2==0) {                                //如果t是偶數時執行，%2 為 除二取餘數  EX：10/2=5 餘0，為偶數   
            abort(403, 'Access denied');              //權限不足
        }else{                                        //如果不是時執行，%2 為 除二取餘數  EX：11/2=5 餘1，為基數   
            return $next($request);                   //直接回傳值
        }
    }
}
