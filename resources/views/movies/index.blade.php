@extends('layouts.app')

@section('content')
    <h1>Alla filmer</h1>
    <p>Här finns det alla filmer:</p>
    @foreach ($movies as $movie)
        <a href="{{ route('movies.show', $movie->id) }}">{{ $movie->name }}</a><br>
    @endforeach
    <br>
    <a href="{{ route('movies.create') }}">Ny film</a>
@endsection
