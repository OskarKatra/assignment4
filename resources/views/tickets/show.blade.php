@extends('layouts.app')

@section('content')
    <h1>{{ $ticket->id }}</h1>
    <p>Tid: {{ $ticket->time}}</p>
    <p>Plats: {{ $ticket->seat }}</p>
    <a href="{{ route('tickets.edit', $ticket->id) }}"><button class="button editbutton">Redigera</button></a>
@endsection
