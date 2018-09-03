<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public funtion show(User $user){
        return view('user.show', compact('user'));
    }//
}
