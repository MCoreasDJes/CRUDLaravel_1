@extends('layout/template') <!--para traernos el template-->

@section('title', 'Nuevo Producto')

@section('content')

<form action="{{ url('/productos') }}" method="post">
    @csrf <!--con esto se genera un token para sesion y que siga la app -->
    <div class = "mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" name="nombre" id="nombre" class="form-control">
    </div>

    <div class = "mb-3">
        <label for="precio" class="form-label">Precio</label>
        <input type="text" name="precio" id="precio" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection