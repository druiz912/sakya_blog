<div class="flex">
    <div class="w-full md:w-1/2 mb-2">
        @if(session()->has('success'))
            <div class="bg-green-500 text-white p-2">
                {{ session()->get('success') }}
            </div>
        @endif
        @if(session()->has('error'))
            <div class="bg-red-500 text-white p-2">
                {{ session()->get('error') }}
            </div>
        @endif
        @if($addPost)
            @include('livewire.post.create')
        @endif
        @if($updatePost)
            @include('livewire.post.update')
        @endif
    </div>
    <div class="w-full md:w-1/2">
        <div class="card">
            <div class="card-body">
                @if(!$addPost)
                <button wire:click="addPost()" class="bg-blue-500 text-white p-2 float-right hover:bg-blue-400">Add New Post</button>
                @endif
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="p-2">Name</th>
                                <th class="p-2">Description</th>
                                <th class="p-2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($posts) > 0)
                                @foreach ($posts as $post)
                                    <tr>
                                        <td class="p-2">
                                            {{$post->title}}
                                        </td>
                                        <td class="p-2">
                                            {{$post->description}}
                                        </td>
                                        <td class="p-2">
                                            <button wire:click="editPost({{$post->id}})" class="bg-blue-500 text-white p-2 hover:bg-blue-400">Edit</button>
                                            <button onclick="deletePost({{$post->id}})" class="bg-red-500 text-white p-2 hover:bg-red-400">Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="3" align="center" class="p-2">
                                        No Posts Found.
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
