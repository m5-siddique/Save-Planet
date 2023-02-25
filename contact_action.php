<?php
session_start();
$name=$_SESSION['name'];
$email=$_SESSION['email'];
$subject=$_SESSION['subject'];
$message=$_SESSION['message'];

include'db_con.php';
 

$sql = "INSERT INTO `contact` ( `name`,`email`,`subject`,`message`) 
					VALUES ('$name','$email','$subject','$message')";
					
if($conn->query($sql)) 
{
	$msg= "Thank you for giving your feedback " ;
}	
else
{
	$msg= " Error: ".$conn->error;
	//echo 
}
$_SESSION['message']= $msg; 

header('location:contact.php')

?>