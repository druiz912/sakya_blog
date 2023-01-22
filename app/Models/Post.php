<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Post extends Model
{
    use HasFactory;
    
    /**
     * $fillable es una matriz que contiene todos los campos de la tabla 
     * que se pueden completar mediante la asignación masiva (mass-assignament).
     */
    protected $fillable = ['user_id', 'title', 'body', 'slug', 'published'];   
    
    /**
     * hasMany -> Relación uno a muchos 
     * .
     */

    public function categories()
    {
        return $this->hasMany(Category::class)->withDefault([
            'name' => 'oculus',
            'active' => 0,
            'color' => 'red'
        ]);
    }
}
