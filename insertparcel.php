<?php

require 'connect.php';
$name = $_POST['customer_Name'];
$pickup_address = $_POST['pickup_address'];
$delivery_address = $_POST['delivery_address'];
$package_type = $_POST['package_type'];
$contact_no = $_POST['contact_no'];
$state_address = $_POST['state_address'];
$note = $_POST['note'];

$select ="SELECT `id` FROM `customer` WHERE `username` = 'Prasanga'";//need to recheck


	///
	$sql = "SELECT `id` FROM `customer` WHERE `username` = '$name'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
		$realID = $row["id"];
        echo  $realID ;
		
		
		
		$insert = "INSERT INTO parcel (customer_id, pickup_address, delivery_address, package_type, contact_no, state_address, note) 
VALUES ('$realID', '$pickup_address', '$delivery_address', '$package_type', '$contact_no', '$state_address', '$note')";

	mysqli_query($con, $insert);
    echo "New record created successfully";
    }
	///
	
	
} 
//}
else {
    echo "Error: " . $insert . "<br>" . mysqli_error($con);
}  
?>