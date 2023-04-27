@extends('layouts/main')
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="text-center fw-bold"><td class="icocod">&#10060;</td>Los datos a eliminar son: </h2>
                <ul>
                    <li>El tipo de ingresos es: {{ $items->tipo }}</li>
                    <li>La categoria elegida es: {{ $items->categoria }}</li>
                    <li>La cantidad ingresada: {{ $items->cantidad }}</li>
                    <li>La descripción es: {{ $items->descripcion }}</li>
                    <li>La fecha es: {{ $items->fecha }}</li>
                </ul>
                <form action="{{ route('destroy', $items->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger mt-3">
                        <td class="icocod">&#10062;</td> Eliminar definitivamente
                    </button>
                </form>
                
            </div>
        </div>
    </div>
    
@endsection