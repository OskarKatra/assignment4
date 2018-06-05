@extends('layouts.app')

@section('content')
    <form class="" action="{{ route('tickets.store') }}" method="post">
        @csrf
        <div class="form-group">
            <h1>Skapa ny biljett</h1>
        </div>

        <div class="form-group row">
          <div class="col-md-2">Välj dag:</div>
            <div class="col-md-10">
          <input type="date" min="{{ date('Y-m-d') }}" name="date" required>
          <input type="time" name="time">
            </div>
          </div>
        <div class="form-group row">
            <div class="col-md-2"><label for="">Stolsnummer:</label></div>
            <div class="col-md-10">
            <input type="number" step="any" name="seat" value="" required>
            </div>
        </div>
        <div class="form-group row">
          <div class="col-md-2"><label for="">Pris:</label></div>
          <div class="col-md-10">
            <input type="number" step="any" name="price" value="" required>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-12"><label for="">Biosalong</label></div>
          <div class="col-md-5"><select class="form-control" name="cinema_id" required>
                <option value=""></option>
                @forelse ($cinemas as $cinema_id=>$cinema_name)
                    <option value="{{$cinema_id}}">{{$cinema_name}}</option>
                @empty
                    <option value="" disabled>Inga biosalonger tillgängliga</option>
                @endforelse
            </select>
            </div>
        </div>
        <div class="form-group row">
          <div class="col-md-12"><label for="">Film</label></div>
            <div class="col-md-5"><select class="form-control" name="movie_id" required>
                <option value=""></option>
                @forelse ($movies as $movie_id=>$movie_title)
                    <option value="{{$movie_id}}">{{$movie_title}}</option>
                @empty
                    <option value="" disabled>Inga filmer tillgängliga</option>
                @endforelse
            </select>
           </div>
          </div>
        <input button class="button createbutton" type="submit" name="submit" value="Skapa"></button>
    </form>
    <a href="{{ route('tickets.index') }}"><button class="button viewall">Titta på alla biljetter</button></a>
@endsection
