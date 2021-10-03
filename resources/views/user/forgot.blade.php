@include('common.header')
<div class="login">
		<div class="container">
			<h2>Password Forget Form</h2>
		<p>		@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <strong>{{ $message }}</strong>
    
</div>
@endif</p>
			<div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
				<form action="{{URL::to('')}}/forget_method" method="post">
					@csrf
					
					<label>Email</label>
					<input type="email" placeholder="Email..." name="email" value="{{old('email')}}"  >      <br>
					
					
					
				    <br>
					<button type="submit" class="btn btn-primary" >Send password Reset Link</button><br>
					
			</div>
			
			
		</div>
	</div>
	@include('common.footer')