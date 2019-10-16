<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;
use Redirect;
use App\Mensaje;
class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
    $mensaje = Mensaje::search($request->name)->orderBy('id' , 'ASC')->paginate(8);
    $notificacion = Mensaje::all();
    return view('admin.correo' , compact('mensaje' , 'notificacion'));  
     
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mensaje  = new Mensaje;
        $mensaje->name = $request->input('nombre');
        $mensaje->email = $request->input('correo');
        $mensaje->telefono = $request->input('telefono');
        $mensaje->comentario = $request->input('comentario');
        $mensaje->save();
        return redirect()->route('acerca');
        flash('Mensaje Enviado Correctamente')->success();

    }
    
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mensaje = Mensaje::find($id);
        $notificacion = Mensaje::all();
        return view('admin.vercorreo' , compact('mensaje' , 'notificacion'));
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mensaje = Mensaje::find($id);
        $mensaje->delete();
        flash('Correo Eliminado Correctamente')->error();
        return redirect()->route('correo');
    }

    public function enviar(){ 
        $notificacion = Mensaje::all();   
        return view('admin.enviar' , compact('notificacion'));    
    
        }
}
