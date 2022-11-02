<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Guest
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $guest = \App\Models\Guest::where('token', $request->token)->first();
        if (!$guest) {
            return redirect('guest/register')->with('error', 'Pengunjung harus daftar terlebih dahulu');
        }
        return $next($request);
    }
}
