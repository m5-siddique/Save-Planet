<?php
$host ='localhost';
$user = 'root';
$pass = '';
$db = 'DW_00181212';

$conn = new mysqli ($host, $user, $pass);
$sql= "create database IF NOT EXISTS $db";
if( $conn->query($sql))
{
	echo "Database:$db created sucessfully<br>";
}
else
{
	echo "error while creating database: ".$conn->error;
}

$conn = new mysqli ($host, $user, $pass, $db);

$sql= "CREATE TABLE `users` (
	  `id` int(11) AUTO_INCREMENT PRIMARY KEY,
	  `name` varchar(50) NOT NULL,
	  `email` varchar(150) NOT NULL,
	  `password` varchar(50) NOT NULL,
	  `phone` varchar(20) NOT NULL,
	  `dob` date,
	  `city` varchar(70) NOT NULL,
	  `address` varchar(350) NOT NULL,
	  `postalcode` varchar(350) NOT NULL
	  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;";
	  
	  
	  
if( $conn->query($sql))
{
	echo "TABLE:users created sucessfully<br>";
}
else
{
	echo "error while creating users table: ".$conn->error;
}

$sql= "CREATE TABLE `contact` (
	  `id` int(11) AUTO_INCREMENT PRIMARY KEY,
	  `name` varchar(100) NOT NULL,
	  `email` varchar(150) NOT NULL,
	  `subject` varchar(200) NOT NULL,
	  `message` varchar(500) NOT NULL
	  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;";
	  
	  
	  
if( $conn->query($sql))
{
	echo "TABLE:contacts created sucessfully<br>";
}
else
{
	echo "error while creating contact table: ".$conn->error;
}

$sql= "CREATE TABLE `reset_password` (
	  `id` int(11) AUTO_INCREMENT PRIMARY KEY,
	  `password` varchar(100) NOT NULL,
	  `new_password` varchar(150) NOT NULL,
	  `retype_password` varchar(200) NOT NULL
	 ) ENGINE=InnoDB DEFAULT CHARSET=latin1;";
	  
	  
	  
if( $conn->query($sql))
{
	echo "TABLE:reset_password created sucessfully<br>";
}
else
{
	echo "error while creating reset_password table: ".$conn->error;
}



?>