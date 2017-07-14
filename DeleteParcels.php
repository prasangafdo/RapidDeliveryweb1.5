<?php

require 'connect.php';
$parcel_ID = $_POST['parcel_ID'];

    $update = "update parcel_status SET status = 'Delivered' WHERE parcel_ID = '$parcel_ID'";

	if(mysqli_query($con, $update)){
		echo "Parcel marked as delivered";
	}
	else {
   echo "Error: " . $sql . "<br>" . mysqli_error($con);
} 

?>