<head><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"></head>
<div style="border:solid;margin-top: 50px;" class="container"> 
  <h1>{{Auth::user()->email}}</h1>
  <a href="{{URL::to('')}}/landing">Back</a>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  @foreach($usr as $u)
  <tbody>
    <tr>
      <th scope="row">{{$u->name}}</th>
      <td>{{$u->email}}</td>
    <td><a href="{{URL::to('')}}/booking_case/{{$u->id}}"><button class="btn btn-primary">Booking</button></a></td>
    </tr>
    @endforeach
  @foreach($usrs as $s)
<tr>
      <th scope="row">{{$s->name}}</th>
      <td>{{$s->email}}</td>
    <td><a href="{{URL::to('')}}/bookings_case/{{$s->id}}"><button class="btn btn-primary">Booking</button></a></td>
    </tr>
   @endforeach
  </tbody>

</table>
</div>