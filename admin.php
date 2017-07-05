<?php
include('loginAdmin.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: adminhome.php");//Rederecting to admin's 
}
?>
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
			<div>Admin <span>Login</span></div>
		</div>
		<br>
		<div class="login">
        <form action="" method="post">
<br/>
        		<input id="username" name="username" placeholder="username" type="text"><br>
				<input id="password" name="password" placeholder="**********" type="password"><br>
				<input name="submit" type="submit" value="Login">
                <br/>
                <span class="credentials_failed"><?php echo $error; ?></span>
				</form>
		</div>

  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

  
</body>
</html>
