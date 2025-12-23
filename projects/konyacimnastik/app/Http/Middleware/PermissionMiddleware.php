<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PermissionMiddleware
{
    public function handle(Request $request, Closure $next, string $permission)
    {
        if (! admin_can($permission)) {
            abort(403, 'Bu işlem için yetkiniz yok.');
        }

        return $next($request);
    }
}
