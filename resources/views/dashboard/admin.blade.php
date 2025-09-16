<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-bold text-2xl text-gray-800 leading-tight">
                {{ __('Panel de Administrador') }}
            </h2>
            <div class="flex items-center space-x-2">
                <div class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">
                    Admin
                </div>
            </div>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Welcome Card -->
            <div class="bg-gradient-to-r from-blue-600 to-indigo-700 rounded-2xl shadow-xl mb-8 overflow-hidden">
                <div class="px-8 py-6 text-white">
                    <h1 class="text-3xl font-bold mb-2">¡Bienvenido, {{ auth()->user()->name }}!</h1>
                    <p class="text-blue-100">Gestiona tu almacén de manera eficiente desde este panel de control.</p>
                </div>
            </div>

            <div class="bg-white/80 backdrop-blur-sm overflow-hidden shadow-2xl border border-white/20 sm:rounded-2xl">
                <div class="p-8 text-gray-900">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-10">
                        <!-- Productos Card -->
                        <div class="group bg-gradient-to-br from-blue-50 to-blue-100 p-8 rounded-2xl border border-blue-200 hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                            <div class="flex items-center mb-6">
                                <div class="flex-shrink-0 bg-blue-600 p-3 rounded-xl">
                                    <svg class="h-8 w-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-xl font-bold text-blue-900">Productos</h3>
                                    <p class="text-blue-700">Gestión completa del inventario</p>
                                </div>
                            </div>
                            <div class="space-y-3">
                                <a href="{{ route('productos.index') }}" class="block bg-blue-600 text-white px-6 py-3 rounded-xl hover:bg-blue-700 transition-colors text-center font-semibold">
                                    Ver Productos
                                </a>
                                <a href="{{ route('productos.create') }}" class="block bg-blue-100 text-blue-700 px-6 py-3 rounded-xl hover:bg-blue-200 transition-colors text-center font-medium">
                                    + Nuevo Producto
                                </a>
                            </div>
                        </div>

                        <!-- Categorías Card -->
                        <div class="group bg-gradient-to-br from-green-50 to-green-100 p-8 rounded-2xl border border-green-200 hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                            <div class="flex items-center mb-6">
                                <div class="flex-shrink-0 bg-green-600 p-3 rounded-xl">
                                    <svg class="h-8 w-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-xl font-bold text-green-900">Categorías</h3>
                                    <p class="text-green-700">Organización de productos</p>
                                </div>
                            </div>
                            <div class="space-y-3">
                                <a href="{{ route('categories.index') }}" class="block bg-green-600 text-white px-6 py-3 rounded-xl hover:bg-green-700 transition-colors text-center font-semibold">
                                    Ver Categorías
                                </a>
                                <a href="{{ route('categories.create') }}" class="block bg-green-100 text-green-700 px-6 py-3 rounded-xl hover:bg-green-200 transition-colors text-center font-medium">
                                    + Nueva Categoría
                                </a>
                            </div>
                        </div>

                        <!-- Proveedores Card -->
                        <div class="group bg-gradient-to-br from-purple-50 to-purple-100 p-8 rounded-2xl border border-purple-200 hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                            <div class="flex items-center mb-6">
                                <div class="flex-shrink-0 bg-purple-600 p-3 rounded-xl">
                                    <svg class="h-8 w-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-xl font-bold text-purple-900">Proveedores</h3>
                                    <p class="text-purple-700">Gestión de proveedores</p>
                                </div>
                            </div>
                            <div class="space-y-3">
                                <a href="{{ route('suppliers.index') }}" class="block bg-purple-600 text-white px-6 py-3 rounded-xl hover:bg-purple-700 transition-colors text-center font-semibold">
                                    Ver Proveedores
                                </a>
                                <a href="{{ route('suppliers.create') }}" class="block bg-purple-100 text-purple-700 px-6 py-3 rounded-xl hover:bg-purple-200 transition-colors text-center font-medium">
                                    + Nuevo Proveedor
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Statistics Section -->
                    <div class="bg-gradient-to-r from-gray-50 to-gray-100 p-8 rounded-2xl border border-gray-200">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                            <svg class="h-6 w-6 text-gray-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                            </svg>
                            Panel de Control
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <div class="bg-white p-6 rounded-xl shadow-sm">
                                <div class="text-3xl font-bold text-blue-600 mb-2">{{ \App\Models\Producto::count() }}</div>
                                <div class="text-gray-600">Total Productos</div>
                            </div>
                            <div class="bg-white p-6 rounded-xl shadow-sm">
                                <div class="text-3xl font-bold text-green-600 mb-2">{{ \App\Models\Category::count() }}</div>
                                <div class="text-gray-600">Categorías</div>
                            </div>
                            <div class="bg-white p-6 rounded-xl shadow-sm">
                                <div class="text-3xl font-bold text-purple-600 mb-2">{{ \App\Models\Supplier::count() }}</div>
                                <div class="text-gray-600">Proveedores</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
