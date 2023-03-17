<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    //
    function post(){

        return view('post');
    }

function store(Request $request){
    $request -> validate([
            "title"  => "required",
            "image"  => "required",
            "caption"   => "required",]);

    
        if($request->file('image')){
            $path= $request -> file('image')->store('images',['disk' => 'public']);
        }

    $post = Post::create([
        "title"  => $request->title,
        "image"  =>$path, 
        "caption"  =>$request->caption,
         ]);

      return redirect()->route('post.posts');   

    }
    
    // function posts(){

    //     return view('posts',['image'=>'$path']);
    // }

public function show(){
        $posts = Post::all();

        return view('posts',['posts' => $posts]);
    }


function showEdit($id){

        $post = Post::find($id);


        return view('edit',['post' => $post]);
    }

function editPost(Request $request,$id){

    
         $post =Post::find($id);
        
            if($request->file('image')){
                $path= $request -> file('image')->store('images',['disk' => 'public']);
            }
    
        $post -> update([
            "title"  => $request->title?? $post ->title,
            "image"  =>$path ?? $post->image, 
            "caption"  =>$request->caption?? $post->caption,
             ]);
    
             return redirect()->route('post.posts');
            }

function delete($id){

    $post=Post::find($id);

    $post->delete();

    return redirect()->route('post.posts');
}            

}
