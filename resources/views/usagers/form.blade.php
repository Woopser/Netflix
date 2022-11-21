@extends('layouts.app')


@section('titre', 'Login')


@section('contenu')

<h1>Login</h1>
<form method="POST" action="{{ route('usagers.login') }}">
    @csrf
    
    <div id="formele">
        <label for="nomActeur">Email</label>
        <input type="text" name="email">
    </div>

    <div id="formele">
        <label for="nomActeur">Mot de passe</label>
        <input type="text" name="password">
    </div>

    <button type="submit">Enregistrer</button>

</form>

@endsection
