<?php

include 'dbh.php';

$id=$_POST['id'];
$uid= $_POST['uid'];
$pwd = $_POST['pwd'];	
$phone = $_POST['phone'];
$email = $_POST['email'];
$cfmpwd = $_POST['cfmpwd'];
$role = $_POST['role'];


	
	
	//Check the two passwords for equality:
	if ($_POST['pwd'] != $_POST['cfmpwd']) {
		  header("Location:index.php?error=cfmpwd");
		
		exit();
	}
	
  

    
		$sql= "SELECT uid FROM users WHERE uid='$uid'";
		$result = mysqli_query($conn, $sql);
		$uidcheck = mysqli_num_rows($result);
		if($uidcheck > 0) {
			 header("Location:index.php?error=uid");
			print '<p class="error">uid Existed!.</p>';
			exit();
		} 
		
		//If there were no errors, print a success message: 
		else {
			$sql = "INSERT INTO users (uid,pwd,cfmpwd,email,phone,role)
			VALUES ('$uid','$pwd','$cfmpwd','$email','$phone','$role')";
			$result = mysqli_query($conn, $sql);
			
			print '<p>You have been successfully registered.</p>';
			header("Location: signin.php");
		}
		
		//Check both of the password is equal
		if ($_POST['pwd'] != $_POST['cfmpwd']) {
		  header("Location:index.php?error=cfmpwd'");
		
		exit();
	}
	
?>