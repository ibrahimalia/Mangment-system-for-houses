@component('mail::message')
# Hello

Please click on the button to confirm the reservation, but first rate the homes that you have booked ....<br>
your opinion matters.


@component('mail::panel')
@foreach($x as $m)
<http://127.0.0.1:8000/evaluation/{{$m->idHouse}}><br>
@endforeach
@endcomponent


Thanks You for trust,<br>
P7House...
@endcomponent
