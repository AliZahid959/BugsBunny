<?php

namespace App\Http\Middleware;

use App\Models\AboutPage;
use App\Models\ContactPage;
use App\Models\SiteContent;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class FrontPageMiddleware
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
        $setting = SiteContent::first();
        $contact = ContactPage::first();

        // Pass the variables to the views
        View::share(['setting' => $setting,  'contact' => $contact]);

        // Continue with the request
        return $next($request);

    }
}
