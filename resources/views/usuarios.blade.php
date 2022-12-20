@extends('layouts/plantilla')

@section('title', 'Usuarios')

@section('content')
    @extends('layouts/app1')
@endsection


@section('cuerpo')

<table id="myTable" class='display table table-stripped table-bordered''>
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Fecha nacimiento</th>
            <th>borrar</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($conexion as $usuario)
            <tr>
                <td>{{ $usuario->id }}</td>
                <td>{{ $usuario->nombre }}</td>
                <td>{{ $usuario->apellidos }}</td>
                <td>{{ $usuario->f_nacimiento }}</td>
                <?php
                // $urlEditar = "<a href=\"act2.php?id=$cliente->id\"><img width='32px' src='editar.png'>";
                $urlBorrar ="<a class='borrar' href='borrar?id=$usuario->id'>Borrar</a>";
                // $urlBorrar ="<a class='borrar' href='borrar'>Borrar</a>";
                echo "<td>$urlBorrar</td>";
                ?>

            </tr>
        @empty
            <tr>
                <td>No hay registros</td>
            </tr>
        @endforelse
    </tbody>
</table>

@endsection