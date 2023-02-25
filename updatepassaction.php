<?php
session_start();
if (!$_POST) header('location: updatepassword.php');
$flag = true;
$message = '';

if ($_POST['password'] == ''){
	$message .= "You must type your recent password <br>";
	$flag = false;
} else {
   $password = md5($_POST["password"]);
}

if ($_POST['newpassword'] == ''){
	$message .= "You must type your new password <br>";
	$flag = false;
} else {
   $newpassword = ($_POST["newpassword"]);
}

if ($_POST['retypepassword'] == ''){
	$message .= "You must retype your password <br>";
	$flag = false;
} else {
   $retypepassword = ($_POST["retypepassword"]);
}

if(!$flag)
{
	$_SESSION['message'] = $message;
	header('location: updatepassword.php');exit;
}

if($newpassword != $retypepassword)
{
	$_SESSION['message'] = 'Wrong Password';
	header('location: updatepassword.php');
}

include'db_con.php';
        $id=$_SESSION['user_id'];
		$sql="select * from users where id=$id AND password='$password'";
		$result_set=$conn->query($sql);
		
if($result_set->num_rows>0){
	$newpassword=md5($newpassword);
	$sql="update `users` set
	`password`='$newpassword'
	where id=$id ";


	if($conn->query($sql)) 
	{
		$msg= "Password updated successfully " ;
	}	
	else
	{
		$msg= " Error: ".$conn->error;
		//echo 
	}
	$_SESSION['message']= $msg; 
}
header('location:updatepassword.php')

?>