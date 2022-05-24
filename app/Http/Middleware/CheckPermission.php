<?php

namespace App\Http\Middleware;

use App\Http\Helpers\Traits\ApiResponseTrait;
use Closure;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Request;

class CheckPermission
{
    use ApiResponseTrait;

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $userType)
    {
        if ($this->check_access($request, $userType) !== true) {
            return $this->abort();
        }

        return $next($request);
    }

    private function check_access($request, $userType)
    {
        if (! ($user = $request->user()) || strtolower($user->type) !== $userType) {
            return false;
        }

        return true;
    }

    private function abort($message = 'Access Forbidden')
    {
        return $this->respondForbidden($message);
    }
}
