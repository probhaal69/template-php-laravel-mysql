<h1>Hola esto funca por ahora...</h1>

// mostrar una tabla de usuarios

<table>
    @forelse ($conexion as $usuario)
        <tr>
            <td>{{ $usuario->id }}</td>
            <td>{{ $usuario->name }}</td>
            <td>{{ $usuario->email }}</td>
            <td>{{ $usuario->created_at }}</td>
            <td>{{ $usuario->updated_at }}</td>
        </tr>
    @endforelse
</table>