@extends('layout/template') <!--para traernos el template-->

@section('title', 'Editar Producto')

@section('content')
<h2>Editar</h2>

<form action="{{ url('/productos/'.$id) }}" method="post">
    @method("PUT")  <!-- definiendo que se enviará como un PUT para actualizar -->
    @csrf <!--con esto se genera un token para sesion y que siga la app -->
    <div class = "mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $producto->descripcion }}">
    </div>

    <div class = "mb-3">
        <label for="precio" class="form-label">Precio</label>
        <input type="text" name="precio" id="precio" class="form-control" value="{{ $producto->precio }}">
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection