<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'name' , 'slug',  'body', 'file' , 'letra'
   ];

   public function scopeSearch($query , $name){
   return $query->where('name' , 'LIKE' , "%$name%");

   }
   
   // Busqueda por Orden Alfabetico
   public function scopeAlfabetico($query , $letra){
    if($letra)  
   return $query->where('letra' , 'LIKE' , "%$letra%");
    

   }
}
