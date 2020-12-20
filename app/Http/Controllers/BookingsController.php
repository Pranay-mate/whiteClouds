<?php

namespace App\Http\Controllers;
use App\Mail\Mails;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Support\Facades\Validator;
use Illuminate\Notifications\Messages\NexmoMessage;

class BookingsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Bookings = Booking::all();
        return view('bookings.index')->with('Bookings', $Bookings);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bookings.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'to' => 'required|different:from',
        ])->validate();
         $Booking = new Booking();
         $Booking->Fname = request('Fname');
         $Booking->Lname = request('Lname');
         $Booking->email = request('email');
         $Booking->age = request('age');
         $Booking->number = request('number');
         $Booking->gender = request('gender');
         $Booking->country = request('country');
         $Booking->state = request('state');
         $Booking->zip = request('zip');
         $Booking->to = request('to');
         $Booking->from = request('from');
         $Booking->DeptDate = request('DeptDate');
         $Booking->DeptTime = request('DeptTime');
         $Booking->Class = request('Class');
         $Booking->tickets = request('tickets');
         $Booking->childrens = request('childrens');
         $Booking->cost = request('cost');
         $Booking->payment = request('payment');
         $Booking->user_id = auth()->user()->id;
         $Booking->save();

         $details=[
            'title'=>'Mail title',
            'body'=>'Mail body'
        ];
        Mail::to(request('email'))->send(new Mails($details));
       

          return view('bookings.submit')->with('Booking', $Booking);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $booking = Booking::find($id);
         return view('bookings.edit', compact('booking'));
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
                $Booking = Booking::find($id);
                $Booking->Fname = request('Fname');
         $Booking->Lname = request('Lname');
         $Booking->email = request('email');
         $Booking->age = request('age');
         $Booking->number = request('number');
         $Booking->gender = request('gender');
         $Booking->country = request('country');
         $Booking->state = request('state');
         $Booking->zip = request('zip');
         $Booking->to = request('to');
         $Booking->from = request('from');
         $Booking->DeptDate = request('DeptDate');
         $Booking->DeptTime = request('DeptTime');
         $Booking->Class = request('Class');
         $Booking->tickets = request('tickets');
         $Booking->childrens = request('childrens');
         $Booking->cost = request('cost');
         $Booking->payment = request('payment');
         $Booking->user_id = auth()->user()->id;
         $Booking->save();
          return redirect('/home')->with('sucess', 'Ticket updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $Booking = Booking::find($id);
         $Booking->delete();
          return redirect('/home')->with('sucess', 'Ticket removed');
    }


   /**
    *  message notification
    */
    public function toNexmo($notifiable)
{
    return (new NexmoMessage)
                ->content('Your SMS message content');
}
}
