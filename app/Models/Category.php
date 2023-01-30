<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Category extends Model
{
    use HasFactory;

    /**
     * $fillable es una matriz que contiene todos los campos de la tabla
     * que se pueden completar mediante la asignación masiva (mass-assignament).
     */
    protected $fillable = ['name', 'active', 'color'];

    /**
     * belongsTo -> Relación uno a muchos inversa
     * 
     */
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
