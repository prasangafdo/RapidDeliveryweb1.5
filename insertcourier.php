<?php

require 'connect.php';
$uname = $_POST['uname'];
$pss = $_POST['pss'];
//$email = $_POST['email'];
$address = $_POST['address'];
$telephone = $_POST['telephone'];
$sql = "INSERT INTO courier (username, password, parcel_ID, address, telephone) 
VALUES ('$uname', 'pss', '0', '$address', '$telephone')";
//0 is for no parcels
if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}  
?>