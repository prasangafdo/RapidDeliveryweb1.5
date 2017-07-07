<?php //This will establish the connection with the database.
$db_name = "epiz_20335740_rapidDelivery";
$mysql_username = "epiz_20335740";
$mysql_password = "OOOAnxgQ";
$server_name = "sql206.epizy.com";
$con = mysqli_connect($server_name, $mysql_username, $mysql_password, $db_name);

if($con){
echo "DB connection success!";
}

else
echo "Connection failed!";

?>