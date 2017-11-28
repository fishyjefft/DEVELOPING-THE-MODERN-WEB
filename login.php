<?php
session_start();
include 'dbh.php';


$uid = $_POST['username'];
$pwd = $_POST['password'];

$_SESSION['uid'] = $uid;
$sql = "SELECT * FROM users WHERE uid='".$uid."' AND pwd='".$pwd."';";
$result = mysqli_query($conn, $sql);

if (!$row = mysqli_fetch_assoc($result)){
	header("Location:../WebsiteAssignment/signin.php?error=uidpwd");
}
else {

	$_SESSION['id'] = $row['id'];
   $_SESSION['uid'] = $row['uid'];
   $_SESSION['role'] = $row['role'];
	
header("Location:video.php");
}


	
?>