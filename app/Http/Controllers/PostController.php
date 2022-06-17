<?php

namespace App\Http\Controllers;

use App\Http\Enum\PostLimit;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;


class PostController extends Controller
{
    public function store(PostRequest $request)
    {
        if (Auth::user()->isPostingLimitToday(PostLimit::FREE)) {
            Alert::toast('Post Limit 🎉', 'warning');
            return redirect()->back();
        }

        if (Auth::user()->posts()->create($request->only('title', 'description')))
            Alert::toast('Post created 🎉', 'success');

        return redirect()->back();
    }

    public function show(Post $post)
    {
        $post = Post::where('id', $post->id)->withCount([
            'comments',
        ])->with([
            'comments' => function ($query) {
                return $query->whereNull('parent_id')->with(['user.provider']);
            },
        ])->first();

        return view('user.post.index', compact('post'));
    }

}
