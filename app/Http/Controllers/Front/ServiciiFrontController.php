<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Serviciu;
use Illuminate\Http\Request;

class ServiciiFrontController extends Controller
{

    public function show(Serviciu $serviciu){
        $posts = Post::all();
        return view('front._service.'.$serviciu->slug , [
            'posts' => $posts,
            'page' => [
                'nav_title' => $serviciu->nav_title,
                'title'=> $serviciu->title,
                'description' => $serviciu->meta_description,
                'tagline' => $serviciu->tagline,
                'cover_image' => $serviciu->cover_image,
                'video_id' => $serviciu->video_id
            ]
        ]);
    }
}
