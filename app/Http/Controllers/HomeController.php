<?php

namespace App\Http\Controllers;

use App\category;
use App\Category as AppCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home');
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

    public function store(){

    }

    public function delete($id){

    }


    public function login(){
        return view('login');
    }


}
