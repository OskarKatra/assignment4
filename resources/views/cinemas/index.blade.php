@extends('layouts.app')

@section('content')
    <h1>Alla biosal</h1>
    <p>Här finns det alla biosal i databasen</p>
    @foreach ($cinemas as $cinema)
        <a href="{{ route('cinemas.show', $cinema->id) }}">{{ $cinema->name }}</a><br>
    @endforeach
    <br>
    <a href="{{ route('cinemas.create') }}">Ny biosal</a>
@endsection
