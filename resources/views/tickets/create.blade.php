@extends('layouts.app')

@section('content')
    <form class="" action="{{ route('tickets.store') }}" method="post">
        @csrf
        <div class="form-group">
            <h1>Skapa ny biljett</h1>
        </div>
        <div class="form-group">
            <label for="">Tid</label>
            <input type="datetime-local" name="time" value="">
            <label for="">Plats</label>
            <input type="number" step="any" name="seat" value="">
            <label for="">Pris</label>
            <input type="number" step="any" name="price" value="">
        </div>
        <div class="form-group">
            <label for="">Biosalong</label>
            <select class="form-control" name="cinema_id" required>
                <option value=""></option>
                @forelse ($cinemas as $cinema_id=>$cinema_name)
                    <option value="{{$cinema_id}}">{{$cinema_name}}</option>
                @empty
                    <option value="" disabled>Inga biosalonger tillgängliga</option>
                @endforelse
            </select>
        </div>
        <div class="form-group">
            <label for="">Film</label>
            <select class="form-control" name="movie_id" required>
                <option value=""></option>
                @forelse ($movies as $movie_id=>$movie_title)
                    <option value="{{$movie_id}}">{{$movie_title}}</option>
                @empty
                    <option value="" disabled>Inga filmer tillgängliga</option>
                @endforelse
            </select>
        </div>

        <input type="submit" name="submit" value="Skapa">
    </form>
    <a href="{{ route('tickets.index') }}">Titta på alla biljetter</a>
@endsection
