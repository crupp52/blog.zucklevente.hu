<?php

namespace App\Http\Controllers\Admin;

use App\Forms\Admin\PostForm;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Kris\LaravelFormBuilder\FormBuilder;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $posts = Post::paginate(15);

        return view('admin.post.index', [
            'posts' => $posts,
        ]);
    }
    public function create(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(PostForm::class, [
            'method' => 'POST',
            'url'    => route('admin.post.store'),
            'model'  => new Post(),
        ]);

        return view('admin.post.form', [
            'form' => $form,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  PostRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(PostRequest $request): \Illuminate\Http\RedirectResponse
    {
        $fields = $request->all();
        $fields['user_id'] = Auth::id();

        if (!($post = Post::create($fields))) {
            return redirect()->back();
        }

        return redirect()->route('admin.post.edit', [
            'post' => $post,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(FormBuilder $formBuilder, Post $post)
    {
        $form = $formBuilder->create(PostForm::class, [
            'method' => 'PUT',
            'url'    => route('admin.post.update', [
                'post' => $post,
            ]),
            'model'  => $post,
        ]);

        return view('admin.post.form', [
            'form' => $form,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Post $post): \Illuminate\Http\RedirectResponse
    {
        if (!$post->update($request->all())) {
            return redirect()->back();
        }

        return redirect()->route('admin.post.edit', [
            'post' => $post,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Post $post): \Illuminate\Http\RedirectResponse
    {
        if (!$post->delete()) {
            return redirect()->back();
        }

        return redirect()->route('admin.post.index');
    }
}
