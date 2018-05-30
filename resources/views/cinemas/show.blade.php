@extends('layouts.app')

@section('content')
    <h1>{{ $cinema->title }}</h1>
    <p>Nummer: {{ $cinema->number }}</p>
    <p>Antal platser: {{ $cinema->seat }}</p>
    <a href="{{ route('cinemas.edit', $cinema->id) }}">Edit</a>
@endsection
