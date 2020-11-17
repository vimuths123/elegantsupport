<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ticket;
use Session;
use Auth;

class HomeController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        return view('home');
    }

    public function createTicket(Request $request) {
        if ($request->isMethod('post')) {
            
            unset($request['_token']);
            
            $reference = uniqid();
            $request['reference'] = $reference;
            $request['status'] = 'opened';
            $request['user_id'] = Auth::user()->id;
//            dd($request->all());
            $ticket = Ticket::create($request->all());

            Session::flash('message', 'Your problem has added to the queue. '
                    . "This is the reference - $reference");
            Session::flash('alert-class', 'alert-success');
        }

        return view('tickets.create_ticket');
    }

}
