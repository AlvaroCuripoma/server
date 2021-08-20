<?php

namespace App\Http\Controllers;

use App\Models\producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = producto::all();
        return response()->json($productos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto = new producto();
        $producto->visible = $request->visible;
        $producto->estado = $request->estado;
        $producto->tipo_producto_fk = $request->tipo_producto_fk;
        $producto->nombre = $request->nombre;
        $producto->fecha_fabricacion = $request->fecha_fabricacion;
        $producto->fecha_vencimiento = $request->fecha_vencimiento;
        $producto->precio = $request->precio;
        $producto->cantidad = $request->cantidad;
        $producto->descripcion = $request->descripcion;
        if ($producto->save()) {
            return response()->json($producto);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto = producto::findOrFail($id);
        return response()->json($producto);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $producto = producto::findOrFail($id);
        $producto->visible = $request->visible;
        $producto->estado = $request->estado;
        $producto->tipo_producto_fk = $request->tipo_producto_fk;
        $producto->nombre = $request->nombre;
        $producto->fecha_fabricacion = $request->fecha_fabricacion;
        $producto->fecha_vencimiento = $request->fecha_vencimiento;
        $producto->precio = $request->precio;
        $producto->cantidad = $request->cantidad;
        $producto->descripcion = $request->descripcion;
        if ($producto->save()) {
            return response()->json($producto);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = producto::findOrFail($id);
        if ($producto->delete())
        {
            return response()->json($producto);
        }
    }
}
