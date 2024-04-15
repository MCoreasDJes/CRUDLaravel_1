<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo de productos</title>

    <style>
        table, td, th{
            border: 1px solid;
        }
        table{
            width: 70%;
        }
    </style>
</head>
<body>
    <h1>Catalogo de Productos Vista.</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Codigo</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Stock</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($lista AS $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->codigo }}</td>
                <td>{{ $item->descripcion }}</td>
                <td>{{ $item->precio }}</td>
                <td>{{ $item->existencia }}</td>
                <td></td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- <form action="" method="post">
        @method("DELETE")
        @csrf

        <button type="submit">Eliminar</button>
    </form> -->

</body>
</html>