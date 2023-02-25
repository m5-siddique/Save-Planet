<?php
session_start();
$name=$_POST['name'];
$email=$_POST['email'];
$password=md5($_POST['password']);
$phone=$_POST['phone'];
$dob=$_POST['dob'];
$city=$_POST['city'];
$address=$_POST['address'];
$postalcode=$_POST['postalcode'];
$id=$_SESSION['user_id'];



include'db_con.php';




$sql = "UPDATE  `users` set 
		`name`='$name',
		`email`='$email',
		`phone`='$phone',
		`dob`='$dob',
	    `city`= '$city',
	   `address`='$address',
	   `postalcode`= '$postalcode'
	WHERE id='$id'" ;
					
					
					
//echo $sql;exit;
if($conn->query($sql)) 
{
	$_SESSION['user_name']=$name;
	$msg = "Updated  Sucessfully" ;
}	
else
{
	$msg= " Error: ".$conn->error;
	//echo 
}
$_SESSION['message']= $msg; 

header('location:profile.php')

?>