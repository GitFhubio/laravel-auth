<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class PublicAController extends Controller
{
    public function index(){
        // alternativa è dire if empty user
        if(Auth::check()){
            $user = Auth::user();
            // dd($user) è un null
            $name=$user->name;
            $logged=true;}
            else{
        $logged=false;
        // devo inviarlo al template anche vuoto,giusto per passarlo
        $name='';
            }
        // return view('public-example',['logged'=>$logged,'name'=>$name]);
        return view('public-example',compact('logged','name'));
    }
}
