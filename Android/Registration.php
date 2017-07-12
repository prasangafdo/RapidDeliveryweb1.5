<?php
require "connect.php";

/*
$user_id ="12331";
$user_name = "FirstName";
$user_surname = "Surname";
$user_age ="10";
$user_username ="newUserName";
$user_password ="newPassword";
*/
$user_name = $_POST["name"];
$user_surname = $_POST["surname"];
$user_age =$_POST["age"];
$user_username =$_POST["username"];
$user_password =$_POST["password"];

/*
$user_name = $_POST["user_name"];
$user_pass = $_POST["password"];*/

$mysql_query = "insert into Employee_data (name, surname, age, username, password) values ('$user_name', '$user_surname', '$user_age', '$user_username', '$user_password')";

/*select * from Employee_data where username like '$user_name' and password like '$user_pass'";*/


//$result = mysqli_query($con, $mysql_query);
/*if($result ){
echo "insert success";
}*/ //This one also correct

if($con->query($mysql_query) === TRUE){
print "Insert data successfull";
}

else
echo "Insert Failed";

$con->close();
?>
