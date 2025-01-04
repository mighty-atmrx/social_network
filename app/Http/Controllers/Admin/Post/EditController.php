<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\Post\BaseController;
use App\Models\Post;
use App\Models\PostTag;
use App\Models\Tag;

class EditController extends BaseController
{
    public function __invoke(Post $post){
        $posts_qty = Post::all();
        $tags = Tag::all();
        return view('admin.post.edit', compact('post', 'tags', 'posts_qty'));
    }
}
