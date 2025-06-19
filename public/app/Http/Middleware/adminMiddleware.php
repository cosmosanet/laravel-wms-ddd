<?php

namespace App\Http\Middleware;

use App\Domain\Interface\Repository\User\UserRepositoryInterface;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class adminMiddleware
{
    public function __construct(
        private UserRepositoryInterface $repository
    ){}
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if($this->repository->getById(Auth::id())->role->id === config('roles.adminRoleId')) {
            return $next($request);
        };
        return redirect(config('app.url'));
    }
}
