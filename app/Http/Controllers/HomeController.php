<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::withCount(['comments'])
            ->with(['user.providers'])
            ->latest()
            ->simplePaginate(10);

        // if ($request->ajax()) {
        //     $view = view('data', compact('posts'))->render();
        //     return response()->json('data', $view);
        // }

        return view('user.index', compact('posts'));
    }
}
