<?php
	require "includes\common.php";
  ?>
  
<!DOCTYPE html>
<html>
<head>
	<title>contact page</title>
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
					<li><a href="" data-toggle="modal" data-target="#loginmodal"><span class="glyphicon glyphicon-log-in"></span> Login</a>
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
			<div class="col-md-10">
				<h1>LIVE SUPPORT</h1><br>
				<h4> 24 hours I 7 days a week 1365 days a year Live Technical Support</h4><br>
				<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout . The point of using Lorem <br> Osumi is that it has a more-or-less normal distribution of Ietteis.There am many variations of passages of Lorem 1psurn available, but the majority<br>have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are ;air g to use a<br> passage of Lorem 1psum, you need to be sure them real anything embarrassing hidden- in the rnkfcfle of text. </p>	
			</div>
			
		</div>
		<div class="row">
			<div class="col-md-8">
				<h1>CONTACT US</h1>
				<form>
					<div class="form-group">
						Name<br><input type="text" name="Name" class="form-control"><br>
						Email<br><input type="Email" name="Email" class="form-control"><br>
						Message:<br><textarea rows="4"  class="form-control"></textarea><br>
						<a href="#"><button class="btn btn-primary">Submit</button></a>
					</div>
				</form>
			</div>
			<div class="col-md-4">
				<h1>Company Information</h1>
				<p>50D Lorern 1psum Dolor Sit, 
				22-56-2-S Sit Amet, Loren), USA <br>Phone:(00)222666 444<br> Fax:(000) 000 00 00 0<br>Email: info@mycompany.com <br>Follow on: Facebook, Twitter 
				</p>
			</div>
		</div>
	</div>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h4>Information</h4>
					<a href="contact.php">Contact Us</a>
				</div>
				<div class="col-md-4">
					<h4>My Account</h4>
					<a href="" data-toggle="modal" data-target="#loginmodal">Login</a><br>
					<a href="signup.php">Sign Up</a>
				</div>
				<div class="col-md-4">
					<h4>Contact Us</h4>
					<p>Contact:+91-123-000000</p>
				</div>
			</div>
		</div>
	</footer>
</body>
</html>