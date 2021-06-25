<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function posts(){
        return view('posts', [
            'posts' => Post::with('user')->latest()->paginate(10) // Genera paginacion para que todos los cards no aparezcan en una sola pagina
        ]);
    }

    public function post(Post $post){
        return view('post',[
            'post' => $post
        ]);
    }
}
