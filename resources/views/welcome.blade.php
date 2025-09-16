<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Almacén - Sistema de Gestión</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased overflow-x-hidden">
        <!-- Animated Background -->
        <div class="fixed inset-0 z-0">
            <div class="absolute inset-0 bg-gradient-to-br from-purple-900 via-blue-900 to-indigo-900"></div>
            <div class="absolute inset-0 bg-gradient-to-tr from-pink-500/20 via-purple-500/20 to-cyan-500/20"></div>
            <!-- Floating shapes -->
            <div class="absolute top-20 left-10 w-72 h-72 bg-purple-500/30 rounded-full mix-blend-multiply filter blur-xl animate-blob"></div>
            <div class="absolute top-40 right-10 w-72 h-72 bg-yellow-500/30 rounded-full mix-blend-multiply filter blur-xl animate-blob animation-delay-2000"></div>
            <div class="absolute -bottom-8 left-20 w-72 h-72 bg-pink-500/30 rounded-full mix-blend-multiply filter blur-xl animate-blob animation-delay-4000"></div>
            <div class="absolute bottom-20 right-20 w-72 h-72 bg-cyan-500/30 rounded-full mix-blend-multiply filter blur-xl animate-blob animation-delay-6000"></div>
        </div>

        <div class="relative z-10 min-h-screen">
            <!-- Navigation -->
            <nav class="absolute top-0 right-0 p-6 z-20">
                @auth
                    <a href="{{ url('/dashboard') }}" class="bg-white/10 backdrop-blur-md text-white px-6 py-3 rounded-full hover:bg-white/20 transition-all duration-300 font-semibold border border-white/20 shadow-lg">
                        Dashboard
                    </a>
                @else
                    <div class="space-x-4">
                        <a href="{{ route('login') }}" class="bg-white/10 backdrop-blur-md text-white px-6 py-3 rounded-full hover:bg-white/20 transition-all duration-300 font-semibold border border-white/20">
                            Iniciar Sesión
                        </a>
                        <a href="{{ route('register') }}" class="bg-gradient-to-r from-purple-500 to-pink-500 text-white px-6 py-3 rounded-full hover:from-purple-600 hover:to-pink-600 transition-all duration-300 font-semibold shadow-lg">
                            Registrarse
                        </a>
                    </div>
                @endauth
            </nav>

            <!-- Hero Section -->
            <section class="flex flex-col justify-center items-center min-h-screen px-6 text-center">
                <!-- Logo Animation -->
                <div class="mb-12 relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full blur-2xl opacity-50 animate-pulse"></div>
                    <div class="relative bg-gradient-to-br from-purple-600 via-blue-600 to-cyan-500 p-8 rounded-3xl shadow-2xl transform hover:scale-105 transition-transform duration-300">
                        <svg class="w-20 h-20 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M4 4h16v2H4V4zm0 4h16v2H4V8zm0 4h16v2H4v-2zm0 4h10v2H4v-2z"/>
                            <path d="M20 10v8a2 2 0 01-2 2H6a2 2 0 01-2-2v-8h16z"/>
                        </svg>
                    </div>
                </div>

                <!-- Main Title -->
                <h1 class="text-6xl md:text-8xl font-bold text-white mb-8 leading-tight">
                    <span class="bg-gradient-to-r from-purple-400 via-pink-400 to-cyan-400 bg-clip-text text-transparent">
                        Almacén
                    </span>
                    <br>
                    <span class="text-white/90 text-4xl md:text-5xl">
                        del Futuro
                    </span>
                </h1>

                <!-- Subtitle -->
                <p class="text-xl md:text-2xl text-white/80 max-w-3xl mx-auto mb-12 leading-relaxed">
                    Revoluciona la gestión de tu inventario con tecnología de vanguardia, 
                    <span class="text-cyan-300 font-semibold">inteligencia artificial</span> y 
                    <span class="text-purple-300 font-semibold">análisis en tiempo real</span>
                </p>

                <!-- CTA Buttons -->
                @guest
                    <div class="flex flex-col sm:flex-row gap-6 mb-16">
                        <a href="{{ route('register') }}" class="group relative px-8 py-4 bg-gradient-to-r from-purple-500 to-pink-500 text-white font-bold text-lg rounded-full shadow-2xl hover:shadow-purple-500/50 transition-all duration-300 transform hover:scale-105">
                            <span class="relative z-10">Comenzar Gratis</span>
                            <div class="absolute inset-0 bg-gradient-to-r from-purple-600 to-pink-600 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </a>
                        <a href="{{ route('login') }}" class="px-8 py-4 bg-white/10 backdrop-blur-md text-white font-bold text-lg rounded-full border-2 border-white/30 hover:bg-white/20 hover:border-white/50 transition-all duration-300 transform hover:scale-105">
                            Ver Demo
                        </a>
                    </div>
                @endguest

                <!-- Features Preview -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                    <div class="group bg-white/5 backdrop-blur-md p-8 rounded-2xl border border-white/10 hover:bg-white/10 transition-all duration-300 transform hover:-translate-y-2">
                        <div class="bg-gradient-to-br from-cyan-400 to-blue-500 w-16 h-16 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-4">Ultra Rápido</h3>
                        <p class="text-white/70 leading-relaxed">
                            Procesamiento instantáneo y respuestas en milisegundos para operaciones críticas.
                        </p>
                    </div>

                    <div class="group bg-white/5 backdrop-blur-md p-8 rounded-2xl border border-white/10 hover:bg-white/10 transition-all duration-300 transform hover:-translate-y-2">
                        <div class="bg-gradient-to-br from-purple-400 to-pink-500 w-16 h-16 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-4">IA Integrada</h3>
                        <p class="text-white/70 leading-relaxed">
                            Predicciones inteligentes y automatización avanzada para optimizar tu inventario.
                        </p>
                    </div>

                    <div class="group bg-white/5 backdrop-blur-md p-8 rounded-2xl border border-white/10 hover:bg-white/10 transition-all duration-300 transform hover:-translate-y-2">
                        <div class="bg-gradient-to-br from-yellow-400 to-orange-500 w-16 h-16 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-4">Analytics Pro</h3>
                        <p class="text-white/70 leading-relaxed">
                            Dashboards interactivos y reportes en tiempo real para decisiones informadas.
                        </p>
                    </div>
                </div>
            </section>

            <!-- Footer -->
            <footer class="text-center py-8 text-white/60">
                <p>&copy; 2025 Almacén del Futuro. Transformando la gestión de inventarios.</p>
            </footer>
        </div>

        <style>
            @keyframes blob {
                0% { transform: translate(0px, 0px) scale(1); }
                33% { transform: translate(30px, -50px) scale(1.1); }
                66% { transform: translate(-20px, 20px) scale(0.9); }
                100% { transform: translate(0px, 0px) scale(1); }
            }
            .animate-blob {
                animation: blob 7s infinite;
            }
            .animation-delay-2000 {
                animation-delay: 2s;
            }
            .animation-delay-4000 {
                animation-delay: 4s;
            }
            .animation-delay-6000 {
                animation-delay: 6s;
            }
        </style>
    </body>
</html>
