<?php
  require "includes\common.php";


  $old_password1=mysqli_real_escape_string($con,$_POST['oldpassword']);
  $new_password1=mysqli_real_escape_string($con,$_POST['newpassword']);
  $retype_password1=mysqli_real_escape_string($con,$_POST['retypepassword']);
  $old_password=md5($old_password1);
  $new_password=md5($new_password1);
  $retype_password=md5($retype_password1);
  if($new_password!=$retype_password)
  {
  	header('location:settings.php?error=Password not matched');
  }
  else
  {
  	$update_password="update signup_details set password='$new_password' where password='$old_password'";
  	$update_password_query=mysqli_query($con,$update_password);
  	header('location:home.php?message=password updated');
  }