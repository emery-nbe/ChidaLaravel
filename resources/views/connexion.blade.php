@extends('layouts.app')

@section('title', 'Chida | Connexion')

@section('other-style')


href="{{asset('css/connexion.css')}}""

@endsection


@section('content')

<form action="" method="POST">
    <h2>Connexion</h2>
    <input name="email" placeholder="your email adress" class="userdata" required>
    <input name="password" type="password" placeholder="password" class="userdata" required>
    <button type="submit">Se connecter</button>
    <a href="#">Créer un compte</a>
</form>


@endsection
