@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1>Detagli</h1>

    <div class="card" style="width: 18rem;">
        <img src="{{$comic->thumb}}" class="card-img-top" alt="{{$comic->title}}">
        <div class="card-body">
          <h5 class="card-title">{{$comic->title}}</h5>
          <p class="card-text">{{$comic->description}}</p>
          <p class="card-text">{{$comic->series}}</p>
          <p class="card-text">{{$comic->sale_date}}</p>
          <p class="card-text">{{$comic->price}}</p>
          <a href="{{ route("home")}}" class="btn btn-primary">Torna alla lista dei Comics</a>
        </div>
    </div>
    <a href="{{ route("comics.create")}}" class="btn btn-primary m-4">Vai al Create</a>
    <a href="{{ route("comics.edit", $comic)}}" class="btn btn-primary m-4">Modifica</a>

    <form action="{{ route('comics.destroy', $comic) }}" method="post"">
      @csrf
      @method('DELETE')
      <input class="btn btn-danger m-4" type="submit" value="Cancella">
    </form>


</div>

@endsection