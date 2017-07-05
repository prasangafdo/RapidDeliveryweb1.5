<?php
require 'connect.php';
$name = $_POST['name'];


$sql = "SELECT ID, pickup_address, delivery_address, package_type, contact_no, state_address FROM
parcel where customer_id like '$name'";
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
echo $pickup_address .'<br/>';
echo "</td>";
echo "<td style=\"padding-right:15px;\">";
echo $delivery_address .'<br/>';
echo "</td>";
echo "<td style=\"padding-right:15px;\">";
echo $package_type .'<br/>';
echo "<td style=\"padding-right:15px;\">";
echo $contact_no .'<br/>';
echo "<td style=\"padding-right:15px;\">";
echo $state_address .'<br/>';
echo "<td style=\"padding-right:15px;\">";
echo "</td>";
}
$x=0;
echo "</tr><tr>";

}
echo "</table>";

}
?>
<html>
<body>
</body>
</html>