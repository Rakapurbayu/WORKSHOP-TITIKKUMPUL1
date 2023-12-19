<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AuthenticateReservation
{
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            return $next($request);
        }

        return redirect(route('login'))->withErrors('error', 'Anda harus login untuk melakukan reservasi.');
    }
}

// class CheckUID
// {
//     public function handle($request, Closure $next)
//     {
//         // Memeriksa apakah pengguna sudah login
//         if (Auth::check()) {
//             $user = Auth::user();

//             // Memeriksa apakah UID pengguna cocok dengan UID yang diizinkan
//             if ($user->UID === 1) {
//                 return $next($request);
//             }
//         }

//         // Jika UID tidak sesuai, mungkin akan diarahkan ke halaman lain atau pesan kesalahan
//         return redirect('/jokopi');
//     }
// }