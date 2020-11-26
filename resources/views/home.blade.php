@extends('layouts.app')

@section('content')
<div class="container" >

    <div class="row justify-content-center" >
        <div class="col-md-12">
           @if(session()->has('sucess'))
    <div class="alert alert-success">
        {{ session()->get('sucess') }}
    </div>
@endif
            <div class="card" >
                <div class="card-header">{{ __('Dashboard') }}</div>
            
                <div class="card-body" style="overflow:scroll">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                     @if(count($bookings)> 0)
                   
         <table class='table table-striped'>
         <tr>
                    <th>ticket_id</th>
                    <th>to</th>
                    <th>from</th>
                    <th>DeptDate</th>
                    <th>DeptTime</th>
                    <th>class</th>
                    <th>tickets</th>
                    <th>cost</th>
                    <th>Update Ticket</th>
                    <th>Delete Ticket</th>
                    </tr>
        @foreach($bookings as $booking)
                    <tr>
                    <th>{{$booking->id}}</th>
                    <th>{{$booking->to}}</th>
                    <th>{{$booking->from}}</th>
                    <th>{{$booking->DeptDate}}</th>
                    <th>{{$booking->DeptTime}}</th>
                    <th>{{$booking->Class}}</th>
                    <th>{{$booking->tickets}}</th>
                    <th>{{$booking->cost}}</th>
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
      <p>No ticket booked</p>
      @endif
                </div>
            </div>

        </div>
       
    </div>
</div>
@endsection
