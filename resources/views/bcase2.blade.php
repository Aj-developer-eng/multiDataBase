<head><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"></head>
<div style="border:solid;margin-top: 50px;" class="container">
  <table class="table">
    <a href="{{URL::to('')}}/all_user">back</a>
  <thead>
    <tr>
      <th scope="col">Name</th>
    </tr>
  </thead>
 
  <tbody>
   
   @foreach($usrsbookings as $r)
    <tr>
      <th scope="row">{{$r->title}}</th>
    
    </tr>
    @endforeach
  </tbody>

</table>
</div>