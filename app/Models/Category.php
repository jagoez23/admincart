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

    public static function rules($id)
    {
        if($id <=0) {
            return [
                'name' => 'required|unique:categories|min:3'
            ];
        }else{
            return [
                'name' => 'required|unique:categories|min:3'
            ];
        }
    }

    public static $messages = [
            'name.required' => 'El nombre de la categoría es requerido',
            'name.unique' => 'El nombre de la categoría ya existe',
            'name.min' => 'El nombre de la categoría debe tener al menos 3 caracteres'
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
