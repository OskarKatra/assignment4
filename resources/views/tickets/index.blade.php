@extends('layouts.app')

@section('content')
    <h1>Alla biljetter</h1>
    <p>Här finns det alla biljetter:</p>
    @foreach ($tickets as $ticket)
        <a href="{{ route('tickets.show', $ticket->id) }}">{{ $ticket->id }} - {{ $ticket->movie->title }}</a><br>
    @endforeach
    <br>
    <a href="{{ route('tickets.create') }}"><button class="button new">Ny biljett</button></a>
@endsection
