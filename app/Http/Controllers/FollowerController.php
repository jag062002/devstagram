<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FollowerController extends Controller
{
    public function store(User $user) //User persona que voy a seguir y el request la persona que le dio click a seguir (seguidor)
    {
        $user->followers()->attach(auth()->user()->id);
        return back();
    }

    public function destroy(User $user)
    {
        $user->followers()->detach(auth()->user()->id);
        return back();
    }
}
