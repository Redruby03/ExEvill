<?php

namespace App\Http\Controllers;

use App\category;
use App\Category as AppCategory;
use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $post = Post::paginate(5);
        $data =[
            'post'=>$post
        ];


        return view('home',$data);
    }

    public function show($id){

    }

    public function create(){
        $category = category::all();
        $data =[
            "category" => $category
        ];
        return view('create',$data);
    }

    public function update($id){

    }

    public function store(request $request){
        $details = $request->input('details');
        $category_id = $request->input('category_id');
        $post= new Post();

        $post->user_id=1;
        $post->status=0;
        $post->details = $details;
        $post->category_id = $category_id;

        $post->save();

        return redirect('/');

    }

    public function delete($id){
        if($id== ""){
            return redirect('/');
        }

        $post = Post::find($id);
        $post -> delete();

        return redirect('/');

    }


    public function login(){
        return view('login');
    }


}
