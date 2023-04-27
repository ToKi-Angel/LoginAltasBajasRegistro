@extends('layouts/main')
@section('contenido')
    <p class="fs-2 text-center">Ingresos</p>
    <div class="card">
        <div class="card-body">
            <table class="table table-dark table-striped table-hover" id="items-table" >
                <thead>
                    <tr>
                        <th>Tipo</th>
                        <th>Categoria</th>
                        <th>Cantidad</th>
                        <th>Descripción</th>
                        <th>Fecha</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                    <tr>
                        <td>{{ $item->tipo }}</td>
                        <td>{{ $item->categoria }}</td>
                        <td>{{ $item->cantidad }}</td>
                        <td>{{ $item->descripcion }}</td>
                        <td>{{ $item->fecha }}</td>
                        <td>
                            <a href="{{ route( 'edit', $item->id) }}" class="btn btn-warning">Editar</a>
                        </td>
                        <td> 
                            <a href="{{ route( 'show', $item->id )}}" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script>
        $(function() {
            $('#items-table').DataTable();
        });
    </script>
@endsection
