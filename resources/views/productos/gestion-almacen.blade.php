@extends('layouts.app')

@section('content')
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h2>Bienvenido a la Gestión de Almacén</h2>
        </div>
        <div class="card-body text-center">
            <!-- Imagen del almacén -->
            <img src="{{ asset('images/almacen.jpg') }}" alt="Almacén" class="img-fluid mb-4" style="max-height: 400px;">
            
            <!-- Párrafo con estilo minimalista y llamativo -->
            <p class="lead text-primary font-weight-bold" style="font-size: 1.2rem; line-height: 1.6;">
                Gestiona tus productos de manera <span class="text-dark">eficiente</span>. Visualiza el <span class="text-dark">inventario</span>, controla las existencias y mejora la organización de tu almacén con facilidad.
            </p>
        </div>
    </div>
@endsection
