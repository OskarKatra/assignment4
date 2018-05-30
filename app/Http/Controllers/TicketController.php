<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $tickets = Ticket::all();

        return view("tickets.index", [
            "tickets" => $tickets
        ]);
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view("tickets.create");
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
            $ticket = new Ticket;
            $ticket->time = $request->time;
            $ticket->seat = $request->seat;
            $ticket->cinema_id = $request->cinema_id;
            $ticket->movie_id = $request->movie_id;
            $ticket->user_id = $request->user_id;
            $ticket->save();
        }
        catch(\Exception $e) {
            return redirect()->route('tickets.index');
        }

        // return redirect()->route('tickets.show', ['id' => $ticket->id]);
        return redirect()->route('tickets.index');
    }

    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function show($id)
    {
        $ticket = Ticket::find($id);
        return view("tickets.show", [
            "ticket" => $ticket
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
        $ticket = Ticket::find($id);
        return view("tickets.edit", [
            "ticket" => $ticket
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
        $ticket = Ticket::find($id);
        $ticket->time = $request->time;
        $ticket->seat = $request->seat;
        $ticket->cinema_id = $request->cinema_id;
        $ticket->movie_id = $request->movie_id;
        $ticket->user_id = $request->user_id;
        $ticket->save();

        return redirect()->route('tickets.show', ['id' => $id]);
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {
        $ticket = Ticket::find($id);
        $ticket->delete();

        return redirect()->route('tickets.index');
    }
}
