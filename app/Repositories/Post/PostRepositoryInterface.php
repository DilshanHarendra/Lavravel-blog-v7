<?php


namespace App\Repositories\Post;


interface PostRepositoryInterface
{
   public function create($data);
   public function update($id,$data);
   public function delete();
   public function getAll();
   public function getById($id);

}
