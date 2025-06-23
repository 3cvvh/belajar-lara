<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Post;
use App\Models\post as ModelsPost;

class PostController extends Controller
{
    public function index(){
          return view('posts',[
        'judul' => 'blog | page',
        'blog' => post::all()
    ]);
    }
    public function singles( ModelsPost $post){
                 return view('single', [
        'judul' => 'single | page',
        'post' => $post
    ]);
    }
}
