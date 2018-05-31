<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cinema;

class CinemaController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $cinemas = Cinema::all();

        return view("cinemas.index", [
            "cinemas" => $cinemas
        ]);
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view("cinemas.create");
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
            $cinema = new Cinema;
            $cinema->name = $request->name;
            $cinema->seats = $request->seats;
            $cinema->save();
        }
        catch(\Exception $e) {
            return redirect()->route('cinemas.index');
        }

        // return redirect()->route('cinemas.show', ['id' => $cinema->id]);
        return redirect()->route('cinemas.index');
    }

    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function show($id)
    {
        $cinema = Cinema::find($id);
        return view("cinemas.show", [
            "cinema" => $cinema
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
        $cinema = Cinema::find($id);
        return view("cinemas.edit", [
            "cinema" => $cinema
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
        $cinema = Cinema::find($id);
        $cinema->name = $request->name;
        $cinema->seats = $request->seats;
        $cinema->save();

        return redirect()->route('cinemas.show', ['id' => $id]);
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {
        $cinema = Cinema::find($id);
        $cinema->delete();

        return redirect()->route('cinemas.index');
    }
}
