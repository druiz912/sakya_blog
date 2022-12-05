<div class="pt-6 pb-12 bg-gray-300">
    @foreach($posts as $post)
    <section class="dark:bg-gray-800 dark:text-gray-100">
        <div class="container max-w-6xl p-6 mx-auto space-y-6 sm:space-y-12">
            <a rel="noopener noreferrer" href="/post/{{ $post->slug }}" class="block max-w-sm gap-3 mx-auto sm:max-w-full group hover:no-underline focus:no-underline lg:grid lg:grid-cols-12 dark:bg-gray-900">
                <img src="{{$post->image}}" alt="" class="object-cover w-full h-64 rounded sm:h-96 lg:col-span-7 dark:bg-gray-500">
                <div class="p-6 space-y-2 lg:col-span-5">
                        <h3 class="text-2xl font-semibold sm:text-4xl group-hover:underline group-focus:underline">{{$post->title}}</h3>
                        <span class="text-xs dark:text-gray-400">{{$post->published ? 'Publicado' : 'Borrador'}}</span>
                        <p>{{ Str::limit($post->body, 100) }}</p>
                    </div>
                </a>
                <a href="#"
                onclick="confirm('¿Estás seguro de eliminar este post?') || event.stopImmediatePropagation()"
                wire:click="delete({{ $post->id }})"
                class="text-red-600 hover:text-red-900">Delete</a>
            </section>
        @endforeach
</div>