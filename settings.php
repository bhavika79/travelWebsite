<?php
	require "includes\common.php";
  ?>
  
<!DOCTYPE html>
<html>
<head>
	<title>settings page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<style type="text/css">
		 footer{
    	padding: 10px 0;
		background-color: #101010;
		color:#9d9d9d;
		bottom: 0;
		width: 100%;
    }
   	</style>
</head>
<body>
	<div class="navbar navbar-default navbar-fixed">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="index.php" class="navbar-brand">Travel</a>
			</div>
			<div class="nav navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					
					<li><a href="settings.php"><span class="glyphicon glyphicon-user"></span>Settings</a></li>
					<li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span>Logout</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				
			</div>
			<div class="col-md-6">
				<form action="update_password.php" method="post">
					<h4>Change password</h4>
					<div class="form-group">
						<input type="password" name="oldpassword"class=" form-control" placeholder="Old Password"><br>
						<input type="password" name="newpassword"class=" form-control" placeholder="New Password"><br>
						<input type="password" name="retypepassword" class=" form-control" placeholder="Re-Type New Password"><br><div><?php if(isset($_GET['error'])){
      echo $_GET['error'];} ?></div> 
						<a href="home.php"> <button class="btn btn-primary">Change</button></a>
					</div>
				</form>
			</div>
			<div class="col-md-3">
				
			</div>
		</div>
	</div>
</body>
</html>