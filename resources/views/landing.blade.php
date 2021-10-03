<head><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"></head>
<div style="display: inline-flex;"><h4>Name:{{Auth::user()->name}}</h4>....<h4>Email:{{Auth::user()->email}}</h4>....<h4>Role:{{Auth::user()->role}}</h4></div>
<a href="{{URL::to('')}}/logout">Logout</a>
<p>
	@if(Auth::user()->role == 'admin')
  <a class="btn btn-primary" data-toggle="collapse" href="{{URL::to('')}}/all_user" role="button" aria-expanded="false" aria-controls="collapseExample">
    All booking
  </a>
  <a class="btn btn-primary" data-toggle="collapse" href="{{URL::to('')}}/user_portal" role="button" aria-expanded="false" aria-controls="collapseExample">
    User Portal
  </a>
  <a class="btn btn-primary" data-toggle="collapse" href="{{URL::to('')}}/add" role="button" aria-expanded="false" aria-controls="collapseExample">
    Add product
  </a>
  <a class="btn btn-primary" data-toggle="collapse" href="{{URL::to('')}}/order" role="button" aria-expanded="false" aria-controls="collapseExample">
    Orders in Queue
  </a>
  <a class="btn btn-primary" data-toggle="collapse" href="{{URL::to('')}}/find_city" role="button" aria-expanded="false" aria-controls="collapseExample">
    Find hotel according City
  </a>
  
</p>
@else


  <a class="btn btn-primary" data-toggle="collapse" href="{{URL::to('')}}/my_booking" role="button" aria-expanded="false" aria-controls="collapseExample">
    My booking
  </a>
@endif