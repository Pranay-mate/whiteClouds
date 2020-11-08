@extends('layouts.app')

@section('content')



    <div class="container my-4">
    <form  action="/contactUs/submit" method="POST"">
                        @csrf

                        <div class="form-group">
                            <label for="email" class=" col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="input-group mb-3">
                                      <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">@</span>
  </div>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
            <div class="form-group">
              <label for="reason">Select your reason</label>
              <select class="form-control" name='reason' id="reason" required>
                <option>Booking Error</option>
                <option>Flight Schedule Queries</option>
                <option>Baggages Info</option>
                <option>Insurance</option>
                <option>Other</option>
              </select>
            </div>
           
            <div class="form-group">
              <label for="details">Explain in detail</label>
              <textarea class="form-control" id="details" name='details' rows="3" required></textarea>
            </div>
            <button type='submit' class="btn btn-primary">Submit</button>
               @if(session()->has('sucess'))
    <div class="alert alert-success">
        {{ session()->get('sucess') }}
    </div>
@endif
          </form>
    </div>
  @endsection
