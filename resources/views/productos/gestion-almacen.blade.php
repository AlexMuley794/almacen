@extends('layouts.app')

@section('content')

<!-- Sección Hero -->
<section class="bg-primary text-white text-center py-5" style="background: linear-gradient(to right, #4facfe, #00f2fe);">
    <div class="container">
        <h1>Bienvenido a la Gestión de Almacén</h1>
        <p class="lead">Administra tus productos de manera eficiente y sencilla.</p>
        <a href="{{ route('productos.index') }}" class="btn btn-light btn-lg">Ver Productos</a>
    </div>
</section>

<!-- Sección de Características -->
<section class="py-5">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h3>Fácil de Usar</h3>
                        <p>Interfaz intuitiva y amigable para gestionar tu inventario sin complicaciones.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h3>100% Seguro</h3>
                        <p>Protegemos tus datos con encriptación avanzada y medidas de seguridad.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h3>Accesible</h3>
                        <p>Accede a tu almacén desde cualquier dispositivo con conexión a internet.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sección "Sobre Nosotros" -->
<section class="bg-light py-5">
    <div class="container text-center">
        <h2>Sobre Nosotros</h2>
        <p>Somos una empresa dedicada a facilitar la gestión de inventarios mediante tecnología innovadora.</p>
    </div>
</section>

<!-- Sección de Contacto -->
<section class="bg-dark text-white text-center py-5">
    <div class="container">
        <h2>¿Necesitas ayuda?</h2>
        <p>Ponte en contacto con nuestro equipo de soporte para resolver cualquier duda.</p>
        <a href="mailto:soporte@almacen.com" class="btn btn-light">Contactar Soporte</a>
    </div>
</section>

@endsection
