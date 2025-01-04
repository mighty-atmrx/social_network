<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\Post\BaseController;
use App\Http\Requests\Post\StoreRequest;
use App\Models\Post;
use App\Models\PostTag;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request){
        $data = $request->validated();

        $this->service->store($data);

        return redirect()->route('admin.post.index');
    }
}