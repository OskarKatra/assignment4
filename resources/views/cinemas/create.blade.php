@extends('layouts.app')

@section('content')

    <form class="" action="{{ route('cinemas.store') }}" method="post">
        @csrf
        <div class="form-group">
            <h1>Skapa ny biosal</h1>
        </div>
        <div class="form-group">
            <label for="">Salongnamn</label>
            <input type="text" step="any" name="name" value="">
            <label for="">Antal platser</label>
            <input type="number" step="any" name="seats" value="">

        </div>
        <input type="submit" name="submit" value="Skapa">
    </form>
    <a href="{{ route('cinemas.index') }}">Titta på alla biosalar</a>
@endsection
