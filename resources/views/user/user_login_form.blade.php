@include('common.header')
<div class="login">
		<div class="container">
			<h2>User Login Form</h2>
		<p>		@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <strong>{{ $message }}</strong>
    
</div>
@endif</p>
			<div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
				<form action="{{URL::to('')}}/user_login_method" method="post">
					@csrf
					
					<label>Email</label>
					<input type="email" placeholder="Email..." name="email" value="{{old('email')}}"  >      <br>
					
					<label>Password</label>
					<input type="password" placeholder="Password..." name="password" value="{{old('password')}}" > <br>
					
				    <br>
					<button type="submit" class="btn btn-primary">Submit</button><br>
					<a href="{{URL::to('')}}/forget">Forgot password</a>
			</div>
			
			
		</div>
	</div>
	@include('common.footer')