<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\PostController;

class HomeController extends Controller
{
    //


       public function home(){
        
    // $allcategories = ['category 1','category 2'];
    $alluser=DB::table('users')->get();
    $posts = Post::all();
    return view('home', compact('alluser','posts'));
    // return view('home', ['users'=>$alluser,
    // 'posts'=> $posts
    // in other way we can use compact() instead of list all the array






    }
}
