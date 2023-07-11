@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1>Crate Comics</h1>
  
    <div class="row  gap-3">
      <form action="{{ route('comics.store') }}" method="post">
        
        @csrf
        <div class="mb-3">
          <label for="name" >Title</label>
          <input type="text" name="title" class="form-control" placeholder= "Titolo">
        </div>
        
        <div class="mb-3">
          <label for="name" >Description</label>
          <input type="text" name="description" class="form-control" placeholder= "Descrizione">
        </div>
        <div class="mb-3">
          <label for="name" >Thumb</label>
          <input type="text" name="thumb" class="form-control" placeholder= "Immagine">
        </div>
        
        <div class="mb-3">
          <label for="name" >Price</label>
          <input type="text" name="price" class="form-control" placeholder= "Prezzo">
        </div>

        <div class="mb-3">
          <label for="name" >Series</label>
          <input type="text" name="series" class="form-control" placeholder= "serie">
        </div>

        <div class="mb-3">
          <label for="name" >Sale_date</label>
          <input type="text" name="sale_date" class="form-control" placeholder= "Data d'uscita">
        </div>

        <div class="mb-3">
          <label for="name" >Type</label>
          <input type="text" name="type" class="form-control" placeholder= "Tipo">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

      </form>
      
      <a href="{{ route("home")}}" class="btn btn-primary">Torna alla lista dei Comics</a>

       
      
    </div>

</div>
@endsection