<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller{
    public function index(){
        //$productos = DB::select('SELECT*FROM productos WHERE activo = 1');
        return view('productos.index', ['lista' => Producto::all()]);
    }

    public function show($nombre){
        return view('productos.show', ['producto' => $nombre]);
    }

    public function create(){
        return view('productos.create');
    }

    public function store(Request $request){

        $producto = new Producto();
        $producto -> codigo = '323456789';
        $producto -> descripcion = $request->input('nombre');
        $producto -> precio = $request->input('precio');
        $producto -> existencias = 0;
        $producto -> categoria_id = 1;
        $producto -> activo = 1;
        $producto -> save();

        return("Registro guardado!");
    }

    public function edit($id){
        $producto = Producto::find($id);

        return view('productos.edit', ['id' => $id, 'producto' => $producto]);
    }

    public function update(Request $request, $id){
        $producto = Producto::find($id);
        $producto -> descripcion = $request->input('nombre');
        $producto -> precio = $request->input('precio');
        $producto -> save();
        return "Registro modificado!";
    }

    public function destroy($id){
        $producto = Producto::find($id);
        $producto -> delete();
        return "Registro $id eliminado";
    }
}