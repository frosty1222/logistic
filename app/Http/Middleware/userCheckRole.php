<?php

namespace App\Http\Middleware;

use App\Models\role;
use App\Models\UserHasRole;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class userCheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();
        
        if (!$user) {
            abort(403, 'You do not have permission to access this page.');
        }
        
        $userId = $user->id;
        
        $userHasRoles = UserHasRole::where('user_id', $userId)
            ->whereIn('role_id', ['ADMIN', 'USER'])
            ->exists();
        
        if ($userHasRoles) {
            return $next($request);
        }
        
        abort(403, 'You do not have permission to access this page.');
    }    
}
