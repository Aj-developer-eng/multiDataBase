<head><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"></head>
<div style="border:solid;margin-top: 50px;" class="container">
  {{Auth::guard('webz')->user()->name}}
  <a href="{{URL::to('')}}/user_logout">Logout</a>
  <table class="table">
    <!-- <a href="{{URL::to('')}}/all_user">logout</a> -->
    <h1 style="text-align: center;">My booking</h1>
  <thead>
    <tr>
      <th scope="col">Name</th>
    </tr>
  </thead>
 @foreach($my as $m)
  <tbody>
   
  
    <tr>
      <th scope="row">{{$m->title}}</th>
    
    </tr>
    @endforeach
  </tbody>

</table>
</div>
<div> <a href="{{URL::to('')}}/shop">Lets Do Shopping</a></div>