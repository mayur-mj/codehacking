<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\PostsRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Photo;
use App\Models\Category;

class AdminPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts=Post::all();
        return view('admin.posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::pluck('name','id')->all();
        return view('admin.posts.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostsRequest $request)
    {
        //
        $input=$request->all();
        // $user=Auth::user();

        if($file=$request->file('photo_id')){
            $name =time().$file->getClientOriginalName();
            $file->move('images',$name);

            $photo=Photo::create(['file'=>$name]);

            $input['photo_id']=$photo->id;
        }

        Auth::user()->post()->create($input);

        return redirect('/admin/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $post = Post::findOrFail($id);
        $categories = Category::pluck('name','id')->all();
        return view('admin.posts.edit',compact('post','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $input=$request->all();

            if($file=$request->file('photo_id')){
                $name =time().$file->getClientOriginalName();
                $file->move('images',$name);

                $photo=Photo::create(['file'=>$name]);

                $input['photo_id']=$photo->id;
            }

            if (is_null(Auth::user()->post()->whereId($id)->first())) {
                // it's null, redirect or do something
                session()->flash('post_not_update','Post Cannot updated ');
                return redirect('admin/posts');
            } else {
                // It's not null, update the post
                Auth::user()->post()->whereId($id)->first()->update($input);
            }
            session()->flash('updated_post','Post Has Been updated ');
            return redirect('admin/posts');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        //
        return $request->all();
    }
}
