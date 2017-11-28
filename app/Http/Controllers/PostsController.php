<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index(){
       return view('posts.index');
    }
    public function show(){
       return view('posts.show');
    }
    public function create(){
       return view('posts.create');
    }
    public function store(){
      //validate the request database
      $this->validate(request(), [
        'title' => 'required',
        'body' => 'required'
      ]);

      //create a post
      Post::create(request(['title', 'body']));

      //redirect to the homepage
      return redirect('/');
    }

}
