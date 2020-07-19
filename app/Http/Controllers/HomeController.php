<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }

    public function show($id){

    }

    public function create(){

    }

    public function update($id){

    }

    public function store(){

    }

    public function delete($id){

    }

    public function contact(){
        return view('contact');
    }

    public function about(){
        return view('about');
    }


}
