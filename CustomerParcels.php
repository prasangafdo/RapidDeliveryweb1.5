<html>
<title>Track the package</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
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
    <link href="css/scrolling-nav.css" rel="stylesheet">
<body>
<?php
require 'connect.php';
$parcel_ID = $_POST['parcel_ID'];

/*
$sql = "SELECT Longitude, Latitude FROM
location where parcel_ID = '$parcel_ID'";
if (mysqli_query($con, $sql)) {
    
$results = mysqli_query($con, $sql) or die(mysql_error());
echo "<table border=\"2\">";
$x=1;
echo "<tr>";
while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {
if ($x <= 1)
{
$x = $x + 1;
extract($row);
echo "<td style=\"padding-right:35px;\">";
echo $Longitude .'<br/>';
echo "<td style=\"padding-right:15px;\">";
echo $Latitude .'<br/>';
echo "</td>";
}
$x=0;
echo "</tr><tr>";

}
echo "</table>";*/


$sql = "SELECT Longitude, Latitude FROM
location where parcel_ID = '$parcel_ID'";
//0 is for no parcels
if (mysqli_query($con, $sql)) {
    
$results = mysqli_query($con, $sql) or die(mysql_error());
$x=1;

while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {
if ($x <= 1)
{
$x = $x + 1;
extract($row);

echo $Longitude .'<br/>';

echo $Latitude ;

echo '';
}
$x=0;

}


}
?>


<div class="map-Border">
        <div id="map"></div>
    <script>
      var map;
 

      function initMap() {
  var myLatLng = {lat:<?php echo "$Latitude";?>, lng: <?php echo "$Longitude" ?>};

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 15,
    center: myLatLng
  });

  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'Hello World!'
  });
}
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDPtg5NhcYerzCS0sHvWAff9XqUipqY8LU&callback=initMap"
    async defer></script>
       </div>
    </section>
   <!-- <?php 
     echo "Hello World";
     ?>
     -->    

</body>
</html>