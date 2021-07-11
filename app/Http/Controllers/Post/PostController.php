<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\PostCreateRequest;
use App\Mail\Post\PostEmail;
use Illuminate\Http\Request;
use App\Repositories\Post\PostRepositoryInterface;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class PostController extends Controller
{

    private $repository;
    public $categories=array("sport","political","education","health");
    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->repository=$postRepository;
    }




    public function showIndex(){
        $data=$this->repository->getAll();
        return view('posts.index',['posts'=>$data]);
    }

    public function showCreateForm(){
        return view('posts.create',['categories'=>$this->categories]);
    }

    public function handleCreate(PostCreateRequest $request){

        $this->repository->create($request->all());
        return Redirect::route('home');
    }

    public  function  showUpdateForm(Request $request){

        $post=$this->repository->getById($request->route()->id);

        if ($post!=null)
        {
            return view('posts.update',['post'=>$post,'categories'=>$this->categories]);
        }
        else
        {
            return Redirect::route('home');
        }

    }

    public function handleUpdate(PostCreateRequest  $request)
    {

        $post=$this->repository->update($request->route()->id,$request->all());
        return Redirect::route('home');
    }

    public function viewPost(Request $request){
        $post=$this->repository->getById($request->route()->id);

        if ($post!=null)
        {
            Mail::to('xineli9152@ovooovo.com')->send( new PostEmail($post));
            return view('posts.post',['post'=>$post]);
        }
        else
        {
            return Redirect::route('home');
        }
    }


}
