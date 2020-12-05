<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::paginate(1);
        $categories = Category::all();
        return view('front.home',compact('posts','categories'));
    }

    public function post($id){

        $posts = Post::findOrFail($id);

        $comments = $posts->comments()->whereIsActive(1)->get();
        $categories = Category::all();

        return view('post',compact('posts','comments','categories'));

    }
}
