@extends('base')
@section('content')
    <div class="row d-flex justify-content-center">
        <div class="col-md-3">

            <div class="card mx-2 my-2">
                <h3 class="card-header text-success">Confirmed</h3>
                @if (session('message'))
                    <div class="alert alert-success">{{session('message')}}</div>
                @endif
                <div class="card-body">
                    <p>Name: {{ $reservation->first_name }} {{ $reservation->last_name }} </p>
                    <p>Date: {{ $reservation->reservation_date }}</p>
                    <p>Type: {{ $reservation->type }}</p>
                    <p>Status: Confirmed</p>
                    <p>Reservation ID: JYRS-{{ $reservation->remember_token }}</p>
                    <a href="/" class="btn btn-primary d-flex justify-content-center btn-sm">Back to homepage</a>
                </div>
                <p class="card-footer">
                    If you wish to cancel your reservation. <br>
                    Call us: 0932 882 6688
                </p>
            </div>
        </div>
    </div>
@endsection
