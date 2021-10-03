<!DOCTYPE html>
<html>
<head>
   <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 
  <title>using modal</title>
</head>
<body>
  <a href="http://localhost/multiDataBase/public/city_hotel/78591">Go Back</a>
@if ($message = Session::get('success'))
<div><div class="alert alert-success alert-block">
    <strong>{{ $message }}</strong>
</div></div>
@endif
 @foreach($hotels as $r)
  
    <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="{{$r->hotel_room_type_picture}}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{$r->standard_caption}}</h5>
    <p class="card-text"><strong>No.Of Room:  </strong>{{$r->no_of_room}}</p>
    <p class="card-text"><strong>Bed Type:  </strong>{{$r->bed_type}}</p>
    <p class="card-text"><strong>Occupancy:  </strong>{{$r->max_occupancy_per_room}}</p>
    
    <a href="#" class="btn btn-primary mt-4 detail-btn"  data-toggle="modal" data-target="#mymodal" data-id="{{$r->hotel_id}}">Facilities</a>

@endforeach
  

    <div class="modal" tabindex="-1" role="dialog" id="mymodal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

          <div class="property-names">
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
  </div>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
  
</script>
<script>
  $('#mymodal').modal('hide');
  $(document).ready(function(){
    $('.detail-btn').click(function(){
      const id = $(this).attr('data-id');
// console.log(id);
// var url ='facility/'+id;
// console.log(url);
      $.ajax({
        url:'{{URL::to("facility")}}'+'/'+id,
        type:'GET',
        data:{
          "id": id
        },
        success:function(data){

          var $pName = $('.property-names')

          data.forEach(element => {
            var pn =$('<div class="property-name">' + element.property_name + '</div>')
            var btn =$('<button class="btn">Something</button>')
            $pName.append(pn)
            $pName.append(btn)

          });





          
        }
      })
    });
  });
</script>

</body>
</html>



   
  
    
  





