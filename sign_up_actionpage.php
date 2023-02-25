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

include'db_con.php';
$sql="select * from users where email='$email'";
//echo $sql;exit;
$result_set=$conn->query($sql);
//echo $result_set->num_rows; exit; 

if($result_set->num_rows>0){
	$_SESSION['message']= "email already exist"; 
	header('location:sign_up_form.php'); exit;
}

$sql = "INSERT INTO `users` ( `name`,`email`,`password`,`phone`,`dob`,`city`,`address`,`postalcode`) 
					VALUES ('$name','$email','$password','$phone','$dob','$city','$address','$postalcode')";
					
					
					
//echo $sql;exit;
if($conn->query($sql)) 
{
	$msg= " Registered  Sucessfully " ;
}	
else
{
	$msg= " Error: ".$conn->error;
	//echo 
}
$_SESSION['message']= $msg; 

header('location:sign_up_form.php')

?>