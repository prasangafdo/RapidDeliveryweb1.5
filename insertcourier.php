<?php

require 'connect.php';
$uname = $_POST['uname'];
$pss = $_POST['pss'];
$address = $_POST['address'];
$telephone = $_POST['telephone'];
$vehicle_ID = $_POST['vehicle_ID'];

$sql = "INSERT INTO courier (username, password, address, telephone, vehicle_ID) 
VALUES ('$uname', 'pss', '$address', '$telephone', '$vehicle_ID')";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}  
?>