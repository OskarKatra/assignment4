@extends('layouts.app')

@section('content')
    <h1>Updatera biosal</h1>

    <form class="" action="{{ route('cinemas.update', $cinema->id) }}" method="post">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" name="title" value="{{ $cinema->title }}">
        </div>
        <div class="form-group">
            <label for="">Nummer</label>
            <input type="number" step="any" name="number" value="{{ $cinema->number }}">
            <label for="">Antal platser</label>
            <input type="number" step="any" name="seat" value="{{ $cinema->seat }}">
        </div>
        <input type="submit" name="submit" value="Update">
    </form>

    <form class="" action="{{ route('cinemas.destroy', $cinema->id) }}" method="post">
        @method('DELETE')
        @csrf
        <input type="submit" name="submit" value="Delete">
    </form>
@endsection
