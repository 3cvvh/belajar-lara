<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function postbyuser(User $user){
        return view('userpost',[
            'data' => $user->post,
            'judul' => $user->name
        ]);
    }
}
