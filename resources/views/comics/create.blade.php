@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1>Crate Comics</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
  
    <div class="row  gap-3">
      <form action="{{ route('comics.store') }}" method="post" class="needs-validation">
        
        @csrf
        <div class="mb-3">
          <label for="name" >Title</label>
          <input type="text" name="title" class="form-control  @error('title') is-invalid @enderror" placeholder= "Titolo">
          @error('title')
              <div class="invalid-feedback">{{ $message }}</div>
          @enderror
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        
        <div class="mb-3">
          <label for="name" >Description</label>
          <input type="text" name="description" class="form-control  @error('description') is-invalid @enderror" placeholder= "Descrizione">
          @error('description')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="name" >Thumb</label>
          <input type="text" name="thumb" class="form-control  @error('thumb') is-invalid @enderror" placeholder= "Immagine">
          @error('thumb')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror  

        </div>

        <div class="mb-3">
          <label for="name" >Price</label>
          <input type="text" name="price" class="form-control  @error('price') is-invalid @enderror" placeholder= "Prezzo">
          @error('price')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror    
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