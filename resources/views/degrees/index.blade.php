<h1> degrees </h1>


<table>
    <thead>
        <tr>

            <th> nombre </th>
            <th> jornada </th>
            <th> numero de alumnos </th>




        </tr>

    </thead>

    <tbody>
        @foreach ($data as $degree)
            <tr>
                <td> {{ $degree['nombre'] }} </td>
                <td>{{ $degree['jornada'] }}</td>
                <td> {{ $degree['numeroAlumnos'] }} </td>

                <td> <a href="{{ route('degrees.show', $degree['id']) }}">Ver</a> </td>
                <td> <a href="{{ route('degrees.destroy', $degree['id']) }}">Eliminar</a></td>

            </tr>
        @endforeach
    </tbody>


</table>
