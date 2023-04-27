@extends('layouts/main')
@section('contenido')
    <p class="fs-2 text-center">Ingresos</p>
    
    <form class="row g-3 fs-4" action="{{ route ('update', $items->id)}}" method="post">
        <a href="/" class="btn btn-info mt-3">Regresar </a>
        @csrf
        @method('PUT')
        <div class="col-md-6">
            <label for="tipo" class="form-label">Tipo de ingresos</label>
            <select name="tipo" id="tipo" class="form-select" value="{{$items->tipo}}">
                @foreach (['Gasto', 'Pago'] as $tipo )
                    <option value="{{ $tipo }}">{{ $tipo }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-6">
            <label for="categoria" class="form-label">Tipo de categoria</label>
            <select name="categoria" id="categoria" class="form-select" value="{{$items->categoria}}">
                @foreach (['Comida','Pasajes','Ropa','Salidas','Mercado libre','Plataformas de entretenimiento','Juegos',
                        'Trabajo', 'Cuidando niños','Venta de ropa','Venta de dulces','Trabajos extras','Becas','Dinero que me prociona mi papá'] as $categoria )
                    <option value="{{ $categoria }}">{{ $categoria }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-12">
            <label for="descripcion" class="form-label">Descripción</label>
            <input type="text" class="form-control" name="descripcion" id="descripcion" rows="3" value="{{$items->descripcion}}">
        </div>
        <div class="col-6 text-center">
            <label for="cantidad">Escribe la Cantidad</label>
            <input type="number" name="cantidad" id="cantidad" class="form-control" value="{{$items->cantidad}}">
        </div>
        <div class="col-6 text-center">
            <label for="fecha">Escribe la fecha</label>
            <input type="date" name="fecha" id="fecha" class="form-control" value="{{$items->fecha}}">
        </div>
        
        <div class="col-12">
            <button class="btn btn-primary mt-3">
                Actualizar 
            </button>
        </div>
        
    </form>
    
@endsection
