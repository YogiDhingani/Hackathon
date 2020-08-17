<!DOCTYPE html>
<?php include 'header.php' ?>
<html>
<head>
  <meta charset="utf-8">
  <title>Heatmaps</title>
  <!-- <script type="text/javascript"
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1ueM5KXgAfUah9ju6xGR-oTydVdubnXE&libraries=visualization">
</script> -->
<style>
/* Always set the map height explicitly to define the size of the div
* element that contains the map. */
#map {
  padding: 100px 0;
  height: 520px;
  margin: 100px 0;
}
/* Optional: Makes the sample page fill the window. */
html, body {
  height: 100%;
  margin: 0;
  padding: 0;
}
#floating-panel {
  position: absolute;
  top: 10px;
  left: 25%;
  z-index: 5;
  background-color: #fff;
  padding: 5px;
  border: 1px solid #999;
  text-align: center;
  font-family: 'Roboto','sans-serif';
  line-height: 30px;
  padding-left: 10px;
}
#floating-panel {
  background-color: #fff;
  border: 1px solid #999;
  left: 25%;
  padding: 5px;
  position: absolute;
  top: 10px;
  z-index: 5;
}
</style>
</head>

<body>
  <!-- <div id="floating-panel">
    <button onclick="toggleHeatmap()">Toggle Heatmap</button>
    <button onclick="changeGradient()">Change gradient</button>
    <button onclick="changeRadius()">Change radius</button>
    <button onclick="changeOpacity()">Change opacity</button>
  </div> -->
<div id="map"></div>
  <script>

  // $(document).ready(function() {
  //
  // });

  // This example requires the Visualization library. Include the libraries=visualization
  // parameter when you first load the API. For example:

  var map, heatmap;

  function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
      zoom: 11,
      center: {lat: 23.102123, lng: 72.652527},
      mapTypeId: 'satellite'
    });

    heatmap = new google.maps.visualization.HeatmapLayer({
      data: getPoint(),
      map: map
    });
  }

  function toggleHeatmap() {
    heatmap.setMap(heatmap.getMap() ? null : map);
  }

  function changeGradient() {
    var gradient = [
      'rgba(0, 255, 255, 0)',
      'rgba(0, 255, 255, 1)',
      'rgba(0, 191, 255, 1)',
      'rgba(0, 127, 255, 1)',
      'rgba(0, 63, 255, 1)',
      'rgba(0, 0, 255, 1)',
      'rgba(0, 0, 223, 1)',
      'rgba(0, 0, 191, 1)',
      'rgba(0, 0, 159, 1)',
      'rgba(0, 0, 127, 1)',
      'rgba(63, 0, 91, 1)',
      'rgba(127, 0, 63, 1)',
      'rgba(191, 0, 31, 1)',
      'rgba(255, 0, 0, 1)'
    ]
    heatmap.set('gradient', heatmap.get('gradient') ? null : gradient);
  }

  function changeRadius() {
    heatmap.set('radius', heatmap.get('radius') ? null : 20);
  }

  function changeOpacity() {
    heatmap.set('opacity', heatmap.get('opacity') ? null : 0.2);
  }

  function getPoint(){
    var data = [];
    $.ajax({
      url: 'getLoc.php',
      type: 'POST',
      dataType: 'json',
      success: function(res) {
        var i;
        for (i = 0; i < res.length; i++) {
          data[i] = new google.maps.LatLng(res[i].latitude, res[i].longitude);
        }
      }
    });
    return data;
  }
  </script>
  <script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1ueM5KXgAfUah9ju6xGR-oTydVdubnXE&libraries=visualization&callback=initMap">
  </script>
</body>
<?php include 'footer.php' ?>
</html>
