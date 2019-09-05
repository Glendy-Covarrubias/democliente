<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">Tipo de persona</th>
            <th scope="col">Nombres</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Telefono</th>
            <th scope="col">Genero</th>
            <th scope="col">Correo</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($respuesta as $info)
        <tr>
            <td>{{ $info->tipo_persona }}</td>
            <td>{{ $info->nombres }}</td>
            <td>{{ $info->apellidos }}</td>
            <td>{{ $info->telefono }}</td>
            <td>{{ $info->genero }}</td>
            <td>{{ $info->correo }}</td>
            <td><a href="{{ route('cliente.editshow', $info->id) }}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
        </tr>
        @endforeach
    </tbody>
</table>