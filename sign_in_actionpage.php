<?php
session_start();
if(!$_POST) header('location: sign_in_form.php');
$flag = true;
$message .= '';
if ($_POST['email'] == ''){
	$message .= "You must type your email <br>";
	$flag = false;
} else {
   $email = $_POST["email"];
}
if($_POST['password'] == ''){
	$message .= "You must type your password <br>";
	$flag = false;
} else {
   $password = md5($_POST["password"]);
}

if(!$flag)
{
	$_SESSION['message'] = $message;
	header('location: sign_in_form.php');exit;
}

include'db_con.php';
$sql="select * from users where email='$email' AND password='$password'";
//echo $sql;exit;
$result_set=$conn->query($sql); 
//echo $result_set->num_rows;exit;

if($result_set->num_rows>0){

	//echo 'Valid User';
	
	$_SESSION['logged_in']=true;
	
	//print_r($result_set);exit;
	
	foreach($result_set as $user)
	{
		$_SESSION['user_id'] = $user['id'];
		$_SESSION['user_name'] = $user['name'];
		$_SESSION['user_email'] = $user['email'];
				 
	}
	 unset($_SESSION['login_counter']);
}
else
{
	if(!isset($_SESSION['login_counter']))
	{
		$_SESSION['login_counter']=0;
	}
	$_SESSION['login_counter']++; 
    if($_SESSION['login_counter']>=3)
	{
		setcookie('blocked','true', time() + (60 * 10), "/"); // 86400 = 1 day== ss/mm== 60*60*24 for 24hrs
		unset($_SESSION['login_counter']);
		  
	}   
	
	//echo 'Invalid user';
	//$_SESSION['logged_in']=false;
	$_SESSION['message'] = ' incorrect username or wrong password. attempt:'.$_SESSION['login_counter'];
	unset($_SESSION['logged_in']);
	header('location:sign_in_form.php');exit;
}

header('location:index.php')

?>