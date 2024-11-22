<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('dashboard',compact('posts'));
    }
    public function create(){
        return view('create');
    }
    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'description'=>'required'
        ]);

        Post::create([
            'name'=>$request->name,
            'description'=>$request->description
        ]);
        return redirect()->route('posts.index')->with('sucess','Post Add Success');
    }
    public function edit(Post $post){
        return view('edit',compact('post'));
    }
    public function update(Request $request,Post $post){
        $request->validate([
            'name'=>'required',
            'description'=>'required'
        ]);

        $post->update($request->all());
        return redirect()->route('posts.index')->with('sucess','Post Update Success');
    }
    public function destroy(Post $post){
        $post->delete();
        return redirect()->route('posts.index')->with('sucess','Post Deleted Success');
    }
}
