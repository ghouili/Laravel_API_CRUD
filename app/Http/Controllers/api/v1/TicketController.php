<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTicketRequest;
use App\Http\Resources\TicketResource;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index(){

        // return response()->json('controller works');
        // return Ticket::all();
        return TicketResource::collection(Ticket::all());


    }

    public function store(StoreTicketRequest $request) {

        Ticket::create($request->validated());
        return response()->json('ticket created successfully');

    }

    public function update(StoreTicketRequest $request, Ticket $ticket){

        $ticket->update($request->validated());
        return response()->json('updated successfully');

    }

    public function destroy(Ticket $ticket) {
        $ticket->delete();
        return response()->json('ticketdeleted succefully');
    }
}
