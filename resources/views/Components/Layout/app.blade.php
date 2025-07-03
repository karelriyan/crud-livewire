<!DOCTYPE html> 
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> 
 
<head> 
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
 
    <title>@yield('title') - {{ config('app.name', 'Laravel') }}</title> 
    @livewireStyles 
    <!-- CSRF Token --> 
    <meta name="csrf-token" content="{{ csrf_token() }}"> 
     
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"> 
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link 
href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,2
 00..1000&display=swap" rel="stylesheet"> 
    <style> 
        body { 
            background-color: lightgray; 
            font-family: 'Nunito Sans', sans-serif; 
        } 
 
    </style> 
</head> 
 
<body> 
     <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark"> 
        <div class="container-fluid"> 
            <a href="{{ route('awal') }}" wire:navigate class="navbar-brand">{{ config('app.name', 'Laravel') 
}}</a> 
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs
target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria
label="Toggle navigation"> 
                <span class="navbar-toggler-icon"></span> 
            </button> 
            <div class="collapse navbar-collapse" id="navbarSupportedContent"> 
                <ul class="navbar-nav me-auto mb-2 mb-lg-0"> 
                    <!-- Tambahkan item menu lain di sini --> 
                    <li class="nav-item"> 
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}" 
wire:navigate>Home</a> 
                    </li> 
                  
                </ul> 
 
            </div> 
        </div> 
    </nav> 
 
    {{ $slot }} 
 
 
    @livewireScripts 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script> 
    @yield('javascripts') 
</body> 
 
</html> 
