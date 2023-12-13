<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        return Redirect::route('login')->withErrors(['alert' => 'Você precisa estar logado como administrador para acessar essa página']);
asdgsdfgasd
fgasdgasd
        // Verifique aqui se o usuário é um administrador e faça o redirecionamento caso necessário

        return $next($request);
    }
}
