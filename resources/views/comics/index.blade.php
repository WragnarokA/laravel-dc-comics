@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1>Welcome Comics</h1>
  
    <div class="row justify-content-between gap-3">
   
            
                @foreach ($comics as $comic)
                <div class="card" style="width: 18rem;">
                    <img src="{{$comic->thumb}}" class="card-img-top" alt="{{$comic->title}}">
                    <div class="card-body">
                      <h5 class="card-title">{{$comic->title}}</h5>
                      <p class="card-text">{{$comic->description}}</p>
                      <a href="{{ route("comics.show", $comic->id)}}" class="btn btn-primary">{{$comic->title}}</a>
                    </div>
                  </div>
                    
                @endforeach
       
      
    </div>

</div>
@endsection