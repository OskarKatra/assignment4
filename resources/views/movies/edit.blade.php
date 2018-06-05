
@extends('layouts.app')

@section('content')
    <h1>Uppdatera film</h1>
    <form class="" action="{{ route('movies.update', $movie->id) }}" method="post">
        @method('PUT')
        @csrf
        <div class="form-group">
            <h2>ID {{ $movie->id }}</h2>
        </div>
        <div class="form-group row">
            <div class="col-md-1"><label for="">Titel:</label></div>
            <div class="col-md-10"><input type="text" name="title" value="{{ $movie->title }}" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-1"><label for="">Genre:</label></div>
            <div class="col-md-10"><input type="text" name="genre" value="{{ $movie->genre }}" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-1"><label for="">Speltid:</label></div>
            <div class="col-md-10"><input type="number" step="any" name="runtime" value="{{ $movie->runtime }}" required><span> minuter</span>
           </div>
        </div>
        <input button class="button updatebutton" type="submit" name="submit" value="Uppdatera"></button>
    </form>

    <form class="" action="{{ route('movies.destroy', $movie->id) }}" method="post">
        @method('DELETE')
        @csrf
        <input button class="button deletebutton" type="submit" name="submit" value="Radera"></button>
    </form>
@endsection
