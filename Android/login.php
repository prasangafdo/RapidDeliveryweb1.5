<?php
require "connect.php";

/*$user_name = "usr";
$user_pass = "pss";
*/
$user_name = $_POST["user_name"];
$user_pass = $_POST["password"];

$mysql_query = "select * from courier where username like '$user_name' and password like '$user_pass'";

$result = mysqli_query($con, $mysql_query);
if(mysqli_num_rows($result) >0){
echo "login success!";
}
else 
echo "login failed...";
?>