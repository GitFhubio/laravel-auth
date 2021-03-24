@php
if(isset($edit) && !empty($edit)){//edit
    $method = 'PUT';
    $url = route('pizzas.update',compact('pizza'));
} else {//create
  $method = 'POST';
  $url = route('pizzas.store');
}
@endphp
@extends('layouts.app')
@section('content')
  <div class="container">
    <form id="validateForm" action="{{$url}}" method="post">
      @csrf
      @method($method)
      <div class="form-group">
        <label for="name">Name</label>
        <input class="form-control {{ $errors->has('name') ? 'is-invalid' : ''}}" type="text" name="title" value="{{isset($pizza) ? $pizza->name : ''}}">
        <div class="invalid-feedback">
          {{$errors->first('name')}}
        </div>
      </div>
      <div class="form-group">
        <label for="materials">Description</label>
        <input class="form-control {{ $errors->has('description') ? 'is-invalid' : ''}}" type="text" name="description" value="{{isset($pizza) ? $pizza->description : ''}}">
        <div class="invalid-feedback">
          {{$errors->first('description')}}
        </div>
      </div>
      <div class="form-group">
        <label for="price">Price</label>
        <input class="form-control {{ $errors->has('price') ? 'is-invalid' : ''}}" type="text" name="price" value="{{isset($pizza) ? $pizza->price : ''}}">
        <div class="invalid-feedback">
          {{$errors->first('price')}}
        </div>
      </div>
      <div class="form-group">
        <label for="cover">Cover</label>
        <input class="form-control {{ $errors->has('cover') ? 'is-invalid' : ''}}" type="text" name="cover" value="{{isset($pizza) ? $pizza->cover : ''}}">
        <div class="invalid-feedback">
          {{$errors->first('cover')}}
        </div>
      </div>
      <div class="d-flex justify-content-between">
        <input class="btn btn-primary" type="submit" name="" value="Invia">
        <a href="{{route('pizzas.index')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Torna alla lista pizze</a>
      </div>
    </form>
  </div>
@endsection
