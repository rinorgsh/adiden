<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="theme-color" content="#1D3559">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
        <meta name="format-detection" content="telephone=no">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="/favicon.ico">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="icon" type="image/png" sizes="192x192" href="/android-chrome-192x192.png">
        <link rel="icon" type="image/png" sizes="512x512" href="/android-chrome-512x512.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Preconnect Unsplash pour LCP hero -->
        <link rel="preconnect" href="https://images.unsplash.com" crossorigin>

        <style>
            html, body { overflow-x: hidden; max-width: 100vw; }
            /* iOS safe areas */
            body { padding-bottom: env(safe-area-inset-bottom); }
            /* Empêche le zoom iOS au focus sur input (font-size mini 16px) */
            @media (max-width: 640px) {
                input, select, textarea { font-size: 16px !important; }
            }
        </style>

        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>
