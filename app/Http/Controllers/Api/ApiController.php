<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pizza;
class ApiController extends Controller
{
    // public function getFirstPizza(){
    //     $firstpizza=Pizza::orderBy('id','asc')->first();
    //     // return response()->json(['1'=>'gino']);
    //     return response()->json($firstpizza->toArray());
    //
    //     return response()->json($firstpizza);
    //     $allpizzas=Pizza::all();
    //     return response()->json($allpizzas);
    //     // return response('gino'); //mi ritorna gino testuale
    //     //obiettivo:creare api che ritorna prima auto nel database
    // }
}
