@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Film: {{ $ticket->movie->title }}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
            <span class="font-weight-bold">Biljettnummer: </span>
        </div>
        <div class="col-md-8">
            <span class="stand-out">{{ $ticket->id }}</span>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
            <span class="font-weight-bold">Datum och tid: </span>
        </div>
        <div class="col-md-2">
            <span class="stand-out" title="{{ Carbon\Carbon::parse($ticket->time)->format('Y-m-d H:i') }}">{{ Carbon\Carbon::parse($ticket->time)->format('d/m - l') }}</span>
        </div>
        <div class="col-md-2">
            <span class="stand-out" title="{{ Carbon\Carbon::parse($ticket->time)->format('Y-m-d H:i') }}">{{ Carbon\Carbon::parse($ticket->time)->format('H:i') }}</span>
        </div>
        <div class="col-md-4">
            @if (Carbon\Carbon::parse($ticket->time)->isPast() == true)
                ❌ ogiltigt
            @else
                ✅ giltigt
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
            <span class="font-weight-bold">Stolsnummer: </span>
        </div>
        <div class="col-md-8">
            <span class="stand-out">{{ $ticket->seat }}</span>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
            <span class="font-weight-bold">Pris: </span>
        </div>
        <div class="col-md-8">
            <span class="stand-out">{{ $ticket->price }} kr</span>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
            <span class="font-weight-bold">Salong: </span>
        </div>
        <div class="col-md-8">
            <span class="stand-out">{{ $ticket->cinema->name }}</span>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('tickets.edit', $ticket->id) }}"><button class="button editbutton">Redigera</button></a>
        </div>
    </div>
@endsection
