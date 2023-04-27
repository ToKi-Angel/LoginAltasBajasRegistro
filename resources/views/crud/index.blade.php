@extends('layouts/main')
@section('contenido')
    <p class="fs-2 text-center">Ingresos</p>
    <a href="/crud/create" class=" btn btn-primary">Agregar ingresos</a>
    <div class="card mt-4 fs-2">
        <div class="card-body">
            <p>Ingresos total: {{ $resultado }}</p>
            <p>Ingresos gastado total: {{ $perdido }}</p>
        </div>
    </div>
    <a href="{{route('logout')}}" class=" btn btn-danger mt-4"> Salir del sistema </a>
    <script>
        $(function() {
            $('#items-table').DataTable();
        });
    </script>
@endsection
