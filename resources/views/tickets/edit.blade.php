@extends('layouts.app')

@section('content')
    <h1>Uppdatera biljett</h1>

    <form class="" action="{{ route('tickets.update', $ticket->id) }}" method="post">
        @method('PUT')
        @csrf
        <div class="form-group">
            <h2>ID {{ $ticket->id }}</h2>
        </div>
        <div class="form-group row">
            <div class="col-md-2">Välj dag:</div>
            <div class="col-md-10">
              <input type="date" min="{{ date('Y-m-d') }}" name="date" value="{{ Carbon\Carbon::parse($ticket->time)->format('Y-m-d') }}" required>
             <input type="time" name="time" value="{{ Carbon\Carbon::parse($ticket->time)->format('H:i') }}" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-2"><label for="">Stolsnummer:</label></div>
              <div class="col-md-10">
            <input type="number" step="1" name="seat" value="{{ $ticket->seat }}" required>
              </div>
        </div>
        <div class="form-group row">
            <div class="col-md-2"><label for="">Pris:</label></div>
            <div class="col-md-10">
            <input type="number" step="any" name="price" value="{{ $ticket->price }}" required>
           </div>
        </div>
        <div class="form-group row">
            <div class="col-md-12"><label for="">Biosalong</label></div>
            <div class="col-md-5"><select class="form-control" name="cinema_id" required>
                @foreach($cinemas as $cinema_id=>$cinema_name)
                    <option value="{{$cinema_id}}" {{ ((isset($ticket) && $ticket->cinema_id == $cinema_id)? "selected":"") }}>{{$cinema_name}}</option>
                @endforeach
            </select>
        </div>
        </div>
        <div class="form-group row">
            <div class="col-md-12"><label for="">Film</label></div>
            <div class="col-md-5"><select class="form-control" name="movie_id" required>
                @forelse ($movies as $movie_id=>$movie_title)
                    <option value="{{$movie_id}}">{{$movie_title}}</option>
                @empty
                    <option value="" disabled>Inga filmer tillgängliga</option>
                @endforelse
            </select>
        </div>
        </div>
        <input button class="button updatebutton" type="submit" name="submit" value="Uppdatera"></button>
    </form>

    <form class="" action="{{ route('tickets.destroy', $ticket->id) }}" method="post">
        @method('DELETE')
        @csrf
        <input button class="button deletebutton" type="submit" name="submit" value="Radera"></button>
    </form>
@endsection
