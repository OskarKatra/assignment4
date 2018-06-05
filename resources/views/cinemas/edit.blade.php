@extends('layouts.app')

@section('content')


    <form class="" action="{{ route('cinemas.update', $cinema->id) }}" method="post">
        @method('PUT')
        @csrf
        <div class="form-group row">
          <div class="col-md-12">
            <h1>Uppdatera biosalong</h1>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-12">
            <h2>ID {{ $cinema->id }}</h2>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-2">
            <label for="">Salongnamn:</label>
          </div>
          <div class="col-md-10">
              <input type="text" step="any" name="name" value="{{ $cinema->name }}" required>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-2">
            <label for="">Antal platser:</label>
          </div>
          <div class="col-md-10">
            <input type="number" step="any" name="seats" value="{{ $cinema->seats }}" required>
          </div>
        </div>
        <input button class="button updatebutton" type="submit" name="submit" value="Uppdatera"></button>
    </form>

    <form class="" action="{{ route('cinemas.destroy', $cinema->id) }}" method="post">
        @method('DELETE')
        @csrf
        <input button class="button deletebutton" type="submit" name="submit" value="Radera"></button>
    </form>
@endsection
