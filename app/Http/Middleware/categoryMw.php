<?php

namespace App\Http\Middleware;

use App\Models\Category;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class categoryMw
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $categories = Category::where('parent_id', 1)->orWhere('parent_id', 2)->orWhere('parent_id', 3)->orWhereNull('parent_id')->get();
        view()->share(['categories' => $categories]);

        return $next($request);
    }
}
