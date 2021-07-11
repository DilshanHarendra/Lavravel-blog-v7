@extends('Layout')
@section('content')

<div class="container mt-5 mx-auto">
    <div class="flex justify-end">
        <a href="/create" class="bg-blue-500 text-white px-4 py-2">Create</a>
    </div>

    @foreach($posts as $post)
        <a href="/post/update/{{$post->id}}" class="md:w-2/4 mx-auto block mb-5">
            <div class="border p-5 bg-white shadow">
                <h1 class="text-3xl mb-1">{{$post->name}}</h1>
                <p class="mb-3 font-semibold bg-yellow-500 text-white px-4 py-1 rounded-full text-xs" style="width: fit-content">{{$post->category}}</p>
                <img src="{{$post->cover_image}}" alt="{{$post->name}}" class="w-full mx-auto h-96 object-cover">
                <div class=" mx-auto mb-3 mt-3">
                    {{$post->description}}
                </div>
            </div>

        </a>
    @endforeach





</div>

@endsection


