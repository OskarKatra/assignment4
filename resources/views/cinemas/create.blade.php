@extends('layouts.app')

@section('content')

    <form class="" action="{{ route('cinemas.store') }}" method="post">
        @csrf
        <div class="form-group row">
          <div class="col-md-12">
            <h1>Skapa ny biosal</h1>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-2">
            <label for="">Salongnamn:</label>
          </div>
          <div class="col-md-10">
            <input type="text" step="any" name="name" value="" required>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-2">
            <label for="">Antal platser:</label>
          </div>
          <div class="col-md-10">
            <input type="number" step="any" name="seats" value="" required>
          </div>
        </div>
        <input button class="button createbutton" type="submit" name="submit" value="Skapa"></button>
    </form>
    <a href="{{ route('cinemas.index') }}"><button class="button viewall">Titta på alla biosalar</button></a>
@endsection
