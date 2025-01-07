<?php

namespace App\Services\Post;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\Facades\DB;

class Service
{
    public function store($data){
        try {
            DB::beginTransaction();

            $tags = $data['tags'];
            unset($data['tags']);

            $tagIds = $this->getTagIds($tags);

            $post = Post::create($data);
            $post->tags()->attach($tagIds);

            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            return $exception->getMessage();
        }

        return $post;
    }

    public function update($post, $data){

        try {
            DB::beginTransaction();

            $tags = $data['tags'];
            unset($data['tags']);

            $tagIds = $this->getTagIdsWithUpdate($tags);

            $post->update($data);
            $post->tags()->sync($tagIds);

            DB::commit();
        }catch (\Exception $exception){
            DB::rollBack();
            return $exception->getMessage();
        }
        return $post->fresh();
    }


    private function getTagIds($post){
        $tagIds = [];

        foreach($post->tags as $tag){
            $tag = !isset($tag['id']) ? Tag::create($tag) : Tag::find($tag['id']);
            $tagIds[] = $tag->id;
        }

        return $tagIds;
    }


    private function getTagIdsWithUpdate($tags){
        $tagIds = [];

        foreach ($tags as $tag){
            if(!isset($tag['id'])){
                $tag = Tag::create($tag);
            }else{
                $currentTag = Tag::find($tag['id']);
                $currentTag->update($tag);
                $tag = $currentTag->fresh();
            }
            $tagIds[] = $tag->id;
        }

        return $tagIds;
    }
}
