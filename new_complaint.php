<html>
<!-- <head>
<link href="css/style.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<title>Complaint management System</title>-->
<script src="https://unpkg.com/location-picker/dist/location-picker.min.js"></script>
<style type="text/css">
#map {
  width: 100%;
  height: 300px;
}
</style>
<body>
  <?php
  session_start();
  if(!isset($_SESSION['user_id'])){
    die("Do Login First");
  }
  $_SESSION['user_id']=$_SESSION['user_id'];
  include ("header.php");
  ?>
  <section id="form" class="clearfix">
    <div class="container">
      <div class="intro-img">
        <form method="post" action="addComplaint.php" id="comForm"  enctype="multipart/form-data">
          <div class="form-group row">
            <label for="inputTitle" class="col-sm-2 col-form-label">Title</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" placeholder="Title" name="title" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputCategory" class="col-sm-2 col-form-label">Category</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" placeholder="Category" name="category" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputDescription" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-4">
              <textarea type="text" rows="5" class="form-control" placeholder="Description" name="description" required></textarea>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-4">
              <div class="checkbox">
                <label><input type="checkbox" id="allowloc" value=""> Check for select Location</label>
              </div>
            </div>
          </div>
          <div id="googleMap" class="form-group row">
            <div class="col-sm-4">
              <div id="map"></div>
              <!-- <input type="text" class="form-control" id="inputLocation" placeholder="Location" name="location" required> -->
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="exampleInputFile">Upload File</label>
            <div class="col-sm-4">
              <input type="file" class="form-control-file" aria-describedby="fileHelp" name="fileToUpload">
            </div>
            <div class="form-group row">
            </div>

          </div>
          <div class="form-group row">
            <div class="col-sm-10">
              <button style="background:#00428a" type="submit" class="btn btn-primary">Complaint</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
  <script>

  $('#googleMap').hide();

  $(function() {
    $("#allowloc").on("click",function() {
      $("#googleMap").toggle(this.checked);
    });
  });

  // Initialize LocationPicker plugin
  var latlng;
  var map = document.getElementById('map');
  var infoWindow,pos;
  function initMap() {
    map = new google.maps.Map(map, {
      center: {lat: -34.397, lng: 150.644},
      zoom: 15
    });
    infoWindow = new google.maps.InfoWindow;

    // Try HTML5 geolocation.
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(function(position) {
        pos = {
          lat: position.coords.latitude,
          lng: position.coords.longitude
        };
        //console.log(pos);

        //infoWindow.setPosition(pos);
        //infoWindow.setContent('Location found.');
        infoWindow.open(map);
        map.setCenter(pos);
        var marker = new google.maps.Marker({
          position: pos,
          map: map,
          draggable:true,
          title: "Here"
        });

        latlng = pos.lat.toFixed(4)+","+pos.lng.toFixed(4);
        google.maps.event.addListener(marker, 'dragend', function (evt) {
          //console.log(evt.latLng.lat().tofixed(4)+''+evt.latLng.lng().tofixed(4));
          latlng=evt.latLng.lat().toFixed(4)+","+evt.latLng.lng().toFixed(4);
        });

      }, function() {
        handleLocationError(true, infoWindow, map.getCenter());
        setMarker();
      });
    } else {
      // Browser doesn't support Geolocation
      handleLocationError(false, infoWindow, map.getCenter());
      setMarker();
    }
  }

  function setMarker(){
    var marker = new google.maps.Marker({
      position: {
        lat: -34.397,
        lng: 150.644
      },
      map: map,
      draggable:true,
      title: "Here"
    });

    google.maps.event.addListener(marker, 'dragend', function (evt) {
      //console.log(evt.latLng.lat().tofixed(4)+''+evt.latLng.lng().tofixed(4));
      latlng=evt.latLng.lat().toFixed(4)+","+evt.latLng.lng().toFixed(4);
    });
  }

// function getAddr(){
//   var latlngStr = latlng.split(',', 2);
//   var lltt = {lat: parseFloat(latlngStr[0]), lng: parseFloat(latlngStr[1])};
//   var geocoder= new google.maps.Geocoder;
//   geocoder.geocode({'location': lltt}, function(results, status) {
//     if (status === 'OK') {
//       if (results[0]) {
//         console.log(results[0].formatted_address);
//       } else {
//         window.alert('No results found');
//       }
//     } else {
//       window.alert('Geocoder failed due to: ' + status);
//     }
//   });
// }

  function handleLocationError(browserHasGeolocation, infoWindow, pos) {
    infoWindow.setPosition(pos);
    infoWindow.setContent(browserHasGeolocation ?
      'Error: The Geolocation service failed.' :
      'Error: Your browser doesn\'t support geolocation.');
      infoWindow.open(map);
    }

    $("#comForm").submit(function(e){
      e.preventDefault();
      var form_data = new FormData(this);
      if($("#allowloc").is(":checked")){
        getAddr();
        form_data.set("cords", latlng);
      }
      $.ajax({
        url: "/Hackathon/addComplaint.php",
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        type: 'POST',
        success: function(data){
          if(data=="not valid"){
            alert("Only jpg, png and pdf allowed");
          }else if(data=="success"){
            alert("Request successfully send");
          }else if(data=="big file"){
            alert("Size is too big");
          }else {
            console.log(data);
          }
        },error:function(){
          console.log("Error");
        }
      });
    });

    </script>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1ueM5KXgAfUah9ju6xGR-oTydVdubnXE&callback=initMap"></script>
    <?php include('footer.php');?>
  </body>
  </html>
