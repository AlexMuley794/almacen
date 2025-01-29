@extends('layouts.app')

@section('content')
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h2>Lista de Productos</h2>
        </div>
        <div class="card-body">
            <a href="{{ route('productos.create') }}" class="btn btn-success mb-3">Crear Producto</a>

            <table id="productos-table" class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($productos as $producto)
                        <tr>
                            <td>{{ $producto->id }}</td>
                            <td>{{ $producto->nombre }}</td>
                            <td>{{ $producto->cantidad }}</td>
                            <td>{{ $producto->precio }}</td>
                            <td>
                                <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-primary btn-sm">Editar</a>
                                <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#productos-table').DataTable();
        });
    </script>
@endsection