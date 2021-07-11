@extends('Layout')
@section('content')

<div class="container mt-5 mx-auto">
    <div class="flex justify-end">
        <a href="/create" class="bg-blue-500 text-white px-4 py-2">Create</a>
    </div>

    @foreach($posts as $post)
        <div>
            <h1 class="text-3xl text-center mb-3">{{$post->name}}</h1>

            <img src="{{$post->cover_image}}" alt="{{$post->name}}" class="w-10/12 md:w-3/4 mx-auto h-96 object-cover">
            <div class=" mx-auto mb-3 mt-3">
                {{$post->description}}
            </div>
        </div>
    @endforeach





</div>

@endsection


