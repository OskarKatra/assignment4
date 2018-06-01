@extends('layouts.app')

@section('content')
    <h1>Uppdatera biljett</h1>

    <form class="" action="{{ route('tickets.update', $ticket->id) }}" method="post">
        @method('PUT')
        @csrf
        <div class="form-group">
            <h2>ID {{ $ticket->id }}</h2>
        </div>
        <div class="form-group">
            Välj dag:
            <input type="date" min="{{ date('Y-m-d') }}" name="date" value="{{ Carbon\Carbon::parse($ticket->time)->format('Y-m-d') }}">
            <input type="time" name="time" value="{{ Carbon\Carbon::parse($ticket->time)->format('H:i') }}">
        </div>
        <div class="form-group">
            <label for="">Plats</label>
            <input type="number" step="1" name="seat" value="{{ $ticket->seat }}">
        </div>
        <div class="form-group">
            <label for="">Pris</label>
            <input type="number" step="any" name="price" value="{{ $ticket->price }}">
        </div>
        <div class="form-group">
            <label for="">Biosalong</label>
            <select class="form-control" name="cinema_id">
                @foreach($cinemas as $cinema_id=>$cinema_name)
                    <option value="{{$cinema_id}}" {{ ((isset($ticket) && $ticket->cinema_id == $cinema_id)? "selected":"") }}>{{$cinema_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="">Film</label>
            <select class="form-control" name="movie_id">
                @forelse ($movies as $movie_id=>$movie_title)
                    <option value="{{$movie_id}}">{{$movie_title}}</option>
                @empty
                    <option value="" disabled>Inga filmer tillgängliga</option>
                @endforelse
            </select>
        </div>
        <input button class="button updatebutton" type="submit" name="submit" value="Uppdatera"></button>
    </form>

    <form class="" action="{{ route('tickets.destroy', $ticket->id) }}" method="post">
        @method('DELETE')
        @csrf
        <input button class="button deletebutton" type="submit" name="submit" value="Radera"></button>
    </form>
@endsection
