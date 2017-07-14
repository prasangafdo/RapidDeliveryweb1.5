<!DOCTYPE HTML>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Rapid Delivery</title>
    
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
    
    
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/scrolling-nav.css" rel="stylesheet">

</head>


<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

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
                <a class="navbar-brand page-scroll" href="customerHome.php">Rapid Delivery</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul>
                <div class="userName">    
          			<?php
                    include('customerSession.php');
                    echo "<h3> $login_session </h3>";
                    ?>
                    
                    <form action="logout.php" method="post">
                    <div class="logout">
                    <input name="btn_logout" type="submit" value="Logout">
        </form>
    </div>
            </ul>
            <!-- /.navbar-collapse -->
</div>
        <!-- /.container -->
    </nav>

<body>
<div class="body">
</div>
<div class="grad"></div>
		<div class="header">
			<div>Register a <br>
            <span>Parcel</span></div>
		</div>
		<br>
		<div class="login">
           <form action="insertParcel.php" method="post">
<br/>
				<input id="customer_Name" name="customer_Name" placeholder="Username" type="text">
        		<input id="pickup_address" name="pickup_address" placeholder="Pickup Address" type="text">
				<input id="delivery_address" name="delivery_address" placeholder="Delivery Address" type="text"><br/>
                <input id="package_type" name="package_type" placeholder="Package Type" type="text"><br/>
				<input id="contact_no" name="contact_no" placeholder="Contact No" type="text"><br/>
                <input id="state_address" name="state_address" placeholder="State Address" type="text"><br/>
                <input id="note" name="note" placeholder="Note" type="text"><br/>
                					

				<input name="submit" type="submit" value="Register">
                               
				</form>      
</body>



</html>
