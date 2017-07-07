<?php
require 'connect.php';
include('courierSession.php');
$PID = $_POST['parcel_ID'];
//$addr = $_POST['addr'];



$sql1 = "SELECT `id` FROM `courier` WHERE `username` = '$login_session'";//Getting courier ID
$result = $con->query($sql1);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
		$UID = $row["id"];
        echo  "Courier_ID " .$UID ;
      
}

}

$sql2 = "SELECT `customer_id` FROM `parcel` WHERE `id` = '$PID'";//Getting Customer ID
$result = $con->query($sql2);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
		$CID = $row["customer_id"];
		echo  "<br/>";
        echo  "Customer_ID " .$CID ;
     }
}

$sql3 = "SELECT `vehicle_ID` FROM `courier` WHERE `username` = '$login_session'";//Getting vehicle ID
$result = $con->query($sql3);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
		$VID = $row["vehicle_ID"];
		echo  "<br/>";
        echo  "Vehicle_ID " .$VID ;   
	}
}
echo  "<br/>";
echo 'Parcel_ID '.$PID;
echo  "<br/>";


$sql = "INSERT INTO parcel_status (courier_ID, customer_ID, Delivered, Picked_up, vehicle_ID, parcel_ID) 
VALUES ('$UID', '$CID', '0','1', '$VID', '$PID')";
//Inserting data to Parcel_Status table

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

$sql = "delete from parcel where id = $PID";
//Deleting data from parcel

if (mysqli_query($con, $sql)) {
    echo "Value deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}    
?>


<html>
<body>


</body>
</html>