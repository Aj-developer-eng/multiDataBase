<head><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"></head>
<div style="border:solid;margin-top: 50px;" class="container">
  <table class="table table-hover table-primary">
    <a href="{{ URL::previous() }}">Go Back</a>
  <thead class="thead-dark">
    <tr>
      <th style="text" scope="col">Facility</th>
    </tr>
  </thead>
 @foreach($dis as $f)

  <tbody>
   
  
  
    <tr>
    

     <th> {{$f['property_name']}} </th>
    
    </tr>
    @endforeach
  </tbody>

</table>

</div>