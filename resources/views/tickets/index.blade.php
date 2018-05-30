@extends('layouts.app')

@section('content')
    <h1>Alla biljetter</h1>
    <p>Här finns det alla biljetter:</p>
    @foreach ($tickets as $ticket)
        <a href="{{ route('tickets.show', $ticket->id) }}">{{ $ticket->id }}</a><br>
    @endforeach
    <br>
    <a href="{{ route('tickets.create') }}">Ny biljett</a>
@endsection
