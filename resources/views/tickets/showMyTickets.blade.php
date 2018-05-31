@extends('layouts.app')

@section('content')
    <h1>Dina biljetter</h1>
    @forelse ($tickets as $ticket)
        <p>Tid: {{ $ticket->time}}</p>
        <p>Plats: {{ $ticket->seat }}</p>
        <p>Pris: {{ $ticket->price }}</p>
        <a href="{{ route('tickets.edit', $ticket->id) }}">Edit</a>
    @empty
        <p>Du har inga biljetter</p>
    @endforelse
@endsection
