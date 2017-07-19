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
		<div class="header">
			<div>Rapid<span>Delivery</span></div>
		</div>
		<br>
		<div class="login">
        <h2> Please select your user role: </h2>
       
        <form action="admin.php" method="post">
		<input name="admin" type="submit" value="Admin">
        </form>
        <form action="courier.php" method="post">
        <input name="courier" type="submit" value="Courier">
        </form>
        <form action="customer.php" method="post">
        <input name="customer" type="submit" value="Customer/Sender">
        </form>
        </form>
        <form action="receiver.php" method="post">
        <input name="receiver" type="submit" value="Receiver">
        </form>
                <br/>

				
		</div>

  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

  
</body>
</html>
