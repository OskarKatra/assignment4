@extends('layouts.app')

@section('content')
    <h1>Id: {{ $cinema->id }}</h1>
    <p>Salongnamn: {{ $cinema->name }}</p>
    <p>Antal platser: {{ $cinema->seats }}</p>
    <a href="{{ route('cinemas.edit', $cinema->id) }}"><button class="button editbutton">Redigera</button></a>
@endsection
