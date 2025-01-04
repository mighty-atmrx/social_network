<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\Post\BaseController;
use App\Models\Post;
use App\Models\Tag;

class CreateController extends BaseController
{
    public function __invoke()
    {
        $posts_qty = Post::all();
        $tags = Tag::all();
        return view('admin.post.create', compact('posts_qty', 'tags'));
    }
}
