@extends('layouts.app')
@section('content')
    <h2>Syftet med denna webbplats</h2>
    <p>Med hjälp av denna webbplats kan ni välja film och biosalong, boka biljett och slutligen titta på en spännande film!</p>
    <h3>Resurser</h3>
    <nav>
        <ul>
            <li><a href="{{ route('cinemas.index') }}">Biosalonger</a></li>
            <li><a href="{{ route('movies.index') }}">Filmer</a></li>
            <li><a href="{{ route('tickets.index') }}">Biljetter</a></li>
        </ul>
    </nav>
@endsection
