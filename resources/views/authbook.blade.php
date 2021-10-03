<head><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"></head>
<div style="border:solid;margin-top: 50px;" class="container">
  <table class="table">
    <a href="{{URL::to('')}}/landing">back</a>
  <thead>
    <tr>
      <th scope="col">Name</th>
    </tr>
  </thead>
 
  <tbody>
   
   @foreach($my_book as $my)
    <tr>
      <th scope="row">{{$my->title}}</th>
    
    </tr>
    @endforeach
  </tbody>

</table>
</div>