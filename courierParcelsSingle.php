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
        echo  $UID ;
      
}

}

$sql2 = "SELECT `customer_id` FROM `parcel` WHERE `id` = '$PID'";//Getting Customer ID
$result = $con->query($sql2);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
		$PID = $row["customer_id"];
		echo  "<br/>";
        echo  $PID ;
      
}

}

?>
<html>
<body>


</body>
</html>