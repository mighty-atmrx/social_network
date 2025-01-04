<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\Post\BaseController;
use App\Http\Requests\Post\UpdateRequest;
use App\Models\Post;
use Faker\Provider\Base;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Post $post){
        $data = $request->validated();

        $this->service->update($post, $data);

        return redirect()->route('admin.post.show', $post->id);
    }
}
