<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function index()
    {
        return response()->json(Producto::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'cantidad' => 'required|numeric',
            'precio' => 'required|numeric',
        ]);

        $producto = Producto::create($request->all());

        return response()->json($producto, 201);
    }

    public function show(Producto $producto)
    {
        return response()->json($producto);
    }

    public function update(Request $request, Producto $producto)
    {
        $request->validate([
            'nombre' => 'required',
            'cantidad' => 'required|numeric',
            'precio' => 'required|numeric',
        ]);

        $producto->update($request->all());

        return response()->json($producto);
    }

    public function destroy(Producto $producto)
    {
        $producto->delete();

        return response()->json(['message' => 'Producto eliminado correctamente']);
    }
}
