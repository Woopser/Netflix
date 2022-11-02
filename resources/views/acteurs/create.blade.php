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
        <label for="nomActeur">Nom de l'acteur</label>
        <input type="text" name="nom">
        <label for="nomActeur">Prenom de l'acteur</label>
        <input type="text" name="prenom">
        <label for="nomActeur">Âge de l'acteur</label>
        <input type="text" name="age">
        <label for="nomActeur">Taille de l'acteur (en cm)</label>
        <input type="text" name="taille">
        <label for="nomActeur">Image de l'acteur</label>
        <input type="text" name="image">
        <button type="submit">Enregisterer</button>

    </form>

    @endsection
</body>
</html>