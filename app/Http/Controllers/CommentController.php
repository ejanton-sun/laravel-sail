<?php

namespace App\Http\Controllers;

use App\Http\Enum\CommentLimit;
use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class CommentController extends Controller
{
    public function index(Post $post, Comment $comment)
    {
        // return response()->json($comment);
        return view('user.comment.index', compact('comment'));
    }

    public function store(Post $post, CommentRequest $request)
    {
        // if (Auth::user()->isCommentingLimitToday(CommentLimit::FREE)) {
        //     Alert::toast('Comment Limit 🎉', 'warning');
        //     return redirect()->back();
        // }

        if ($post->comments()->create([
            'user_id' => Auth::id(),
            'description' => $request->only('description')
        ]))
            Alert::toast('Comment added 💬', 'success');


        return redirect()->back();
    }

    public function storeReply(Post $post, Comment $comment, CommentRequest $request)
    {
        // if (Auth::user()->isCommentingLimitToday(CommentLimit::FREE)) {
        //     Alert::toast('Comment Limit 🎉', 'warning');
        //     return redirect()->back();
        // }

        if ($post->comments()->create([
            'user_id' => Auth::id(),
            'parent_id' => $comment->id,
            'description' => $request->only('description')
        ]))
            Alert::toast('Comment added 💬', 'success');

        return redirect()->back();
    }
}
