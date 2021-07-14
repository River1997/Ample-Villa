<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class UserRoleCheck
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
        if (Auth::user()->role == 'user') {
            // ↓ 接續完成原本的動作
        return $next($request);
    }else{
        // 不是的話就回首頁
        return redirect('/rent');
    }
    }
}
