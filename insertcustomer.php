<?php
include('loginCustomer.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: home.php");
}
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Rapid Delivery Login</title>
  
  
  
<link rel="stylesheet" href="css/style.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>
  <div class="body"></div>
		<div class="grad"></div>
		
		<br>


  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

  <?php

require 'connect.php';
$uname = $_POST['uname'];
$pss = $_POST['pss'];
$email = $_POST['email'];
$address = $_POST['address'];
$telephone = $_POST['telephone'];
$sql = "INSERT INTO customer (username, password, email, address, tel)
VALUES ('$uname', '$pss', '$email', '$address', '$telephone')";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}  
?>
</body>
</html>




