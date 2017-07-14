<?php
require 'connect.php';
$addr = $_POST['address'];

$sql = "SELECT id, pickup_address, delivery_address, package_type, contact_no, state_address FROM
parcel where pickup_address like '$addr'";
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
echo $id .'<br/>';
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
<form action="courierParcelsSingle.php" method="post">
<input type="text" name="parcel_ID" id="parcel_ID" placeholder="Enter parcel ID">
<input type="submit" Value="Select this parcel">
</form>

<form action="pickupParcel.php">
<input type="submit" Value="Select all parcels">
</form>

</body>
</html>