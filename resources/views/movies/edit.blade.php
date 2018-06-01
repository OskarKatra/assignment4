
@extends('layouts.app')

@section('content')
    <h1>Uppdatera film</h1>
    <form class="" action="{{ route('movies.update', $movie->id) }}" method="post">
        @method('PUT')
        @csrf
        <div class="form-group">
            <h2>ID {{ $movie->id }}</h2>
        </div>
        <div class="form-group">
            <label for="">Titel</label>
            <input type="text" name="title" value="{{ $movie->title }}">
        </div>
        <div class="form-group">
            <label for="">Genre</label>
            <input type="text" name="genre" value="{{ $movie->genre }}">
        </div>
        <div class="form-group">
            <label for="">Speltid</label>
            <input type="number" step="any" name="runtime" value="{{ $movie->runtime }}"><span>minuter</span>
        </div>
        <input button class="button updatebutton" type="submit" name="submit" value="Uppdatera"></button>
    </form>

    <form class="" action="{{ route('movies.destroy', $movie->id) }}" method="post">
        @method('DELETE')
        @csrf
        <input button class="button deletebutton" type="submit" name="submit" value="Radera"></button>
    </form>
@endsection
