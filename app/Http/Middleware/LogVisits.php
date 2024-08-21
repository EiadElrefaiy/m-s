<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Visit;
use Illuminate\Http\Request;
use Carbon\Carbon;

class LogVisits
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
        // Check if a visit from the same IP address exists for the current day
        $existingVisit = Visit::where('ip_address', $request->ip())
            ->whereDate('created_at', Carbon::today())
            ->first();

        // If no such visit exists, log the visit
        if (!$existingVisit) {
            Visit::create([
                'ip_address' => $request->ip(),
                'url' => $request->fullUrl(),
            ]);
        }

        return $next($request);
    }
}
