<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Rapid Delivery</title>
  <script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>


  
  
      <link rel="stylesheet" href="css/style4.css">

  
</head>

<body>
  <section class="container">
    <h1>Parcel Collected</h1>
    <form action="courierHome.php">
    <button data-hover="Go to menu"><div>OK</div></button>
    </form>

</section>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

 <?php
require 'connect.php';
//include('courierSession.php');
$PID = $_POST['parcel_ID'];


$sql1 = "SELECT `id` FROM `courier` WHERE `username` = '$login_session'";//Getting courier ID
$result = $con->query($sql1);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
		$UID = $row["id"];
      //  echo  "Courier_ID " .$UID ;
      
}

}

$sql2 = "SELECT `customer_id` FROM `parcel` WHERE `id` = '$PID'";//Getting Customer ID
$result = $con->query($sql2);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
		$CID = $row["customer_id"];
		//echo  "<br/>";
       // echo  "Customer_ID " .$CID ;
     }
}

$sql3 = "SELECT `vehicle_ID` FROM `courier` WHERE `username` = '$login_session'";//Getting vehicle ID
$result = $con->query($sql3);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
		$VID = $row["vehicle_ID"];
		//echo  "<br/>";
        //echo  "Vehicle_ID " .$VID ;   
	}
}
//echo  "<br/>";
//echo 'Parcel_ID '.$PID;
//echo  "<br/>";

$sql7 = "SELECT * FROM `parcel` WHERE `ID` = '$PID'";
$result = $con->query($sql7);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
		
		$pickup_address = $row["pickup_address"];
		$delivery_address = $row["delivery_address"];
		$package_type = $row["package_type"];
		$contact_no = $row["contact_no"];
		$state_address = $row["state_address"];
		$note = $row["note"];
		
        $sql = "INSERT INTO parcel_reports (customer_ID, pickup_address, delivery_address, package_type, contact_no, state_address, note, parcel_ID, courier_ID) 
		VALUES ('$CID', '$pickup_address', '$delivery_address', '$package_type', '$contact_no', '$state_address', '$note', '$PID', '$UID')";
		//Inserting data to Parcel_reports table
		
		if (mysqli_query($con, $sql)) {
		//	echo "Inserted into parcel_reports successfully";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($con);
		}
			
	}
}

$sql = "INSERT INTO parcel_status (courier_ID, customer_ID, status, vehicle_ID, parcel_ID) 
VALUES ('$UID', '$CID', 'Pickedup', '$VID', '$PID')";
//Inserting data to Parcel_Status table

if (mysqli_query($con, $sql)) {
   // echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}


$sql = "delete from parcel where id = $PID";
//Deleting data from parcel

if (mysqli_query($con, $sql)) {
   // echo "Value deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}   
?> 
</body>
</html>
