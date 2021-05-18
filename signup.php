<?php
	require "includes\common.php";
  ?>
  
<!DOCTYPE html>
<html>
<head>
	<title>sign up page</title>
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
					<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span>Signup</a></li>
					<li><a href="" data-toggle="modal" data-target="#loginmodal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
					
					<li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span>Contact Us</a></li>
				</ul>
			</div>
		</div>
	</div>


	<div class="modal fade" id="loginmodal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	    	<form action="login_script.php" method="post">
	      		<div class="modal-header">
	        	    <h4 class="modal-title" id="myModalLabel">Login </h4>
	       			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	         		 <span aria-hidden="true">×</span>
	        		</button>
	     		</div>
	     		<div class="modal-body">
	       			<p>Don't have an account?<a href="singup.php">Register</a></p>
	       			<div class="form-group">
	       			 <input type="email" name="email"class=" form-control" placeholder="Email" required="true"><div><?php if(isset($_GET['email_error'])){
      echo $_GET['email_error'];} ?></div> <br>
	       			</div>
	       			<div class="form-group">
	        		 <input type="password" name="password"class=" form-control" placeholder="Password" required="true"><div><?php if(isset($_GET['password_error'])){
      echo $_GET['password_error'];} ?></div><br>
	        		</div>
					 <a href=""> <button class="btn btn-primary">Login</button></a>
	      		</div>
	      		<div class="modal-footer">
	       			<p><a href="##">forget password?</a></p>
	      		</div>
	      	</form>
	    </div>
	  </div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-3">
				
			</div>
			<div class="col-md-6">
				
				<form method="post" action="user_sign_script.php">
					<h1>SIGN UP</h1>
					<div class="form-group">
						<input type="text" name="name" class=" form-control" placeholder="name" required="true"><br>
						<input type="email" name="email"class=" form-control" placeholder="Email" required="true"><div><?php if(isset($_GET['email_error'])){
      echo $_GET['email_error'];} ?></div> <br>
						<input type="password" name="password"class=" form-control" placeholder="Password" required="true"><br>
						<input type="number" name="contact"class=" form-control" placeholder="contact" required="true" pattern=".{10,}"><br>
						<input type="text" name="city" class=" form-control" placeholder="city" required="true"><br>
						<input type="text" name="address" class=" form-control" placeholder="Address" required="true"><br>
						<a href=""> <button class="btn btn-primary">Submit</button></a>
					</div>
				</form>
			</div>
			<div class="col-md-3">
				
			</div>
		</div>
	</div>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h4>Information</h4>
					
					<a href="contact.php">Contact Us</a>
				</div>
				<div class="col-md-6">
					<h4>Contact Us</h4>
					<p>Contact:+91-123-000000</p>
				</div>
			</div>
		</div>
	</footer>
</body>
</html>