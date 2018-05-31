@extends('layouts.app')

@section('content')
    <h1>{{ $cinema->id }}</h1>
    <p>Salongnamn: {{ $cinema->name }}</p>
    <p>Antal platser: {{ $cinema->seats }}</p>
    <a href="{{ route('cinemas.edit', $cinema->id) }}">Redigera</a>
@endsection
