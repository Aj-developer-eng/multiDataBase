@include('common.header')
<div class="login">
		<div class="container">
			<h2>Password Reset Form</h2>
		<p>		@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <strong>{{ $message }}</strong>
    
</div>
@endif</p>
			<div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
				<form action="{{URL::to('')}}/reset_submit" method="post">
					@csrf
					<input type="hidden" name="token" value="{{ $token }}">
					<label>Email</label>
					<input type="email" placeholder="Email..." name="email" value="{{old('email')}}"  >      <br>
					@if ($errors->has('email'))
                                      <span class="text-danger">{{ $errors->first('email') }}</span>
                                  @endif



					<label>Password</label>
					<input type="password" placeholder="Password..." name="password" value="{{old('password')}}" > <br>
					
				    <br>
					<button type="submit" class="btn btn-primary">Reset password</button>
			</div>
			
			
		</div>
	</div>
	@include('common.footer')