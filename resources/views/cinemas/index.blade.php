@extends('layouts.app')

@section('content')
    <h1>Alla biosalar</h1>
    <p>Här finns det alla biosalar:</p>
    @foreach ($cinemas as $cinema)
        <a href="{{ route('cinemas.show', $cinema->id) }}">{{ $cinema->name }}</a><br>
    @endforeach
    <br>
    <a href="{{ route('cinemas.create') }}"><button class="button new">Ny biosal</button></a>
@endsection
