
<h1>Confirm your Reservation.</h1>

<p>Hello {{$reservation->first_name}} {{$reservation->last_name}}</p>

<p>Please click on the link to completely make your reservation.</p>
<p>
    <a href="{{url('/confirmation/' . $reservation->id . '/'. $reservation->remember_token)}}">Click here</a>
</p>
