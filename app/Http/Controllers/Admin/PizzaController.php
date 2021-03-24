<?php

// devo cambiare namespace perche lho spostato in admin
namespace App\Http\Controllers\Admin;
use App\Pizza;
use Illuminate\Http\Request;
// devo inserire questo use(me lo dice l'ide,da solo devo ricordarmi della variazione nel namespace)
use App\Http\Controllers\Controller;

class PizzaController extends Controller
{
    // public function __construct(){
    //     $this->middleware('auth');
    // }
    /**no
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // qui dentro index e show praticamente non le uso piu
    public function index()
    {
    //  $pizzas= Pizza::all();
    //  return view('pizzas.index',compact('pizzas'));
    return redirect()->route('public.pizzas.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return view('pizzas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    $this->validateForm($request);
      $data=$request->all();
      $pizza=new Pizza();
      $pizza->fill($data);
      $pizza->save();
      return redirect()->route('pizzas.show',compact('pizza'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Pizza $pizza)
    {
        return redirect()->route('public.pizzas.show',compact('pizza'));
        // qui potevo passare anche solo $pizza senza compact
    //  return view('pizzas.show',compact('pizza'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pizza $pizza)
    {
     return view('pizzas.edit',compact('pizza'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pizza $pizza)
    {
    $this->validateForm($request);
     $data=$request->all();
     $pizza->update($data);
     return redirect()->route('pizzas.show',compact('pizza'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pizza $pizza)
    {
       $pizza->delete();
       return redirect()->route('pizzas.index');
    }
    protected function validateForm(Request $request){
      $request->validate([
          'name'=>'required|max:50',
          'description'=>'required|max:255',
          'price'=>'required|numeric|between:0,9.99',
          'cover'=>'required|url'
      ]);
    }
}
