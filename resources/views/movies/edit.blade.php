@extends('layouts.app')

@section('content')
    <h1>Uppdatera film</h1>
    <form class="" action="{{ route('movies.update', $movie->id) }}" method="post">
        @method('PUT')
        @csrf
        <div class="form-group">
            <h1>ID {{ $movie->id }}</h1>
        </div>
        <div class="form-group">
            <label for="">Titel</label>
            <input type="text" name="title" value="{{ $movie->title }}">
            <label for="">Genre</label>
            <input type="text" name="genre" value="{{ $movie->genre }}">
            <label for="">Speltid</label>
            <input type="number" step="any" name="runtime" value="{{ $movie->runtime }}"><span>minuter</span>
        </div>
        <input type="submit" name="submit" value="Uppdatera">
    </form>

    <form class="" action="{{ route('movies.destroy', $movie->id) }}" method="post">
        @method('DELETE')
        @csrf
        <input type="submit" name="submit" value="Radera">
    </form>
@endsection
