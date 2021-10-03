<head><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"></head>
<div style="border:solid;margin-top: 50px;" class="container">
  <table class="table table-hover table-info">
    <a href="{{URL::to('')}}/find_city">back</a>
  <thead class="thead-dark">
    <tr>
      <th style="text" scope="col">Sr.no</th>

      <th style="text" scope="col">Hotel Name</th>
       <th style="text" scope="col">Hotel Info</th>
    </tr>
  </thead>
 
  <tbody>
   
   @foreach($city as $r)
    <tr>
      <td>{{ $no++ }}</td>
      <th scope="row">{{$r->hotel_name}}</th>

     <th> <a href="{{URL::to('')}}/hotel/{{$r->hotel_id}}"><button class="btn btn-info">Hotels</button></a> </th>
    
    </tr>
    @endforeach
  </tbody>

</table>
</div>