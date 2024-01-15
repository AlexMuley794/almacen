@extends('layouts.app')

@section('content')
    <h2>Editar Producto</h2>

    <form action="{{ route('productos.update', $producto->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" class="form-control" value="{{ $producto->nombre }}" required>
        </div>
        <div class="form-group">
            <label for="cantidad">Cantidad:</label>
            <input type="number" name="cantidad" class="form-control" value="{{ $producto->cantidad }}" required>
        </div>
        <div class="form-group">
            <label for="precio">Precio
