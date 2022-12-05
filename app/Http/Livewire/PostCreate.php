<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use Illuminate\Support\Str;

class PostCreate extends Component
{

    public $updateMode = false;
    public $post;
    
    // Reglas de validación
    protected $rules = [
        'post.title' => 'required|min:6',
        'post.body' => 'required|min:6',
    ];
    // funcion al iniciar el componente
    public function mount(){
        $this->post = new Post;
    }
    // Guardar post
    public function savePost(){
        // TODO: Que guarde el usuario
        $this->post->user_id = 1;
        $this->post->slug = Str::slug($this->post->title);
        $this->post->save();
        $this->updateMode = true;
    }

    // Renderización del componente
    public function render()
    {
        return view('livewire.post.post-create')
        ->extends('layouts.app')
        ->section('content');
    }
}
