<?php
require 'connect.php';
$Vehicle_ID = $_POST['vehicleID'];

include('courierSession.php');

$sql1 = "SELECT id FROM
courier where username = '$login_session'";

if (mysqli_query($con, $sql1)) {
    
$results = mysqli_query($con, $sql1) or die(mysql_error());
$x=1;

while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {

extract($row);
	}
}

$sql3 = "UPDATE parcel_status SET Vehicle_ID = '$Vehicle_ID'
where courier_id = '$id'";

if (mysqli_query($con, $sql3)) {
   echo "Package Transfered";
   }
   
?>