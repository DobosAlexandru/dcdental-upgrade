<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use App\Http\Middleware\Authenticate;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $today = new \DateTime();

        return view('front.home',[
            'page' => [
                'title' => 'Clinica Implantologie si Chirurgie Maxilo Faciala',
                'description' => 'Centrul de implantologie si chirurgie maxilo faciala DC dental coordonata de Dr. Drochioi Cristian ofera tratamente la cele mai inalte standarde in Iasi si Botosani.'
            ],

            /* Afiseaza ultimele 3 postari pentru feature pe home */

            /* 'posts' => Post::where('featured', true)
                ->whereNotNull('published_at')
                ->where('published_at', '<=' , $today)
                ->latest()
                ->take(3)
                ->get(), */
        ]);
    }
}
