<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
    protected $fillable = [
         'email',  'telefono', 'comentario'
   ];

   public function scopeSearch($query , $name){
   return $query->where('name' , 'LIKE' , "%$name%");

   }
}
