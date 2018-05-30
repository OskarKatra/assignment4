@extends('layouts.app')

@section('content')
    <h1>{{ $movie->id }}</h1>
    <p>Filmnamn: {{ $movie->name }}</p>
    <p>Längd: {{ $movie->duration }}</p>
    <a href="{{ route('movies.edit', $movie->id) }}">Edit</a>
@endsection
