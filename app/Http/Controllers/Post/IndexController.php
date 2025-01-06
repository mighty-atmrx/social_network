<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Filters\PostFilter;
use App\Http\Requests\FilterRequest;
use App\Http\Resources\Post\PostResource;
use App\Models\Post;
use App\Models\Tag;

class IndexController extends BaseController
{
    public function __invoke(FilterRequest $request)
    {
        $data = $request->validated();

//        $page = $data['page'] ?? 1;
//        $perPage = $data['perPage'] ?? 10;

        $filter = app()->make(PostFilter::class, ['queryParams' => array_filter($data)]);
        $posts = Post::filter($filter)->paginate(10);

//        $posts = Post::filter($filter)->paginate($perPage, ['*'], 'page', $page);

//        return PostResource::collection($posts);

        return view('post.index', compact('posts'));
    }
}

