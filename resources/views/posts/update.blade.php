@extends('Layout')
@section('content')

    <div class="container mt-5  mx-auto">
        <h1 class="text-3xl text-center mb-3">Update Posts {{$post->name}}</h1>


        <div class="w-2/4 mx-auto mb-3 bg-gray-50 shadow border p-5">

            <form action="/post/update/{{$post->id}}" method="post">
                @csrf
                {{ method_field('PUT') }}
                <label  class="block mt-3 font-semobold" for="title">Title</label>
                <input type="text" name="title" id="title" value="{{old('title')?old('title'):$post->name}}" class="w-full border py-1 border-blue-500"  />
                @if($errors->any())<span class="block text-red-500 text-xs">{{  $errors->first('title')}}</span>@endif


                <label  class="block mt-3 font-semobold" for="image">Image</label>
                <input type="text" name="image" id="image"  value="{{old('image')?old('image'):$post->cover_image}}" class="w-full border py-1 border-blue-500"  />
                @if($errors->any())<span class="block text-red-500 text-xs">{{  $errors->first('image')}}</span>@endif

                <label  class="block mt-3 font-semobold" for="description">Description</label>
                <textarea name="description" id="description" cols="30" rows="10" class="w-full border py-1 border-blue-500">{{old('description')?old('description'):$post->description}}</textarea>
                @if($errors->any())<span class="block text-red-500 text-xs">{{  $errors->first('description')}}</span>@endif


                <label  class="block mt-3 font-semobold" for="category">Category</label>
                <select  name="category" id="category"  value="{{old('category')}}" class="w-full border py-1 border-blue-500">
                    <option value="">Select --</option>
                   @foreach($categories as $category)
                        <option value="{{$category}}" selected="{{$category==$post->category}}">{{$category}}</option>
                    @endforeach


                </select>
                @if($errors->any())<span class="block text-red-500 text-xs">{{  $errors->first('category')}}</span>@endif


                <button type="submit" class="mt-5 bg-blue-500 text-white w-full py-2">Update</button>
            </form>
        </div>


    </div>

@endsection

