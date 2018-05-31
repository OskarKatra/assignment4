@extends('layouts.app')

@section('content')
    <h1>Uppdatera biosalong</h1>

    <form class="" action="{{ route('cinemas.update', $cinema->id) }}" method="post">
        @method('PUT')
        @csrf
        <div class="form-group">
            <h2>ID {{ $cinema->id }}</h2>
        </div>
        <div class="form-group">
            <label for="">Salongnamn</label>
            <input type="text" step="any" name="name" value="{{ $cinema->name }}">
        </div>
        <div class="form-group">
            <label for="">Antal platser</label>
            <input type="number" step="any" name="seats" value="{{ $cinema->seats }}">
        </div>
        <input button class="button updatebutton" type="submit" name="submit" value="Uppdatera"></button>
    </form>

    <form class="" action="{{ route('cinemas.destroy', $cinema->id) }}" method="post">
        @method('DELETE')
        @csrf
        <input button class="button deletebutton" type="submit" name="submit" value="Radera"></button>
    </form>
@endsection
