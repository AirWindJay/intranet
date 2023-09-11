<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array
     */
    protected $middleware = [
        \App\Http\Middleware\CheckForMaintenanceMode::class,
        \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
        \App\Http\Middleware\TrimStrings::class,
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
        \App\Http\Middleware\TrustProxies::class,
    ];

    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
            \App\Http\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            // \Illuminate\Session\Middleware\AuthenticateSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \App\Http\Middleware\VerifyCsrfToken::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],

        'api' => [
            'throttle:60,1',
            'bindings',
        ],
    ];

    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'auth' => \App\Http\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'bindings' => \Illuminate\Routing\Middleware\SubstituteBindings::class,
        'cache.headers' => \Illuminate\Http\Middleware\SetCacheHeaders::class,
        'can' => \Illuminate\Auth\Middleware\Authorize::class,
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
        'signed' => \Illuminate\Routing\Middleware\ValidateSignature::class,
        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
        'verified' => \Illuminate\Auth\Middleware\EnsureEmailIsVerified::class,
        'webmaster' => \App\Http\Middleware\webmaster::class,
        'adminccru' => \App\Http\Middleware\adminccru::class,
        'mis' => \App\Http\Middleware\mis::class,
        'mis_admin' => \App\Http\Middleware\mis_admin::class,
        'nursing' => \App\Http\Middleware\nursing::class,
        'nurseschedule' => \App\Http\Middleware\nurseschedule::class,
        'adminannouncements' => \App\Http\Middleware\adminannouncements::class,
        'himoadmin' => \App\Http\Middleware\himoadmin::class,
        'nurselevel1' => \App\Http\Middleware\nurselevel1::class,
        'nurselevel2' => \App\Http\Middleware\nurselevel2::class,
        'pharmacyadmin' => \App\Http\Middleware\pharmacyadmin::class,
        'pharmacy' => \App\Http\Middleware\pharmacy::class,
        'mmo' => \App\Http\Middleware\mmo::class,
        'medrecord' => \App\Http\Middleware\medrecord::class,
        'billing' => \App\Http\Middleware\billing::class,
        'forsect' => \App\Http\Middleware\forsect::class,
        'foriso' => \App\Http\Middleware\foriso::class,
        'ForDocsuanding' => \App\Http\Middleware\ForDocsuanding::class,
        'watchid' => \App\Http\Middleware\watchid::class,
        'GL' => \App\Http\Middleware\GL::class,
        'medicalsupplies' => \App\Http\Middleware\medicalsupplies::class,
    ];

    /**
     * The priority-sorted list of middleware.
     *
     * This forces the listed middleware to always be in the given order.
     *
     * @var array
     */
    protected $middlewarePriority = [
        \Illuminate\Session\Middleware\StartSession::class,
        \Illuminate\View\Middleware\ShareErrorsFromSession::class,
        \App\Http\Middleware\Authenticate::class,
        \Illuminate\Session\Middleware\AuthenticateSession::class,
        \Illuminate\Routing\Middleware\SubstituteBindings::class,
        \Illuminate\Auth\Middleware\Authorize::class,
    ];
}
