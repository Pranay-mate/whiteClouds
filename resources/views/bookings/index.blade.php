@extends('layouts.app')

@section('content')
    <h1 style='text-align:center;'>Admin Panel</h1>
    @if (Auth::user())

          @if (Auth::user()->name=='Pranay')
          <div class="card" >
                <div class="card-header">{{ __('Dashboard') }}</div>
            
                <div class="card-body" style="overflow:scroll">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                     @if(count($Bookings)> 0)
                   
         <table class='table table-striped'>
         <tr>
                    <th>ticket_id</th>
                    <th>User Name</th>
                    <th>to</th>
                    <th>from</th>
                    <th>DeptDate</th>
                    <th>DeptTime</th>
                    <th>class</th>
                    <th>tickets</th>
                    <th>cost</th>
                    <th>Booking Date & Time</th>
                    <th>Update Ticket</th>
                    <th>Delete Ticket</th>
                    </tr>
        @foreach($Bookings as $booking)
                    <tr>
                    <th>{{$booking->id}}</th>
                    <th>{{$booking->Fname}}</th>
                    <th>{{$booking->to}}</th>
                    <th>{{$booking->from}}</th>
                    <th>{{$booking->DeptDate}}</th>
                    <th>{{$booking->DeptTime}}</th>
                    <th>{{$booking->Class}}</th>
                    <th>{{$booking->tickets}}</th>
                    <th>{{$booking->cost}}</th>
                    <th>{{$booking->created_at}}</th>
                     <th>
                     <form action="/bookings/{{$booking->id}}/edit" method="GET">
                        @csrf
                       
                    <button type="submit" class="btn btn-warning">Update</button>
                    </form>
                    </th>
                    <th>
                     <form action="/bookings/{{$booking->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                   
                    </tr>
        @endforeach
        </table>
      @else
      <p>no posts</p>
      @endif
                </div>
            </div>
          @else
          <div class='container'>
          <h1>You Don't have privilage of admin user</h1>
          </div>
          @endif
          @else

          <div class='container'>
          <h1>You Don't have privilage of admin user</h1>
          </div>
          @endif
          


            
 @endsection
