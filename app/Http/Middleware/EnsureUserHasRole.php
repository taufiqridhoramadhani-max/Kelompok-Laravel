<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnsureUserHasRole
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next, $roles = null)
    {
        if (! Auth::check()) {
            return redirect()->route('login');
        }

        $user = Auth::user();

        if (is_null($roles)) {
            return $next($request);
        }

        // support both "admin|staff" and "admin,staff"
        $allowed = array_map('trim', preg_split('/[|,]/', $roles));

        // If Spatie is installed and user uses HasRoles trait, prefer its check
        if (method_exists($user, 'hasAnyRole')) {
            if ($user->hasAnyRole($allowed)) {
                return $next($request);
            }
        } else {
            // fallback: check simple 'role' attribute on user model
            if (isset($user->role) && in_array($user->role, $allowed)) {
                return $next($request);
            }
        }

        abort(403);
    }
}
