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
    public function update($id,$data)
    {
        // TODO: Implement update() method.
       /* $post = $this->getById($id);
        $post->name=$data['title'];
        $post->description=$data['description'];
        $post->category=$data['category'];
        $post->cover_image=$data['image'];

        $post->save();
        return $post;
*/
        $post=array(
            'name'=>$data['title'],
            'description'=>$data['description'],
            'category'=>$data['category'],
            'cover_image'=>$data['image']
        );

        return Post::where('id',$id)->update($post);

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

        return Post::where('id',$id)->first();
    }
}
