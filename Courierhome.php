<!DOCTYPE html>
<html lang="en">

<head>

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
                <a class="navbar-brand page-scroll" href="#page-top">Rapid Delivery</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#Find-couriers">Find couriers</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#Exchange-couriers">Exchange couriers</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#View-completed-jobs">View completed jobs</a>
                    </li>
                </ul>
                <ul>
                <div class="userName">
                
					<?php
                    include('courierSession.php');
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

    <!-- Intro Section -->
    <section id="intro" class="intro-section">
        <div class="container">
            <div class="row">
                <div class="welcomePane">
                    <h1>Welcome to Rapid Delivery</h1>
                    <div class="welcomePane-img">
                    	<p>&nbsp;</p>
                   <!-- <a class="btn btn-default page-scroll" href="#about">Click Me to Scroll Down!</a> -->
                </div>
                
            </div>
        </div>        
    </section>


    <section id="Find-couriers" class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Find couriers</h1>
                    	<p align="justify"> 
                      
                         <form  method="post" action="courierParcels.php" >
 						 <input type="text" name="address" id="address" placeholder="Pickup location">
                        <input type="submit" Value="Search" id="SearchCarButton" class="submitBtn" onclick="showIFrame()">
                        </p>
             <!--iframe is not working. Need to check-->
                       
<iframe id="myframe" name="carsearch" width="535" height="625" scrolling="no"   frameborder="0"></iframe>


                        
                        <script type="text/javascript">  
						//Shows the iframe
						function showIFrame() {  
						 var iframe = document.getElementById("myiframe");  
						 iframe.style.display="block";  
						}  
						</script>
                     
                </div>
            </div>
        </div>
    </section>


    <section id="Exchange-couriers" class="services-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Exchange couriers</h1>
                </div>
            </div>
        </div>
    </section>


    <section id="View-completed-jobs" class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>View completed jobs</h1>
                </div>
            </div>
        </div>
    </section>
    

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>

</body>

</html>
