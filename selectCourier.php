<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

require 'connect.php';

$sql = "SELECT ID, parcel_ID, address, telephone FROM
courier";
//0 is for no parcels
if (mysqli_query($con, $sql)) {
    
$results = mysqli_query($con, $sql) or die(mysql_error());
echo "<table border=\"2\">";
$x=1;
echo "<tr>";
while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {
if ($x <= 1)
{
$x = $x + 1;
extract($row);
echo "<td style=\"padding-right:35px;\">";
echo $ID .'<br/>';
echo "<td style=\"padding-right:15px;\">";
echo $parcel_ID .'<br/>';
echo "</td>";
echo "<td style=\"padding-right:15px;\">";
echo $address .'<br/>';
echo "</td>";
echo "<td style=\"padding-right:15px;\">";
echo $telephone .'<br/>';
echo "<td style=\"padding-right:15px;\">";
echo "</td>";
}
$x=0;
echo "</tr><tr>";

}
echo "</table>";

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}  
?>
</body>
</html>