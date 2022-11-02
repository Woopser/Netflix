@extends('layouts.app')

@section('titre', 'Netflix')

    <!-- END OF HEADER -->
    @section('contenu')
    <a href="{{ route('acteurs.create') }}"></a>
    <!-- MAIN CONTAINER -->
    <section class="main-container" >
      <div class="location" id="home">
          <h1 id="home">Everything On Netflix</h1>
          <div class="box">
            @if(count($films))
              @foreach ($films as $film)
              <a>
              <img src="{{$film->image}}" width="70%" height="100%">
              </a>  
      
             @endforeach
            @endif
          </div>
          <a href="{{ route('acteurs.create') }}">Ajouter un acteur</a>
          <a href="{{ route('films.create') }}">Ajouter un film</a>
      
    </section>
    
    <section class="main-container">
      <div class="location" id="home">
        <h1>Science-Fiction</h1>
        <div class="box">
          
        </div>
      </div>
    </section>

     
    <!-- END OF MAIN CONTAINER -->

@endsection