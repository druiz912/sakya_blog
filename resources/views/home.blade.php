  {{-- Plantilla principal  --}}

@section('content')

{{-- IMAGEN PRINCIPAL --}}
<x-about></x-about>

    {{-- Mostrar los posts --}}
    <div class="mt-10 max-w-xl mx-auto">
        <h1>Posts</h1>
        <br>
        @foreach(\App\Models\Post::paginate(10) as $post)
            <div class="border-b mb-5 pb-5 border-gray-200">
                <a href="/post/{{ $post->slug }}" class="text-2xl font-bold mb-2">{{ $post->title }}</a>
                <p>Cuerpo del post: {{ Str::limit($post->body, 100) }}</p>
            </div>
        @endforeach
    </div>
    <div class="mt-10 max-w-xl mx-auto">
        <h1>Categorias</h1>
        <br>
        @foreach(\App\Models\Category::all() as $category)
            <div class="border-b mb-5 pb-5 border-gray-200">
                <p>Nombre de categoria: {{ $category->name }}</p>
                <p>Color de la categoria: {{ $category->color }} </p>
            </div>
        @endforeach
    </div>

@endsection