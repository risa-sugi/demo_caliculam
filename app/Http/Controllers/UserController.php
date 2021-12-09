<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    use App\User;
    
    public function index(User $user){
        return view('User.index')->wiht(['own_posts' => $user->getOwnPaginateByLimit()]);
    }
}
