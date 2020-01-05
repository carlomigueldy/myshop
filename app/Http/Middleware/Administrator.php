<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class Administrator
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
        $role = auth()->user()->role->name;
        if ($role == 'Administrator') {
            return $next($request);
        } else {
            return response()->json([
                'message' => 'You are not authorized.',
            ]);
        }
    }
}
