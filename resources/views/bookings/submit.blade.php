@extends('layouts.app')

@section('content')

      <h1>{{$Booking->Fname}} yours ticket has been booked</h1>
      <h1>Check previous bookings here:<h1>
   
    <button type="button" class="btn btn-warning btn-lg btn-block">   <a class="dropdown-item" href="/home">
                                        Dashboard
                                    </a></button>
@endsection
