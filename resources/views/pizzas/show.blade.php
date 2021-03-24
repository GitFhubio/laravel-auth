@extends('layouts.app')
@section('title')
Product
@endsection
@section('content')
    <div class="product-container d-flex align-items-center flex-column">
        <div class="card" style="width: 20rem;">
            <img class="card-img-top" src="{{$pizza->cover}}" alt="Card image cap">
            <div class="card-body">
            <p class="card-text"><strong>#{{$pizza->id}}</strong></p>
            <p class="card-text"><strong>Name: </strong>{{$pizza->name}}</p>
            <p class="card-text"><strong>Description: </strong> {{$pizza->description}}</p>
            <p class="card-text"><strong>Price: </strong> {{$pizza->price}}</p>
            <div class="card-buttons d-flex justify-content-between align-items-center">
            <a href="{{route('pizzas.edit',['pizza'=>$pizza->id])}}" class="btn btn-success">Edit</a>
              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal{{$pizza->id}}">Delete<i class="fas fa-trash"></i>
              </button>
              @include('layouts.modal')
            </div>
            </div>
        </div>
        <div class="buttons">
          <a href="{{route('pizzas.index')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Torna alla lista pizze</a>
          <a href="{{route('pizzas.create')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Inserisci nuova pizza</a>
        </div>
    </div>

    </head>
@endsection
