<?php
require "conn.php";
$lat = $_POST["latitude"];
$long = $_POST["longitude"];

$mysql_query = "insert into location (parcel_ID, Longitude, Latitude, parcel_status) values ('1', '$long', '$lat', 'pickedup')";

/*$mysql_query = "insert into Location (Latitude, Longitude) values ('$lat', '$long')";*/

if($conn->query($mysql_query) === TRUE){
echo "Location completely sent";
}

else{
echo "Error: " .$mysql_query. "<br/>".$conn->error;
}
$conn->close();
?>