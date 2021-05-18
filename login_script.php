<?php
  require "includes\common.php";
 	
	
	
		$email_error="";
		$password_error="";
		
	
			 $email=mysqli_real_escape_string($con,$_POST['email']);
			 
			 $email_check="select email from signup_details where email='$email'";
			 $email_check_query=mysqli_query($con,$email_check) or die(mysqli_error($con));
			 $result=mysqli_num_rows($email_check_query);
			 if($result==0)
			{
				echo "Email not registered";
			}
			else
			{
				$password1=mysqli_real_escape_string($con,$_POST['password']);
					$password=md5($password1);
					$password_check="select * from signup_details where email='$email' && password='$password'";
					$password_check_query=mysqli_query($con,$password_check) or die(mysqli_error($con));
					$result_password=mysqli_num_rows($password_check_query);
					if($result_password==0)
					{
						echo "wrong password";
					}
					else
					{
						header('Location: home.php');
						exit();
					}
			}
?>