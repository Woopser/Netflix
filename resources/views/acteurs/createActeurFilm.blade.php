<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cssNet.css">
    <title>Ajout D'Acteurs</title>
</head>
<body>
    @extends('layouts.app')


    @section('titre', 'Ajout Acteurs')



    @section('contenu')
    <form method="POST" action="{{ route('acteurs.store') }}">
        @csrf
        <select name="acteur_id" id="acteur_id">
            @foreach($acteurs as $acteurs)
            <option value="{{ $acteur->id }}">{{$acteur->nom}}</option>
            @endforeach
        </select>
        <button type="submit">Enregisterer</button>

    </form>

    @endsection
</body>
</html>