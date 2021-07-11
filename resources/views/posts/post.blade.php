@extends('Layout')
@section('content')

    <div class="container mt-5 mx-auto">

                <div class="border p-5 bg-white shadow md:w-2/4 w-full mx-auto mb-5">
                    <h1 class="text-3xl mb-1">{{$post->name}}</h1>
                    <p class="mb-3 font-semibold bg-yellow-500 text-white px-4 py-1 rounded-full text-xs" style="width: fit-content">{{$post->category}}</p>
                    <img src="{{$post->cover_image}}" alt="{{$post->name}}" class="w-full mx-auto h-96 object-cover">
                    <div class=" mx-auto mb-3 mt-3">
                        {{$post->description}}
                    </div>
                    <div class="flex items-center">
                        <a href="/post/update/{{$post->id}}" class="px-4 py-2 rounded-sm bg-green-500 hover:bg-opacity-50 text-white">Update</a>
                        <button class="px-4 py-2 rounded-sm bg-red-500 hover:bg-opacity-50 text-white ml-4">Delete</button>
                    </div>

                </div>


    </div>


@endsection


