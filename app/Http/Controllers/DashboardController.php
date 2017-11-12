<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Auth;
use App\User;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $title = "| ".auth()->user()->name;

        $user_id = auth()->user()->id;
        $user = User::find($user_id);

        return view('dashboard')->with('title',$title)->with('posts',$user->posts);
    }
}
