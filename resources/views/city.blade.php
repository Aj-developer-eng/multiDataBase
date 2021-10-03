<head><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"></head>
<div style="border:solid;margin-top: 50px;" class="container">
  <table class="table table-hover table-primary">
    <h1>Welcome to cities</h1>
  <thead class="thead-dark">
    <tr>
      <th style="text" scope="col">Sr.no</th>
      <th style="text" scope="col">City Name</th>
       <th style="text" scope="col">Hotel list</th>
    </tr>
  </thead>
 
  <tbody>
   
   @foreach($city as $r)
    <tr>
      <td>{{ $no++ }}</td>
      <th scope="row">{{$r->city_name}}</th>

     <th> <a href="{{URL::to('')}}/city_hotel/{{$r->city_id}}"><button class="btn btn-info">Hotel list</button></a> </th>
    
    </tr>
    @endforeach
  </tbody>

</table>
</div>