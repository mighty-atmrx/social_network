<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\Post\BaseController;
use App\Models\Post;

class ShowController extends BaseController
{
    public function __invoke(Post $post){
        $posts_qty = Post::all();
        return view('admin.post.show', compact('post', 'posts_qty'));
    }
}
