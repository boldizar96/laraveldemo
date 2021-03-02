<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function show($slug)
    {
        //$post = DB::table('posts')->where('slug', $slug)->first();
        //$post = Post::where('slug', $slug)->firstOrFail();

        //dd($post);

        /*
        if(!$post)
        {
            abort(404);
        }
        */

        return view('test',[
            'post' => Post::where('slug', $slug)->firstOrFail()
        ]);
    }
}
