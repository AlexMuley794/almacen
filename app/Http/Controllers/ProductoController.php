<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Category;
use App\Models\Supplier;

class ProductoController extends Controller
{
    public function gestionAlmacen()
    {
        return view('productos.gestion-almacen');  
    }

    public function index()
    {
        $productos = Producto::with(['category', 'supplier'])->get();
        return view('productos.index', compact('productos'));
    }

    public function create()
    {
        $categories = Category::where('activo', true)->get();
        $suppliers = Supplier::where('activo', true)->get();
        return view('productos.create', compact('categories', 'suppliers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'sku' => 'required|unique:productos,sku',
            'nombre' => 'required|max:255',
            'descripcion' => 'nullable',
            'cantidad' => 'required|numeric|min:0',
            'precio' => 'required|numeric|min:0',
            'stock' => 'required|numeric|min:0',
            'category_id' => 'required|exists:categories,id',
            'supplier_id' => 'required|exists:suppliers,id',
        ]);

        Producto::create($request->all());

        return redirect()->route('productos.index')->with('success', 'Producto creado correctamente.');
    }

    public function edit(Producto $producto)
    {
        $categories = Category::where('activo', true)->get();
        $suppliers = Supplier::where('activo', true)->get();
        return view('productos.edit', compact('producto', 'categories', 'suppliers'));
    }

    public function update(Request $request, Producto $producto)
    {
        $request->validate([
            'sku' => 'required|unique:productos,sku,' . $producto->id,
            'nombre' => 'required|max:255',
            'descripcion' => 'nullable',
            'cantidad' => 'required|numeric|min:0',
            'precio' => 'required|numeric|min:0',
            'stock' => 'required|numeric|min:0',
            'category_id' => 'required|exists:categories,id',
            'supplier_id' => 'required|exists:suppliers,id',
        ]);

        $producto->update($request->all());

        return redirect()->route('productos.index')->with('success', 'Producto actualizado correctamente.');
    }

    public function show(Producto $producto)
    {
        $producto->load(['category', 'supplier']);
        return view('productos.show', compact('producto'));
    }

    public function destroy(Producto $producto)
    {
        $producto->delete();

        return redirect()->route('productos.index')->with('success', 'Producto eliminado correctamente.');
    }
}
