<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"></head>
<div style="border:solid;margin-top: 50px;" class="container">
  <table class="table">
    <a href="{{URL::to('')}}/order">back</a>
  <thead>
    <tr>
      <th scope="col">Product Name</th>
      <th scope="col">Product price</th>
      <th scope="col">Product image</th>
    </tr>
  </thead>
 
  <tbody>
   
  @foreach($t as $user)
    <tr>
      <th scope="row">{{$user->proname}}</th>
      <th scope="row">{{$user->price}}</th>
      <th scope="row"><img style="height: 60px;width: 50px;" src="{{URL::to('')}}/..\storage\app/{{$user->image}}"></th>
       
    

      

    
    </tr>
    @endforeach
  </tbody>

</table>
</div>