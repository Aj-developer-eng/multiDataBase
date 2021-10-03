<form action="{{URL::to('')}}/import" method="post" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="file" name="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>