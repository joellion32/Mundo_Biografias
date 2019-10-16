<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\User;
use App\Mensaje;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $entrada = Post::all();
        $usuario = User::all();
        $mensaje = Mensaje::all();
        return view('admin.dasboard' , compact('entrada' , 'usuario' , 'mensaje'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Entradas del formulario
        $entrada  = new Post();
        $entrada->name = $request->input('name');
        $entrada->slug = $request->input('slug');
        $entrada->body = $request->input('parrafo1');
        $entrada->file = $request->input('file');
        $entrada->letra = $request->input('letra');
        $entrada->save();
        flash('Entrada Creada Correctamente')->success();
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $entrada = Post::find($id);
        return view('admin.show' , compact('entrada'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $entrada = Post::find($id);
        return view('admin.edit' , compact('entrada'));
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
        // Actualizar Datos del formulario
        $entrada  = Post::find($id);
        $entrada->name = $request->input('name');
        $entrada->slug = $request->input('slug');
        $entrada->body = $request->input('parrafo1');
        $entrada->letra = $request->input('letra');
        $entrada->file = $request->input('file');
        $entrada->save();
        flash('Entrada Actualizada Correctamente')->success();
        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $entrada = Post::find($id);
        $entrada->delete();
        flash('Entrada Eliminada Correctamente')->error();
        return redirect()->route('home');
    }
}
