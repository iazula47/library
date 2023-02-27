<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $data = User::all();
        return view('user.index',['users'=>$data]);
    }

    /*public function show($id){
        $data=array(
            "id"=>$id,
            "name"=>"Eric John Agapen",
            "age"=>20,
            "email"=>"agapeneric@gmail.com"
             );
             return view('user', $data);
    }*/

}
