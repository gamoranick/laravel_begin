<?php

namespace App\Http\Controllers\Admin\Post;


use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\Post;
use App\Service\PostService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Post $post)
    {
        $data = $request->validated();
        $post = $this->postService->update($data, $post);

        return view('admin.posts.show', compact('post'));
    }
}

