@extends('layouts.app')

@section('content')

    <form class="" action="{{ route('cinemas.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" name="title" value="">
        </div>
        <div class="form-group">
            <label for="">Nummer</label>
            <input type="number" step="any" name="number" value="">
            <label for="">Antal platser</label>
            <input type="number" step="any" name="seat" value="">

        </div>
        <input type="submit" name="submit" value="Create">
    </form>
    <a href="{{ route('cinemas.index') }}">Titta på alla biosal</a>
@endsection
