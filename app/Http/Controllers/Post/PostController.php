<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\PostCreateRequest;
use Illuminate\Http\Request;
use App\Repositories\Post\PostRepositoryInterface;

class PostController extends Controller
{

    private $repository;

    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->repository=$postRepository;
    }




    public function showIndex(){
        $data=$this->repository->getAll();
        return view('posts.index',['posts'=>$data]);
    }

    public function showCreateForm(){
        return view('posts.create');
    }

    public function handleCreate(PostCreateRequest $request){

        $this->repository->create($request->all());
        $data=$this->repository->getAll();
        return view('posts.index',['posts'=>$data]);
    }

}
