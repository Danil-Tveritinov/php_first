<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {

        $posts = Post::all();

        return view("posts", compact('posts'));


    }

    public function create()
    {
        $postsArr = [
            [
                'title' => 'title of post from phpstorm',
                'content' => 'some interesting content',
                'image' => 'imageblabla. jpg',
                'Likes' => 20,
                'is_published' => 1,
            ],
            [
                'title' => 'another title of post from phpstorm',
                'content' => 'another some interesting content',
                'image' => 'another imageblabla. jpg',
                'Likes' => 50,
                'is_published' => 1,
            ],
        ];

        foreach ($postsArr as $item) {
            Post::create([
                'title' => $item['title'],
                'content' => $item['content'],
                'image' => $item['image'],
                'Likes' => $item['Likes'],
                'is_published' => $item['is_published'],
            ]);
        }
        dd('create');
    }

    public function update()
    {
        $post = Post::find(15);

        $post->update([
            'title' => '1111 updated',
            'content' => '1111 updated',
        ]);
        dd ('updated');
    }

    public function delete()
    {
        $post = Post::withTrashed()->find(4);
        $post->restore();
        dd ('deleted');
    }

    // firstOrCreate
    // update0rCreate

    public function firstOrCreate()
    {
        $post = Post::find(1);

        $anotherPost = [
            'title' => 'some post',
            'content' => 'some content',
            'image' => 'some imageblabla. jpg',
            'Likes' => 50000,
            'is_published' => 1,
        ];

        $post = Post::firstOrCreate([
            'title' => 'some title phpstorm'
        ],[
            'title' => 'some title phpstorm',
            'content' => 'some content',
            'image' => 'some imageblabla. jpg',
            'Likes' => 50000,
            'is_published' => 1,
        ]);
        dump ($post->content);
        dd('finished');
    }

    public function updateOrCreate()
    {
        $anotherPost = [
            'title' => 'updateorcreate some post',
            'content' => 'updateorcreate some content',
            'image' => 'updateorcreate some imageblabla. jpg',
            'Likes' => 500,
            'is_published' => 0,
        ];

        $post = Post::updateOrCreate([
            'title' => 'some title not phpstorm'
        ],[
            'title' => 'some title not phpstorm',
            'content' => 'its not update some content',
            'image' => 'its not update some imageblabla. jpg',
            'Likes' => 500,
            'is_published' => 0,
        ]);
        dump($post->content);
        dd(2222);

    }



}
