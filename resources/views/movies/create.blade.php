@extends('layouts.app')

@section('content')
    <form class="" action="{{ route('movies.store') }}" method="post">
        @csrf
        <div class="form-group">
            <h1>Skapa ny film</h1>
        </div>
        <div class="form-group row">
            <div class="col-md-1"><label for="">Titel:</label></div>
            <div class="col-md-10"><input type="text" name="title" value="">
           </div>
        </div>
        <div class="form-group row">
            <div class="col-md-1"><label for="">Genre:</label></div>
            <div class="col-md-10"><input type="text" name="genre" value="">
           </div>
        </div>
        <div class="form-group row">
            <div class="col-md-1"><label for="">Speltid:</label>  </div>
            <div class="col-md-10"><input type="number" step="any" name="runtime" value=""><span> minuter</span>
            </div>
        </div>
        <input button class="button createbutton" type="submit" name="submit" value="Skapa"></button>
    </form>
    <a href="{{ route('movies.index') }}"><button class="button viewall">Titta på alla filmer</button></a>
@endsection
