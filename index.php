<!DOCTYPE html>
<html lang="en">
<head>
  <title>Main map page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Always set the map height explicitly to define the size of the div
     * element that contains the map. */
    #map {
      height: 100%;
    }
    /* Optional: Makes the sample page fill the window. */
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
    }
  </style>
</head>
<body>



<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">My Maps</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="distance to.php">Distance To</a></li>
      <li><a href="loc.php">Where Am I</a></li>
      <li><a href="exactwhere.php">Where Is It</a></li>
      <li><a href="earthquake.php">Warnings</a></li>
    </ul>
  </div>
</nav>

<div id="map"></div>
<script>
  // This example displays a map with the language and region set
  // to Japan. These settings are specified in the HTML script element
  // when loading the Google Maps JavaScript API.
  // Setting the language shows the map in the language of your choice.
  // Setting the region biases the geocoding results to that region.
  function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 8,
      center: {lat: 51.5074, lng: 0.1278}
    });
  }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKoHSYi2Vf9y6hAzmU9rgo-N4kDsPi6a8&callback=initMap&language=en&region=EN"
async defer>
</script>

</body>
</html>
