<?php 
include('drivingDirections.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Travel Instructions</title>
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 30%;
        width:40%;
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
#right-panel {
  font-family: 'Roboto','sans-serif';
  line-height: 30px;
  padding-left: 10px;
}

#right-panel select, #right-panel input {
  font-size: 15px;
}

#right-panel select {
  width: 30%;
}

#right-panel i {
  font-size: 12px;
}

      #right-panel {
        max-height: 30%;
        float: left;
        width: 390px;
        overflow: auto;
      }

      #map {
        margin-right: 400px;
      }

      #floating-panel {
        background: #fff;
        padding: 5px;
        font-size: 14px;
        font-family: Arial;
        border: 1px solid #ccc;
        box-shadow: 0 2px 2px rgba(33, 33, 33, 0.4);
        display: none;
      }

      @media print {
        #map {
          height: 500px;
          margin: 0;
        }

        #right-panel {
          float: none;
          width: auto;
        }
      }
      .preview{
        padding-top:120px;
        height:auto;
        width:350;
        float:left;
      }
    </style>
  </head>
  <body>
    <img class="preview" src="housing/<?php echo $destinationHall;?>.jpg ">
    <h1>Traveling from: <?php echo $loggedAddress;?> to <?php echo $destinationHall; ?></h1>
      Text Directions Map
     <div id="right-panel"><div id="floating-panel"> <b>Mode of Travel: </b>
    <select id="mode">
      <option value="DRIVING">Driving</option>
      <option value="WALKING">Walking</option>
      <option value="BICYCLING">Bicycling</option>
      <option value="TRANSIT">Transit</option>
    </select>
      </div>
      </div>
      
     <div id="map"></div>
     <table class="table">
       <tr><td> Walking Directions On Campus</td><td>Once On Campus:</td></tr>
       <tr><td>Starting From:</td><td>Destination: <?php echo $destinationHall;?></td></tr>
       <tr><td><div id="map2"></div></td></tr>
     </table>
     
      
    
    <?php
    echo " 
    <script>
function initMap() {
  var directionsDisplay = new google.maps.DirectionsRenderer;
  var directionsService = new google.maps.DirectionsService;

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 14,
    center: {lat: 37.77, lng: -122.447}
  });
  directionsDisplay.setMap(map);
  directionsDisplay.setPanel(document.getElementById('right-panel'));
  var control = document.getElementById('floating-panel');
  control.style.display = 'block';
  map.controls[google.maps.ControlPosition.TOP_CENTER].push(control);

  calculateAndDisplayRoute(directionsService, directionsDisplay);
  document.getElementById('mode').addEventListener('change', function() {
    calculateAndDisplayRoute(directionsService, directionsDisplay);
  });
}

function calculateAndDisplayRoute(directionsService, directionsDisplay) {
  var selectedMode = document.getElementById('mode').value;
  directionsService.route({
    origin: {lat: $Lat, lng: $Lon},  // User Selected Start.
    destination: {lat: latParking, lng: lonParking},  // Selected Housing Parking Lot.
    // Note that Javascript allows us to access the constant
    // using square brackets and a string value as its
    // 'property.'
    travelMode: google.maps.TravelMode[selectedMode]
  }, function(response, status) {
    if (status == google.maps.DirectionsStatus.OK) {
      directionsDisplay.setDirections(response);
    } else {
      window.alert('Directions request failed due to ' + status);
    }
  });
}

    </script>
    <script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyDb_ujJLB5mxPbCTqOuxEDSSjCdMdC2dlY&signed_in=true&callback=initMap'
        async defer></script>
  </body>
</html>" ;