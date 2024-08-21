<?php

namespace App\Http\Controllers;

use App\Models\producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = producto::all();
        return view('productos.index',compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $productos = new producto;
        $productos->nombre = $request->input('nombre');
        $productos->precio = $request->input('precio');
        $productos->stock = $request->input('stock');

        $productos->save();

        return redirect()->route('productos.index')->with('success', 'Estado de venta agregado correctamente.');

    }

    /**
     * Display the specified resource.
     */
    public function show(producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $producto = Producto::findOrFail($id);
        return view('productos.editar', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $productos = producto::find($id);
        $productos->nombre = $request->input("nombre");
        $productos->precio = $request->input("precio");
        $productos->stock = $request->input("stock");
        $productos->update();

        return redirect()->route('productos.index')->with('success', 'Estado de venta agregado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $producto = Producto::findOrFail($id);
        $producto->delete();
    
        return redirect()->route('productos.index')->with('success', 'Producto eliminado correctamente.');
    }
    
}
