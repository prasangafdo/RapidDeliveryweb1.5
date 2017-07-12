<?php
require "connect.php";

$lat = $_POST["latitude"];
$long = $_POST["longitude"];
/*
$lat = "lati";
$long = "long";
*/
//$mysql_query = "insert into Location (Latitude, Longitude,) values ('$lat', '$long')";
$mysql_query = "insert into Location (Latitude, Longitude) values ('$lat', '$long')";

if($con->query($mysql_query) === TRUE){
echo "Location competely sent";
}

else
echo "Insert Failed";

$con->close();
?>