@extends('layouts.app')

@section('content')
    <div class='container my-5'>
      <h1>Dear {{$Booking->Fname}}, your ticket has been booked.</h1>
      <h2 class='mb-5'>We wish you a safe and happy journey!</h2>
      <h1>Check previous bookings here:<h1>
   
    <button type="button" class="btn btn-warning btn-lg btn-block">   <a class="dropdown-item" href="/home">
                                        Dashboard
                                    </a></button>
</div>
@endsection
