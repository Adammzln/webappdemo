<?php

session_start();
$user=$_SESSION['username'];

include '../class/cms_class.php';

$obj = new emnc();

//Setup our connection vars
$obj->host = 'localhost';
$obj->username = 'root';
$obj->password = '';
$obj->db = 'emnc';

//Connect To Our DB
$obj->connect();

$username=$_POST['username'];
$password=$_POST['password'];

if ($username&&$password)
	{
	$connect=mysql_connect("localhost","root","") or die("Couldn't Connect");
	mysql_select_db("emnc") or die("Couldn't Connect db");

	$query=mysql_query("SELECT * FROM ec WHERE username='$username'");
	$numrows=mysql_num_rows($query);

	if($numrows!=0)
	{
		while ($row=mysql_fetch_assoc($query))
		{
			$dbusername=$row['username'];
			$dbpassword=$row['password'];
		}	
	//check
			if($username==$dbusername&&($password)==$dbpassword)
			{
				

				
				$_SESSION['username']=$username;
				header("location: ec_home.php");
				
			}
			else
				{
				echo "Incorrect password.";
				echo "<br><a href='../index.php'>Login Again</a>";
				}
	}
	else
		die("User does not exist");



	}
else
{   
	echo "Please enter username and password";
	die("<br><a href='../index.php'>Login Again</a>");
}
?>
