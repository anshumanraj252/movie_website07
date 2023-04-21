<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="style2.css">
	<?php include 'link2.php'?>
</head>
<body>

  <header>
  	<div class="cointainer center-div ">
  	<div class="heading text-center text-uppercase text-black">
  		ADMIN LOGIN PAGE 
  	</div> 
  	<div class="cointainer row">
  		<div class="admin-form">
  			<form action="logincheck.php" method="POST">
  				<div class="form-group">
  					<label>Email ID</label>
  					<input type="text" name="user" value="" class="form-control" autocomplete="off">
  				</div>
  				<div class="form-group">
  					<label>Password</label>
  					<input type="text" name="pass" value="" class="form-control" autocomplete="off">
  				</div>
  				<input type="submit" class="btn btn-success" name="">
  			</form>
  		</div>
  		
  	</div>
  </div>
  </header>

</body>
</html>