<head><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"></head>
<div style="border:solid;margin-top: 50px;" class="container">
  @if ($message = Session::get('success'))
<div><div class="alert alert-success alert-block">
    <strong>{{ $message }}</strong>
</div></div>
@endif
  <table class="table table-hover table-primary">
    <a href="{{ URL::previous() }}">Go Back</a>

    <p style="text-align: center;border:solid;background-color: gray;border-color: gray; color: blue;"><b>{{$id[0]->hotel_name}}</b></p>
  <thead class="thead-dark">
    <tr>
      <th style="text" scope="col">Roome Type</th>
    </tr>
  </thead>
 
  <tbody>
   
  
  
    <tr>
    

     <th> <a href="{{URL::to('')}}/hotel_room/{{$id[0]->hotel_id}}"><button class="btn btn-info">Rooms</button></a> </th>
    
    </tr>
    
  </tbody>

</table>

</div>