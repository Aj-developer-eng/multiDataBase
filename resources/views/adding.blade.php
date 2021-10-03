@include('common.aheader')
<div class="card">
		@if ($message = Session::get('success'))
<div><div class="alert alert-success alert-block">
    <strong>{{ $message }}</strong>
</div></div>
@endif
			<h2>Product Register Form</h2>
				<a href="{{URL::to('')}}/landing"><button class="btn btn-primary">BACK</button></a>

	
			<div class="container" style="border:inset;border-radius: 10px;">
				<br>
				<form action="{{URL::to('')}}/add_method" method="post" enctype="multipart/form-data">
					@csrf
							<br>
					<label >Product Name</label>
					<input type="text" class="form-control"placeholder="Product name..." name="proname" > <br>
					<span style="color:red;">@error('proname'){{$message}}@enderror</span>

					<label>Discription</label>
				<input type="text" class="form-control" placeholder="Discription..."name="discription">
				<span style="color:red;">@error('proname'){{$message}}@enderror</span> <br>

				<label>Quantity</label>
				<input type="text" class="form-control" placeholder="Quantity..."name="quantity"><br>
					<span style="color:red;">@error('quantity'){{$message}}@enderror</span>

					<label>Set Price</label>
					<input type="text" class="form-control" placeholder="price..." name="price" >        <br>
					<span style="color:red;">@error('price'){{$message}}@enderror</span>

					<label>Choose Image</label>
					<input type="file"  name="image">
					</div> 
					                  <br>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
			
		</div>
	
	@include('common.afooter')