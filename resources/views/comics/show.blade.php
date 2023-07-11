@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1>Detagli</h1>

    <div class="card" style="width: 18rem;">
        <img src="{{$comic->thumb}}" class="card-img-top" alt="{{$comic->title}}">
        <div class="card-body">
          <h5 class="card-title">{{$comic->title}}</h5>
          <p class="card-text">{{$comic->description}}</p>
          <a href="{{ route("home")}}" class="btn btn-primary">Torna alla lista dei Comics</a>
        </div>
    </div>
    <a href="{{ route("comics.create")}}" class="btn btn-primary m-4">Torna al Create</a>

</div>

@endsection