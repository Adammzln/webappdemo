<?php
require_once('database.php');
?>
<?php

$submit=$_POST['submit'];

$university=strip_tags($_POST['university']);
$username=strip_tags($_POST['username']);
$password=strip_tags($_POST['password']);
$repeatpassword=strip_tags($_POST['repeatpassword']);
$email=strip_tags($_POST['email']);
$repeatemail=strip_tags($_POST['repeatemail']);
$currentpresident=strip_tags($_POST['currentpresident']);
$contact=strip_tags($_POST['contact']);
$date=date("y-m-d");

if($submit)
{//open database
	$connect=mysql_connect("localhost","root","");
	mysql_select_db("emnc");
		
	$namecheck=mysql_query("SELECT username FROM sl_details WHERE username='$username'");	
	$count=mysql_num_rows($namecheck);
	
	if($count!=0)
	{
	die("Username already exist!");
	}
	
//check for exist
if($university&&$username&&$password&&$repeatpassword&&$email&&$repeatemail&&$currentpresident&&$contact)
{
	
	
	if(($password==$repeatpassword)&&($email==$repeatemail))
	{
		if(strlen($username)>50||strlen($university)>50)
		{
			echo "Full name or username are 50 character available.";
		}
		else 
		{
			if(strlen($password)>20||strlen($password)<6)
			{
				echo "Password must between 6-20 characters";
			}
			else
			{//register user
				$password=md5($password);
				$repeatpassword=md5($repeatpassword);
			
			$directory = mkdir("../sl/university/".$username);
				
				$queryreg=mysql_query("INSERT INTO sl_details VALUES ('','$university','$username','$password','$email','$currentpresident','$contact','$date','$directory')");
			
				die("You have been registered!<a href='ec_ad_urole.php'>Return to view University Roles</a>");
			}
		}
	}
	else
		{
			echo "Password or E-mail address do not match.";
		}
	
}
else
	{
		echo "Please fill in <b>all</b> fields.";
	}
	
}




?>
<html>

<head>

    <title>Event Committee</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    <div id="wrapper">

         <?php include 'nav_ec.php'?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Student Leaders <small>Registration</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-male"></i> Administrative <i class="fa fa-chevron-circle-right"></i> User Registration
                            </li>
                        </ol>
						<div id='content'>
<form action='ec_ad_uregister.php' method='post'>
	<table class='form'>
		<tr style="height:40;">
			<td>University (Full Name)</td><td>:</td>
			<td><input type='text' name='university' style="width:150;height:24;"></td>
		</tr>
		
		<tr style="height:40;">
			<td>Username</td><td>:</td>
			<td><input type='text' name='username' style="width:150;height:24;"></td>
		</tr>
		
		<tr style="height:40;">
			<td>E-mail Address</td><td>:</td>
			<td><input type='email' name='email' style="width:150;height:24;"></td>
		</tr>
		
		<tr style="height:40;">
			<td>Confirm E-mail Address</td><td>:</td>
			<td><input type='email' name='repeatemail' style="width:150;height:24;"></td>
		</tr>
		
		<tr>
			<td>Password</td><td>:</td>
			<td><input type='password' name='password' style="width:150;height:24;"></td>
		</tr>
		
		<tr style="height:40;">
			<td>Confirm Password</td><td>:</td>
			<td><input type='password' name='repeatpassword' style="width:150;height:24;"></td>
		</tr>
		
		<tr style="height:40;">
			<td>Current President</td><td>:</td>
			<td><input type='text' name='currentpresident' style="width:150;height:24;"></td>
		</tr>
		
		<tr style="height:40;">
			<td>Contact Number</td><td>:</td>
			<td><input type='text' name='contact' style="width:150;height:24;"></td>
		</tr>
		
	</table>
<p><input type='submit' name='submit' value='Register'></p>
</form>
</div>
                    </div>
                </div>
           

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
