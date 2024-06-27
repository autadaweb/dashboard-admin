<?php


namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
 

public function handle($request, Closure $next, ...$roles)
{
    $user = Auth::user();

    if (!$user || !$this->checkRole($user, $roles)) {
        
        return redirect('/login');// Tindakan jika tidak memiliki akses
    }

    // Tambahkan pengecekan apakah pengguna sedang terautentikasi
    if (!Auth::check()) {
        return redirect('/login'); // Arahkan ke halaman login jika sesi berakhir
    }

    return $next($request);
}


    private function checkRole($user, $roles)
    {
        foreach ($roles as $role) {
            if ($user->role == $role) {
                return true;
            }
        }

        return false;
    }
}
