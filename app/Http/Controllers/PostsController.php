<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use Carbon\Carbon;

class PostsController extends Controller
    {
        
        public function __construct(){
            $this->middleware('auth')->except(['index','show']);
        }


        public function index(){

            $posts = Post::latest()->filter(request(['month','year']))->get();

           /* $archives= Post::archives();*/

            return view('posts.index', compact('posts'));


        }

         public function show(Post $post){


            /*$post = Post::find($id);*/
            return view('posts.show' ,compact('post'));

        }

        public function create(){

            return view('posts.create'); 

        }


        public function store(){


            $this->validate(request(), [

                'title'=>'required',
                'body'=>'required'

            ]);

            auth()->user()->publish(
                new Post(request(['title','body']))

            );


            //this types too.........
           /* Post::create([

                'title' =>request('title'),
                'body' =>request('body'),
                'user_id' =>auth()->id()

            ]);*/

            return redirect('/');

        }



    }
