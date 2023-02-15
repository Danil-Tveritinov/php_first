<?php

namespace App\Http\Controllers;

use App\Models\Post2;
use Illuminate\Http\Request;

class Post2Controller extends Controller
{
    public function index() {
        $post = Post2::find(1);
        dump($post->id);
        dump($post->name);
        dump($post->content);
        dump($post->Likes);

    }
    
}
