
<html>
    <link href="css/style2.css" rel="stylesheet">
    <link href="css/style3.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/scrolling-nav.css" rel="stylesheet">
     <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
     
     <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="courierHome.php">Rapid Delivery</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                </ul>
                <ul>
                <div class="userName">
                
					<?php
                    include('courierSession.php');
                    echo "<h3> $login_session </h3>";
                    ?>

                </div>
                </div>
                </div>
                </div>
                </nav>

                <?php
require 'connect.php';
$pickup_addr = $_POST['pickupaddress'];
$state_address = $_POST['stateaddress'];

$sql = "SELECT id, pickup_address, delivery_address, package_type, contact_no, state_address FROM
parcel where pickup_address like '$pickup_addr' AND state_address like '$state_address'";

if (mysqli_query($con, $sql)) {
    
$results = mysqli_query($con, $sql) or die(mysql_error());
$x=1;
while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {
if ($x <= 1)
{

extract($row);
echo "<table id=\"keywords\" cellspacing=\"0\" cellpadding=\"0\">";
echo "<thead>
<br/><br/>
<br/>
<br/>
<br/><br/>
<br/>

<tr>
<th><span>ID</span></th>
        <th><span>pickup_address</span></th>
        <th><span>delivery_address</span></th>
        <th><span>package_type</span></th>
        <th><span>contact_no</span></th>
		<th><span>state_address</span></th>
      </tr>
    </thead>
	 <tbody>
      <tr>
        <td class=\"lalign\">".$id ."</td>
	 
        <td>".$pickup_address."</td>
        <td>".$delivery_address."</td>
        <td>".$package_type."</td>
        <td>".$contact_no."</td>
		<td>".$state_address."</td>
      </tr>
	   </tr>
    </tbody>
  </table>";
		}
	}
}
?>

<div class="login">
    <h1>Select Parcel</h1>

    <form class="form" method="post" action="courierParcelsSingle.php">

      <p class="field">
        <input type="text" name="parcel_ID" placeholder="Parcel ID" required/>
        <i class="fa fa-user"></i>
      </p>
      <p class="submit"><input type="submit" name="sent" value="Select this parcel"></p>


    </form>
  </div> <!--/ Login-->
</body>
</html>

