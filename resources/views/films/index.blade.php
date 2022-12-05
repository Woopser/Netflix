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
              <a href="{{route('films.show', [$film])}}">
              <img src="{{$film->image}}" width="70%" height="100%">
              </a>  
      
             @endforeach
            @endif
          </div>
          
    </section>
    
    <section class="main-container">
      <div class="location" id="home">
        <h1>Science-Fiction</h1>
        <div class="box">
          @if(count($films))
              @foreach ($filmScience as $film)
              <a>
              <img src="{{$film->image}}" width="70%" height="100%">
              </a>  
      
             @endforeach
            @endif
        </div>
      </div>
    </section>

    <section class="main-container">
      <div class="location" id="home">
        <h1>Horreur</h1>
        <div class="box">
          @if(count($films))
              @foreach ($filmHorreur as $film)
              <a>
              <img src="{{$film->image}}" width="70%" height="100%">
              </a>  
      
             @endforeach
            @endif
        </div>
      </div>
    </section>
    
    <br><br>
          <div style="text-align: center">
            <a id="bouttonAj" href="{{ route('films.create') }}">Ajouter un film</a>
          </div>

     
    <!-- END OF MAIN CONTAINER -->

@endsection