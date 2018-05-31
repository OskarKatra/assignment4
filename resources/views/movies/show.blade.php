@extends('layouts.app')

@section('content')
    <h1>{{ $movie->id }}</h1>
    <p>Titel: {{ $movie->title }}</p>
    <p>Genre: {{ $movie->genre }}</p>
    <p>Speltid: {{ $movie->runtime }}</p>
    <a href="{{ route('movies.edit', $movie->id) }}">Edit</a>
@endsection
