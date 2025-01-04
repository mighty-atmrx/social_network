<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\Post\BaseController;
use App\Http\Filters\PostFilter;
use App\Http\Requests\FilterRequest;
use App\Models\Post;

class IndexController extends Controller {
    public function __invoke(FilterRequest $request){
        $data = $request->validated();

        $filter = app()->make(PostFilter::class, ['queryParams' => array_filter($data)]);
        $posts = Post::filter($filter)->paginate(10);
        $posts_qty = Post::all();
        return view('admin.post.index', compact('posts', 'posts_qty'));
    }
}
