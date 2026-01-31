<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;

class PostController extends Controller
{
    public function index() {}

    public function create() {}

    public function store(PostRequest $request)
    {
        $validated = $request->validate();
        Post::create($validated);
    }

    public function show() {}

    public function edit() {}

    public function update() {}

    public function destroy() {}
}
