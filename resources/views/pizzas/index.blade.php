@extends('layouts.app')
@section('nav')
<div class="my-nav d-flex justify-content-around align-items-center">
    <div class="left text-center"><h1 class="text-center uppercase">Pizzas List</h1></div>
    <div class="center text-center">
    </div>
    @if(Auth::check())
    <div class="right text-center">

    <a href="{{route('pizzas.create')}}" class="btn btn-dark btn-lg active" role="button" aria-pressed="true">Create a new pizza</a>
</div>
@endif
</div>
@endsection
@section('content')
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Description</th>
              <th scope="col">Price</th>
              <th scope="col">Cover</th>
              <th scope="col">Options</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($pizzas as $pizza)
              <tr>
                <th  class="align-middle" scope="row">{{$pizza->id}}</th>
                <td  class="align-middle">{{$pizza->name}}</td>
                <td  class="align-middle" >{{$pizza->description}}</td>
                <td  class="align-middle">{{$pizza->price}}</td>
                <td  class="align-middle"><img src="{{$pizza->cover}}" width="150" alt=""></td>
                <td class="align-middle text-center" >
                    <a href="{{route('public.pizzas.show',compact('pizza'))}}" class="btn btn-primary">Show<i class="fa fa-eye"></i></a>
                    @if(Auth::check())
                    <a href="{{route('pizzas.edit',['pizza'=>$pizza->id])}}" class="btn btn-success">Edit<i class="fas fa-edit"></i></a>
                    <!-- Button trigger modal -->
              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal{{$pizza->id}}">Delete<i class="fas fa-trash"></i>
                      </button>
                      @include('layouts.modal')
                      @endif
              </td>
            </tr>
            @endforeach
@endsection


