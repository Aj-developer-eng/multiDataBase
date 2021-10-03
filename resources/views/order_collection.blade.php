<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"  />
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"></head>
<div style="border:solid;margin-top: 50px;" class="container">
  <table class="table">
    <a href="{{URL::to('')}}/landing">back</a>
  <thead>
    <tr>
      <th>Name</th>
      <th>E-mail</th>
      <th>Order</th>
      <th>Status</th>
    </tr>
  </thead>
 
  <tbody>
   
   @foreach($r as $user)
    <tr>
      <th>{{$user->name}}</th>
      <th>{{$user->email}}</th>
   

    <th><a href="{{URL::to('')}}/data/{{$user->product_id}}"><button class="btn btn-primary">Order</button></a></th>
    <th>
                        <input data-id="{{$user->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Approved" data-off="UnApproved" {{ $user->status ? 'checked' : '' }}>
                     </th>
    </tr>
    @endforeach
  </tbody>

</table>
</div>
<script>
  $(function() {
    $('.toggle-class').change(function() {
        var status = $(this).prop('checked') == true ? 1 : 0; 
        var user_id = $(this).data('id'); 
         
        $.ajax({
            type: "GET",
            dataType: "json",
            url: 'changeorderStatus',
            data: {'status': status, 'user_id': user_id},
            success: function(data){
              console.log(data.success)
            }
        });
    })
  })
</script>
