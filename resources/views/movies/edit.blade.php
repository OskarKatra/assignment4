@extends('layouts.app')

@section('content')
    <h1>Updatera biosal</h1>

    <form class="" action="{{ route('movies.update', $movie->id) }}" method="post">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="">ID {{ $movie->id }}</label>
            <h1>ID </h1>
        </div>
        <div class="form-group">
            <label for="">Filmnamn</label>
            <input type="text" step="any" name="name" value="{{ $movie->name }}">
            <label for="">Längd</label>
            <input type="number" step="any" name="duration" value="{{ $movie->duration }}">
        </div>
        <input type="submit" name="submit" value="Uppdatera">
    </form>

    <form class="" action="{{ route('movies.destroy', $movie->id) }}" method="post">
        @method('DELETE')
        @csrf
        <input type="submit" name="submit" value="Radera">
    </form>
@endsection
