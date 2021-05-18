<?php
	require "includes\common.php";
 	
	
		$email_error="";
		$contact_error="";
	$name=mysqli_real_escape_string($con,$_POST['name']);
	$email=mysqli_real_escape_string($con,$_POST['email']);

			 $aaa="select email from signup_details where email='$email'";
			 $ccc=mysqli_query($con,$aaa) or die(mysql_error($con));
			$bbb=mysqli_num_rows($ccc);
			echo $bbb;
			if($bbb!=0)
			{
				header('Location: signup.php?email_error=already email registered');
			 }

	$password1=mysqli_real_escape_string($con,$_POST['password']);
					$password=md5($password1);
	$contact=$_POST['contact'];
			
			

	$city=mysqli_real_escape_string($con,$_POST['city']);
	$address=mysqli_real_escape_string($con,$_POST['address']);

	
	

	$user_signup_query="insert into signup_details(name,email,password,contact,city,address) values('$name','$email','$password',$contact,'$city','$address')";
	$user_signup_submit=mysqli_query($con,$user_signup_query)  or die(mysql_error($con));
	$_SESSION['email']=$email;
	$_SEESION['id']=mysqli_insert_id($con);
	header('Location: home.php');
	exit();
    
  ?>
