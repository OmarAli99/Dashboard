<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // تسجيل اختصارات الـ Middleware الخاصة بـ Mcamara
        $middleware->alias([
            'localize'                => \Mcamara\LaravelLocalization\Middleware\LaravelLocalizationRoutes::class,
            'localizationRedirect'    => \Mcamara\LaravelLocalization\Middleware\LaravelLocalizationRedirectFilter::class,
            'localeSessionRedirect'   => \Mcamara\LaravelLocalization\Middleware\LocaleSessionRedirect::class,
            'localeCookieRedirect'    => \Mcamara\LaravelLocalization\Middleware\LocaleCookieRedirect::class,
            'localeViewPath'          => \Mcamara\LaravelLocalization\Middleware\LaravelLocalizationViewPath::class,
        ]);
        $middleware->redirectTo(
        guests: '/admin/login', // هنا تضع المسار الذي تريده للزوار
        users: '/admin'      // المسار الذي يذهب إليه المستخدم إذا كان مسجلاً بالفعل وحاول دخول صفحة تسجيل الدخول
    );
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();