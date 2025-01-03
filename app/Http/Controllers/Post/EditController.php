<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\PostTag;
use App\Models\Tag;

class EditController extends BaseController
{
    public function __invoke(Post $post){
        $tags = Tag::all();
        return view('post.edit', compact('post', 'tags'));
    }
}
