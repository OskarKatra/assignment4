<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $movies = Movie::all();

        return view("movies.index", [
            "movies" => $movies
        ]);
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view("movies.create");
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        try {
            $movie = new Movie;
            $movie->name = $request->name;
            $movie->duration = $request->duration;
            $movie->save();
        }
        catch(\Exception $e) {
            return redirect()->route('movies.index');
        }

        // return redirect()->route('movies.show', ['id' => $movie->id]);
        return redirect()->route('movies.index');
    }

    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function show($id)
    {
        $movie = Movie::find($id);
        return view("movies.show", [
            "movie" => $movie
        ]);
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function edit($id)
    {
        $movie = Movie::find($id);
        return view("movies.edit", [
            "movie" => $movie
        ]);
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, $id)
    {
        $movie = Movie::find($id);
        $movie->name = $request->name;
        $movie->duration = $request->duration;
        $movie->save();

        return redirect()->route('movies.show', ['id' => $id]);
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {
        $movie = Movie::find($id);
        $movie->delete();

        return redirect()->route('movies.index');
    }
}
