<?php

namespace App\Http\Controllers;

use App\Models\Ingreso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class AltasBajas extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware(['auth'])->only(['index']);
    }
    
    public function index()
    {
        $titulo = 'Inicio';
        $items = Ingreso::all();
        $obtenido = DB::table('ingreso')->where('tipo', '=', 'Pago')->sum('cantidad');
        $perdido = DB::table('ingreso')->where('tipo', '=', 'Gasto')->sum('cantidad');
        $resultado = $obtenido-$perdido;

        return view('/crud/index', compact('titulo', 'items', 'obtenido', 'perdido', 'resultado'));
    }
    public function tabla()
    {
        $titulo = 'Información';
        $items = Ingreso::all();
        return view('/crud/tabla', compact('titulo', 'items'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $titulo = 'Agregar';
        return view('/crud/create', compact('titulo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = new Ingreso();
        $item->tipo = $request->tipo;
        $item->categoria = $request->categoria;
        $item->cantidad = $request->cantidad;
        $item->descripcion = $request->descripcion;
        $item->fecha = $request->fecha;
        $item->save();
        Alert::success('Agregado', 'Se agrego correctamente');
        return redirect('/crud/tabla');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $titulo = "Eliminar ingreso";
        $items = Ingreso::find($id);
        return view( "/crud/eliminar" , compact( 'items' , 'titulo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $titulo = 'Actualizar datos';
        $items = Ingreso::find($id);
        return view('/crud/edit', compact('items' , 'titulo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = Ingreso::find($id);
        $item->tipo = $request->tipo;
        $item->categoria = $request->categoria;
        $item->cantidad = $request->cantidad;
        $item->descripcion = $request->descripcion;
        $item->fecha = $request->fecha;
        $item->save();
        Alert::success('Actualizo', 'Se actualizo correctamente');
        return redirect('/crud/tabla');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Ingreso::find($id);
        $item->delete();
        Alert::success('Elimino', 'Se elimino correctamente');
        return redirect('/crud');
    }
}
