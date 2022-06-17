<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserDetailsRequest;
use App\Http\Requests\UserPasswordRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class UserSettingsController extends Controller
{
    public function index(User $user)
    {
        return view('user.settings.index', compact('user'));
    }

    public function details(User $user)
    {
        return view('user.settings.details', compact('user'));
    }

    public function password(User $user)
    {
        return view('user.settings.password', compact('user'));
    }

    public function updateDetails(User $user, UserDetailsRequest $request)
    {
        if ($user->provider) {
            Alert::toast('Cannot update details', 'warning');
            return redirect()->route('settings.details.show');
        }

        if ($user->update($request->only(['name', 'username', 'email'])))
            Alert::toast('Update success', 'success');

        return redirect()->route('settings.details.show');
    }


    public function updatePassword(User $user, UserPasswordRequest $request)
    {
        if (!$request->old_pw)
            $user->update([
                'password' => Hash::make($request->new_pw)
            ]);

        return redirect()->route('settings.index');
    }
}
