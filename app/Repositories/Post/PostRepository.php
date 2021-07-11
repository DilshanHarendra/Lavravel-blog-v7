<?php
namespace App\Repositories\Post;
use App\Models\Post\Post;


class PostRepository implements PostRepositoryInterface
{

    public function create($data)
    {
        // TODO: Implement create() method.
            $post = new Post();
            $post->name=$data['title'];
            $post->description=$data['description'];
            $post->category=$data['category'];
            $post->cover_image=$data['image'];

            $post->save();

        return  $post;
    }
    public function update()
    {
        // TODO: Implement update() method.
    }

    public function delete()
    {
        // TODO: Implement delete() method.
    }

    public function getAll()
    {
        // TODO: Implement getAll() method.
        return Post::paginate(10);
    }

    public function getById($id)
    {
        // TODO: Implement getById() method.
    }
}
