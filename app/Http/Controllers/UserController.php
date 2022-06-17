<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(User $user)
    {
        $user->posts = $user->posts()->withCount(['comments'])->latest()->simplePaginate();

        return view('user.profile.index', compact('user'));
    }
}
