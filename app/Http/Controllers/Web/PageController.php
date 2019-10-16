<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use PDF;

class PageController extends Controller
{
    public function blog(Request $request){
        $entrada = Post::search($request->name)->orderBy('id' , 'ASC')->paginate(8);
        return view('web.index' , compact('entrada'));
    }
    
    public function buscar(Request $request){
        $buscar = Post::alfabetico($request->letra)->orderBy('id' , 'ASC')->paginate(50);
        return view('web.busqueda' , compact('buscar'));
    }

    public function vista($slug){
        
       $entrada = Post::where('slug' , $slug)->first();
        return view('web.vista' , compact('entrada'));

    }

    // para Descargar el PDF
   public function descarga($id){
    $entrada = Post::find($id);
    $pdf = PDF::loadView('web.descarga', compact('entrada'));
    return $pdf->download('biografias.pdf');

   }

   // Vista Acerca de Nosotros
   public function contacto(){
    return view('web.contacto');   
   }

}
