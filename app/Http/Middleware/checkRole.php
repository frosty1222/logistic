<?php

namespace App\Http\Middleware;

use App\Models\UserHasRole;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class checkRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        $user = $request->user();
        if ($user == null) {
            abort(403, 'You do not have permission to access this page.');
        }
    
        $userId = $user->id;
        // Check if the user has any of the specified roles
        $userHasRoles = UserHasRole::where('user_id', $userId)
            ->exists();
        if ($userHasRoles) {
            return $next($request);
        }
    
        abort(403, 'You do not have permission to access this page.');
    }
}
