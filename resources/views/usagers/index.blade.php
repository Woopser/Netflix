@extends('layouts.app')

@section('titre', 'Netflix')


@section('contenu')
    <!-- MAIN CONTAINER -->
    <section class="main-container" >
      <div class="location" id="home">
          <h1 id="home">Usager de Netflix</h1>
          <div class="box">
            @if(count($usagers))
              @foreach ($usagers as $usager)
              <div>
                <p id="actorname">{{$usager->email}}</p>
                <p id="actorname">{{$usager->identification}} (inutile)</p>
                <form method="POST" action="{{route('usagers.destroy', [$usager->id])}}">
                    @csrf
                    @method('DELETE')
                    <button id="bouttonAj" type="submit">Supprimer l'usager</button>
                    <a id="bouttonAj" href="{{ route('usagers.create') }}">Ajouter un usager</a>
                    <a id="bouttonAj" href="{{ route('usagers.edit', [$usager->id])  }}">Modifier un usager</a>
                </form>
              </div>
      
             @endforeach
            @endif
          </div>
          
    </section>

    <br><br>
          {{-- <div style="text-align: center">
           
            
          </div> --}}

@endsection