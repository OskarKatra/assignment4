@extends('layouts.app')

@section('content')
    <h1>Uppdatera biosalong</h1>

    <form class="" action="{{ route('cinemas.update', $cinema->id) }}" method="post">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="">ID {{ $cinema->id }}</label>
            <h1>ID </h1>
        </div>
        <div class="form-group">
            <label for="">Salongnamn</label>
            <input type="text" step="any" name="name" value="{{ $cinema->name }}">
            <label for="">Antal platser</label>
            <input type="number" step="any" name="seats" value="{{ $cinema->seats }}">
        </div>
        <input type="submit" name="submit" value="Uppdatera">
    </form>

    <form class="" action="{{ route('cinemas.destroy', $cinema->id) }}" method="post">
        @method('DELETE')
        @csrf
        <input type="submit" name="submit" value="Radera">
    </form>
@endsection
