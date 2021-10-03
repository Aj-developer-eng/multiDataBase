@include('common.header')

	
		
			
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <strong>{{ $message }}</strong>
</div>
@endif
<div class="container">
			<div style="float: left;"class="login-form-grids">

				<h1>profile information</h1><br>
				<form action="{{URL::to('')}}/form_method1" method="post">
					@csrf
         <input type="hidden" name="product_id" value="{{$r->id}}">
					<label>Name</label>
					<input type="text" placeholder="Name..." name="name" value="{{old('name')}}" >           <br>
					<span style="color:red;">@error('name'){{$message}}@enderror</span>
					<label>Email</label>
					<input type="email" placeholder="Email..." name="email" value="{{old('email')}}"  >      <br>
					<span style="color:red;">@error('email'){{$message}}@enderror</span>                     
					<label>Address</label>
					<input type="text" placeholder="Address..." name="address" value="{{old('address')}}" >  <br>
					<span style="color:red;">@error('address'){{$message}}@enderror</span>                   
					<label>phone</label>
					<input type="text" placeholder="phone..." name="phone" value="{{old('phone')}}" >           <br>
					<span style="color:red;">@error('phone'){{$message}}@enderror</span>
					<label>Note</label>
					<input type="text" placeholder="note..." name="note" value="{{old('note')}}" >           <br>
					<span style="color:red;">@error('note'){{$message}}@enderror</span><br>

					
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
				<br>
	
				
		
	
	</div>
				
				<div class="container">
<div style="float: left;"class="login-form-grids">
					<h1>your order:</h1><br>
	<table style="float: right;"class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">price</th>
      <th scope="col">image</th>
     
      
    </tr>
  </thead>
  



  <tbody>
    <tr>

      <th scope="row">{{$r->proname}}</th>
      
      <td>{{$r->price}}</td>
      
   
      <td><img style="height: 50px;width: 40px;" src="{{URL::to('')}}/..\storage\app\{{$r->image}}"></td>
      
    </tr>
    



  </tbody>
</table>


			
			</div>

		</div>

	</div>
		

		
	
	
	


		@include('common.footer')