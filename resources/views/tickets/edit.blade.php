@extends('layouts.app')

@section('content')
    <h1>Updatera biljett</h1>

    <form class="" action="{{ route('tickets.update', $ticket->id) }}" method="post">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="">ID {{ $ticket->id }}</label>
            <h1>ID </h1>
        </div>
        <div class="form-group">
            <label for="">Tid</label>
            <input type="datetime-local" name="time" value="{{ $ticket->time }}">
            <label for="">Plats</label>
            <input type="number" step="any" name="seat" value="{{ $ticket->seat }}">
        </div>
        <input type="submit" name="submit" value="Uppdatera">
    </form>

    <form class="" action="{{ route('tickets.destroy', $ticket->id) }}" method="post">
        @method('DELETE')
        @csrf
        <input type="submit" name="submit" value="Radera">
    </form>
@endsection
