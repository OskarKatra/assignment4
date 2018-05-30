@extends('layouts.app')

@section('content')

    <form class="" action="{{ route('tickets.store') }}" method="post">
        @csrf
        <div class="form-group">
            <h1>Skapa ny biljett</h1>
        </div>
        <div class="form-group">
            <label for="">Tid</label>
            <input type="datetime-local" name="time" value="">
            <label for="">Plats</label>
            <input type="number" step="any" name="seat" value="">

        </div>
        <input type="submit" name="submit" value="Skapa">
    </form>
    <a href="{{ route('tickets.index') }}">Titta på alla biljetter</a>
@endsection
