<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
    ];

    //función para poder eliminar productos que esten asigandos a una categoria

   public function products()
   {
        return $this->hasMany(Product::class);
   }

   //accesor para validar si una categoría tiene imagen asociada

   public function getImagenAttribute()
   {
        if($this->image != null)
            return(file_exists('storage/categories/' . $this->image) ? $this->image : 'noimg.jpg');
        else
            return 'noimg.jpg';
   }

}
