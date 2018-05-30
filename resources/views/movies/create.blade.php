@extends('layouts.app')

@section('content')

    <form class="" action="{{ route('movies.store') }}" method="post">
        @csrf
        <div class="form-group">
            <h1>Skapa ny film</h1>
        </div>
        <div class="form-group">
            <label for="">Filmnamn</label>
            <input type="text" step="any" name="name" value="">
            <label for="">Längd</label>
            <input type="number" step="any" name="duration" value="">

        </div>
        <input type="submit" name="submit" value="Skapa">
    </form>
    <a href="{{ route('movies.index') }}">Titta på alla filmer</a>
@endsection
