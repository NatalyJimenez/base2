<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
//hacemos referencia al modelo categoria
use App\Persona;
//Hacemos referencia a la clase que valida el formulario
use App\Http\Requests\PersonaFormRequest;
//creamos una clases para hacer redirigir
use Illuminate\support\Facades\Redirect;
//hacemos referencia aa la clase para manejo de datos 
use DB;



class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //cargamos los datos de la tabla
        if($request)
        {
        $valor=trim($request -> get ('searchText')); 
        $persona=DB::table('persona') 
        ->where('nombre','like',"%$valor%") 
        ->orderBy('idpersona','desc')

        ->paginate(4);


        return view('almacen.persona.index')
        -> with("persona",$persona);
    }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Muestra el formulario de captura
        return view('almacen.persona.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PersonapersonaFormRequest $request)
    {
        //
        $persona= new Persona;
        $persona->tipo_persona=$request->get('tipo_persona');
        $persona->nombre=$request->get('nombre');
         $persona->tipo_documento->get('tipo_documento');
         $persona->num_documento->get('num_documento');
          $persona->dirrecion->get('dirrecion');
           $persona->telefono->get('telefono');
           $persona->email->get('email');
        $persona->save();
        return Redirect::to('almacen/persona');


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
        //buscar la tabla categoria un registro cuya id sea la que recibe el controlador
        $persona=Persona::findOrFail($id);

        return view('almacen.persona.edit')
        ->with("persona",$persona);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PersonaFormRequest $request, $id)
    {
        //
        $persona=persona::findorfail($id);
       $persona->tipo_persona=$request->get('tipo_persona');
        $persona->nombre=$request->get('nombre');
         $persona->tipo_documento->get('tipo_documento');
         $persona->num_documento->get('num_documento');
          $persona->dirrecion->get('dirrecion');
           $persona->telefono->get('telefono');
           $persona->email->get('email');
        $persona->update();

        return Redirect::to('almacen/persona');
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
            $persona=Persona::findOrfail($id);
            $persona->update();

            return Redirect::to('almacen/persona');

    }
}
