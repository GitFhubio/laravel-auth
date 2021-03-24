<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class PublicController extends Controller
{
    public function index(){
        if(Auth::check()){
            $user = Auth::user();
            // dd($user) è un null
            $name->$user->name;
            $logged=true;}
            else{
        $logged=false;
        $name='';
            }
        // return view('public-example',['logged'=>$logged,'name'=>$name]);
        return view('public-example',compact('logged','name'));
    }
}
