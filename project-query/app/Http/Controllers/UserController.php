<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function showUsers(){
        $users = DB::table('users')->get();
        // return $users;
        return view('Users', ['data'=>$users]);
    }
    public function singleUser(string $id){
        $users = DB::table('users')->where('id',$id)->get();
        // return $users;
        return view('Users', ['data'=>$users]);
    }
}
