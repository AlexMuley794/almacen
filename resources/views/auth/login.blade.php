<x-guest-layout>
    <!-- Welcome Message -->
    <div class="text-center mb-6">
        <h2 class="text-2xl font-bold text-white mb-2">Bienvenido de vuelta</h2>
        <p class="text-white/70">Inicia sesión para acceder a tu almacén</p>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="space-y-6">
        @csrf

        <!-- Email Address -->
        <div>
            <label for="email" class="block text-sm font-medium text-white/90 mb-2">
                Correo Electrónico
            </label>
            <input id="email" 
                   type="email" 
                   name="email" 
                   value="{{ old('email') }}" 
                   required 
                   autofocus 
                   autocomplete="username"
                   class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-xl text-white placeholder-white/50 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent backdrop-blur-sm transition-all duration-300" 
                   placeholder="tu@email.com" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div>
            <label for="password" class="block text-sm font-medium text-white/90 mb-2">
                Contraseña
            </label>
            <input id="password" 
                   type="password" 
                   name="password" 
                   required 
                   autocomplete="current-password"
                   class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-xl text-white placeholder-white/50 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent backdrop-blur-sm transition-all duration-300" 
                   placeholder="••••••••" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="flex items-center">
            <input id="remember_me" 
                   type="checkbox" 
                   name="remember"
                   class="w-4 h-4 text-purple-500 bg-white/10 border-white/20 rounded focus:ring-purple-500 focus:ring-2" />
            <label for="remember_me" class="ml-3 text-sm text-white/80">
                Recordarme
            </label>
        </div>

        <!-- Actions -->
        <div class="space-y-4">
            <button type="submit" 
                    class="w-full bg-gradient-to-r from-purple-500 to-pink-500 text-white font-bold py-3 px-4 rounded-xl hover:from-purple-600 hover:to-pink-600 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-transparent transition-all duration-300 transform hover:scale-[1.02] shadow-lg">
                Iniciar Sesión
            </button>

            <div class="flex items-center justify-between text-sm">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" 
                       class="text-white/70 hover:text-white transition-colors duration-300">
                        ¿Olvidaste tu contraseña?
                    </a>
                @endif
                
                <a href="{{ route('register') }}" 
                   class="text-purple-300 hover:text-purple-200 font-medium transition-colors duration-300">
                    Crear cuenta
                </a>
            </div>
        </div>
    </form>
</x-guest-layout>
