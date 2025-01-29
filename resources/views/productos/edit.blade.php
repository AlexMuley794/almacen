@extends('layouts.app')

@section('content')
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h2>Editar Producto</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('productos.update', $producto->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" class="form-control" value="{{ $producto->nombre }}" placeholder="Ingrese el nombre del producto" required>
                </div>
                <div class="form-group">
                    <label for="cantidad">Cantidad:</label>
                    <input type="number" name="cantidad" class="form-control" value="{{ $producto->cantidad }}" placeholder="Ingrese la cantidad" required>
                </div>
                <div class="form-group">
                    <label for="precio">Precio:</label>
                    <input type="number" name="precio" class="form-control" value="{{ $producto->precio }}" placeholder="Ingrese el precio" required>
                </div>
                <button type="submit" class="btn btn-success">Actualizar</button>
                <a href="{{ route('productos.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </div>
@endsection