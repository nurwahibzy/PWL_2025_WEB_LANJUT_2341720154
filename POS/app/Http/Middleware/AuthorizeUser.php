<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthorizeUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role = ''): Response
    {
        $user = $request->user(); // Ambil user yang sedang login

        if ($user->hasRole($role)) { // cek apakah user memiliki role yang sesuai
            return $next($request);
        }

        abort(403, 'Forbidden. Kamu tidak punya akses ke halaman ini.'); // Jika tidak memiliki role yang sesuai, tampilkan pesan error
    }
}
