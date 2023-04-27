@extends('layouts/main')
@section('contenido')
    <p class="fs-2 text-center">Agregar ingresos</p>

    <form class="row g-3 fs-4" action="store" method="post">
        @csrf
        @method('POST')
        <div class="col">
            <label for="tipo" class="form-label">Tipo de ingresos</label>
            <select name="tipo" id="tipo" class="form-select">
                @foreach (['Gasto', 'Pago'] as $tipo)
                    <option value="{{ $tipo }}">{{ $tipo }}</option>
                @endforeach
            </select>
            <label for="categoria" class="form-label">Tipo de categoria</label>
            <select name="categoria" id="categoria" class="form-select">
                @foreach (['Comida', 'Pasajes', 'Ropa', 'Salidas', 'Mercado libre', 'Plataformas de entretenimiento', 'Juegos', 'Trabajo', 'Cuidando niños', 'Venta de ropa', 'Venta de dulces', 'Trabajos extras', 'Becas', 'Dinero que me prociona mi papá'] as $categoria)
                    <option value="{{ $categoria }}">{{ $categoria }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-12">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea class="form-control" name="descripcion" id="descripcion" rows="3"></textarea>
        </div>
        <div class="col text-center">
            <label for="cantidad">Escribe la Cantidad</label>
            <input type="number" name="cantidad" id="cantidad" class="form-control">
            <label for="fecha">Escribe la fecha</label>
            <input type="date" name="fecha" id="fecha" class="form-control">
            <button class="btn btn-primary mt-3">
                Guardar
            </button>
        </div>

    </form>
@endsection
