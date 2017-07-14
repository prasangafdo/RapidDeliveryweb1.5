<?php

require 'connect.php';
$name = $_POST['customer_Name'];
$pickup_address = $_POST['pickup_address'];
$delivery_address = $_POST['delivery_address'];
$package_type = $_POST['package_type'];
$contact_no = $_POST['contact_no'];
$state_address = $_POST['state_address'];
$note = $_POST['note'];

$sql = "SELECT `id` FROM `customer` WHERE `username` = '$name'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
		$realID = $row["id"];
    }
    $insert = "INSERT INTO parcel (customer_id, pickup_address, delivery_address, package_type, contact_no, state_address, note) 
VALUES ('$realID', '$pickup_address', '$delivery_address', '$package_type', '$contact_no', '$state_address', '$note')";

	mysqli_query($con, $insert);
    echo "New record created successfully";

} 
	else {
   echo "Error: " . $sql . "<br>" . mysqli_error($con);
} 

?>