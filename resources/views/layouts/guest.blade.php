<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased overflow-hidden">
        <!-- Animated Background -->
        <div class="fixed inset-0 z-0">
            <div class="absolute inset-0 bg-gradient-to-br from-indigo-900 via-purple-900 to-pink-900"></div>
            <div class="absolute inset-0 bg-gradient-to-tr from-blue-500/20 via-purple-500/20 to-pink-500/20"></div>
            <!-- Floating animated shapes -->
            <div class="absolute top-10 left-10 w-64 h-64 bg-blue-500/30 rounded-full mix-blend-multiply filter blur-xl animate-float"></div>
            <div class="absolute top-32 right-16 w-56 h-56 bg-purple-500/30 rounded-full mix-blend-multiply filter blur-xl animate-float-delayed"></div>
            <div class="absolute bottom-20 left-20 w-48 h-48 bg-pink-500/30 rounded-full mix-blend-multiply filter blur-xl animate-float-slow"></div>
            <div class="absolute bottom-32 right-32 w-40 h-40 bg-cyan-500/30 rounded-full mix-blend-multiply filter blur-xl animate-pulse"></div>
        </div>

        <div class="relative z-10 min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 px-6">
            <!-- Back to home link -->
            <div class="absolute top-6 left-6 z-30">
                <a href="/" class="text-white/80 hover:text-white transition-colors duration-300 flex items-center space-x-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                    </svg>
                    <span class="font-medium">Volver al inicio</span>
                </a>
            </div>

            <!-- Main Card -->
            <div class="w-full sm:max-w-md">
                <!-- Logo Section -->
                <div class="text-center mb-8">
                    <div class="inline-flex items-center justify-center">
                        <div class="relative">
                            <div class="absolute inset-0 bg-gradient-to-r from-blue-500 to-purple-500 rounded-2xl blur-lg opacity-60 animate-pulse"></div>
                            <div class="relative bg-gradient-to-br from-blue-600 via-purple-600 to-pink-600 p-4 rounded-2xl shadow-2xl">
                                <svg class="w-12 h-12 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M4 4h16v2H4V4zm0 4h16v2H4V8zm0 4h16v2H4v-2zm0 4h10v2H4v-2z"/>
                                    <path d="M20 10v8a2 2 0 01-2 2H6a2 2 0 01-2-2v-8h16z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <h1 class="mt-6 text-3xl font-bold text-white">
                        <span class="bg-gradient-to-r from-blue-400 to-purple-400 bg-clip-text text-transparent">
                            Almacén
                        </span>
                    </h1>
                    <p class="mt-2 text-white/70 font-medium">Sistema de Gestión</p>
                </div>

                <!-- Form Card -->
                <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-3xl shadow-2xl p-8">
                    <div class="bg-gradient-to-r from-white/5 to-white/10 rounded-2xl p-6 border border-white/10">
                        {{ $slot }}
                    </div>
                </div>

                <!-- Footer -->
                <div class="mt-8 text-center">
                    <p class="text-white/60 text-sm">
                        &copy; 2025 Almacén del Futuro. Gestión inteligente de inventarios.
                    </p>
                </div>
            </div>
        </div>

        <style>
            @keyframes float {
                0%, 100% { transform: translateY(0px) rotate(0deg); }
                50% { transform: translateY(-20px) rotate(180deg); }
            }
            @keyframes float-delayed {
                0%, 100% { transform: translateY(0px) rotate(0deg); }
                50% { transform: translateY(-30px) rotate(-180deg); }
            }
            @keyframes float-slow {
                0%, 100% { transform: translateY(0px) scale(1); }
                50% { transform: translateY(-15px) scale(1.1); }
            }
            .animate-float {
                animation: float 6s ease-in-out infinite;
            }
            .animate-float-delayed {
                animation: float-delayed 8s ease-in-out infinite;
                animation-delay: 2s;
            }
            .animate-float-slow {
                animation: float-slow 10s ease-in-out infinite;
                animation-delay: 4s;
            }
        </style>
    </body>
</html>
