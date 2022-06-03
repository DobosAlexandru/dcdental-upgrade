<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;


class BlogController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('front.blog.index',[
            'page' => [
                'title' => 'Blog',
                'top_title' => 'Blog',
                'description' => 'Blog DC dental'
            ],
            'posts' => $posts
        ]);
    }

    public function show(Post $post){
        return view('front.blog.show', compact('post'),[
            'page' => [
                'title' => $post->title,
                'description' => $post->meta_description
            ]
        ]);
    }
}
