<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// usar modelo nota
use App\Nota;

class NotaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return auth()->user();
        // Filtrado de notas por usuario
        $usuarioEmail = auth()->user()->email;

        // FILTRO 
        // Where filtra en la base de datos las notas que correspondan a la variable $usuarioEmail.
        $notas = Nota::where('usuario', $usuarioEmail)->paginate(5);
        return view('notas.lista',compact('notas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('notas.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $nota = new Nota();
        $nota->nombre = $request->nombre;
        $nota->descripción = $request->descripción;
        $nota->usuario = auth()->user()->email;
        $nota->save();

        return back()->with('mensaje', 'Nota Agregada');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $nota = Nota::findOrFail($id);
        return view('notas.editar', compact('nota'));
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
        //
        $notaActualizada = Nota::find($id);
        $notaActualizada->nombre = $request->nombre;
        $notaActualizada->descripción = $request->descripcion;
        $notaActualizada->save();
        return back()->with('mensaje', 'Nota editada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        //
        $notaEliminar = Nota::findOrFail($id);
        // Se elimina la nota por el método
        $notaEliminar->delete();
        return back()->with('mensaje', 'Nota eliminada');
    }
}
