<?php

namespace App\Http\Controllers\API\Post;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Post\BaseController;
use App\Models\Tag;

class CreateController extends BaseController
{
    public function __invoke()
    {
        $tags = Tag::all();
        return view('post.create', compact('tags'));
    }
}
