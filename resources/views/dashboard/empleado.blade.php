<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-bold text-2xl text-gray-800 leading-tight">
                {{ __('Panel de Empleado') }}
            </h2>
            <div class="flex items-center space-x-2">
                <div class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">
                    Empleado
                </div>
            </div>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Welcome Card -->
            <div class="bg-gradient-to-r from-blue-500 to-cyan-600 rounded-2xl shadow-xl mb-8 overflow-hidden">
                <div class="px-8 py-6 text-white">
                    <h1 class="text-3xl font-bold mb-2">¡Hola, {{ auth()->user()->name }}!</h1>
                    <p class="text-blue-100">Consulta el inventario y la información del almacén.</p>
                </div>
            </div>

            <div class="bg-white/80 backdrop-blur-sm overflow-hidden shadow-2xl border border-white/20 sm:rounded-2xl">
                <div class="p-8 text-gray-900">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-10">
                        <!-- Consultar Productos Card -->
                        <div class="group bg-gradient-to-br from-blue-50 to-blue-100 p-8 rounded-2xl border border-blue-200 hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                            <div class="flex items-center mb-6">
                                <div class="flex-shrink-0 bg-blue-600 p-3 rounded-xl">
                                    <svg class="h-8 w-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-xl font-bold text-blue-900">Consultar Productos</h3>
                                    <p class="text-blue-700">Ver inventario disponible</p>
                                </div>
                            </div>
                            <div>
                                <a href="{{ route('productos.index') }}" class="block bg-blue-600 text-white px-6 py-3 rounded-xl hover:bg-blue-700 transition-colors text-center font-semibold">
                                    Ver Inventario
                                </a>
                            </div>
                        </div>

                        <!-- Ver Categorías Card -->
                        <div class="group bg-gradient-to-br from-green-50 to-green-100 p-8 rounded-2xl border border-green-200 hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                            <div class="flex items-center mb-6">
                                <div class="flex-shrink-0 bg-green-600 p-3 rounded-xl">
                                    <svg class="h-8 w-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-xl font-bold text-green-900">Categorías</h3>
                                    <p class="text-green-700">Consultar clasificaciones</p>
                                </div>
                            </div>
                            <div>
                                <a href="{{ route('categories.readonly') }}" class="block bg-green-600 text-white px-6 py-3 rounded-xl hover:bg-green-700 transition-colors text-center font-semibold">
                                    Ver Categorías
                                </a>
                            </div>
                        </div>

                        <!-- Ver Proveedores Card -->
                        <div class="group bg-gradient-to-br from-purple-50 to-purple-100 p-8 rounded-2xl border border-purple-200 hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                            <div class="flex items-center mb-6">
                                <div class="flex-shrink-0 bg-purple-600 p-3 rounded-xl">
                                    <svg class="h-8 w-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-xl font-bold text-purple-900">Proveedores</h3>
                                    <p class="text-purple-700">Información de contacto</p>
                                </div>
                            </div>
                            <div>
                                <a href="{{ route('suppliers.readonly') }}" class="block bg-purple-600 text-white px-6 py-3 rounded-xl hover:bg-purple-700 transition-colors text-center font-semibold">
                                    Ver Proveedores
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Info Section -->
                    <div class="bg-gradient-to-r from-amber-50 to-orange-50 p-8 rounded-2xl border border-amber-200">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 bg-amber-100 p-3 rounded-xl">
                                <svg class="h-6 w-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-xl font-bold text-amber-900 mb-3">Permisos de Empleado</h3>
                                <p class="text-amber-800 leading-relaxed">
                                    Como empleado, tienes acceso de <strong>solo lectura</strong> para consultar productos, categorías y proveedores. 
                                    Para realizar cambios en el inventario, contacta con un administrador.
                                </p>
                                <div class="mt-4 flex flex-wrap gap-2">
                                    <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">✓ Ver productos</span>
                                    <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">✓ Ver categorías</span>
                                    <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">✓ Ver proveedores</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
