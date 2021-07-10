<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\PostCreateRequest;
use Illuminate\Http\Request;


class PostController extends Controller
{

    private $repository;

    public function __construct()
    {

    }




    public function showIndex(){
        return view('posts.index');
    }

    public function showCreateForm(){
        return view('posts.create');
    }

    public function handleCreate(PostCreateRequest $request){



        dd($request);


    }

}
