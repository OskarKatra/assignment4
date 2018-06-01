@extends('layouts.app')

@section('content')
    <h1>Id: {{ $movie->id }}</h1>
    <p>Titel: {{ $movie->title }}</p>
    <p>Genre: {{ $movie->genre }}</p>
    <p>Speltid: {{ $movie->runtime }} min</p>
    <a href="{{ route('movies.edit', $movie->id) }}"><button class="button editbutton">Redigera</button></a>
@endsection
