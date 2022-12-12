
    @extends('layouts.app')


    @section('titre', 'Modifier Acteur')


    @section('contenu')

    <h1>Modifier un usagers</h1>
    <form method="POST" action="{{ route('usagers.update', [$usager->id]) }}">
        @csrf
        @method('PATCH')
        
        <label for="nomActeur">Nom de l'acteur</label>
        <input type="text" name="email" value="{{old('email',$usager->email)}}">
        <label for="nomActeur">identification</label>
        <input type="text" name="identification" value="{{old('identification',$usager->identification)}}">

        <button type="submit">Enregisterer</button>


    </form>

    @endsection