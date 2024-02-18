<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showUser(string $id){
        return view("user", ["id"=> $id]);
    }

    public function showHome(){
        return view("welcome");
    }

    public function showBlog(){
        return view("blog");
    }
}
