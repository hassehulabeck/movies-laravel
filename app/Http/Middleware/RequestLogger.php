<?php

namespace App\Http\Middleware;

use Closure;
use App\LogEntry;

class RequestLogger
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        return $next($request);
    }

    public function terminate($request, $response)
    {
        $newEntry = new LogEntry();
        $newEntry->path = $request->path();
        $newEntry->status = $response->status();
        $newEntry->method = $request->method();
        $newEntry->created_at = now();
        $newEntry->updated_at = now();
        $newEntry->save();
    }
}
