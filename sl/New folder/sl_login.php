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
?>

<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="../style.css" type="text/css" media="screen" title="no title" charset="utf-8">
</head>

<body>
<div id="space">
</div>
<div id="page-wrap">
	<?php
$username=$_POST['username'];
$password=$_POST['password'];

if ($username&&$password)
	{
	$connect=mysql_connect("localhost","root","") or die("Couldn't Connect");
	mysql_select_db("emnc") or die("Couldn't Connect db");

	$query=mysql_query("SELECT * FROM sl_details WHERE username='$username'");
	$numrows=mysql_num_rows($query);

	if($numrows!=0)
	{
		while ($row=mysql_fetch_assoc($query))
		{
			$dbusername=$row['username'];
			$dbpassword=$row['password'];
		}	
	//check
			if($username==$dbusername&&md5($password)==$dbpassword)
			{
				$_SESSION['username']=$username;
				echo "Welcome back. Dear, ".$_SESSION['username']."<br><a href='sl_home.php'>Click</a> here to Home page.";
			}
			else
				{
				echo "Incorrect password.";
				echo "<br><a href='../index.php'>Login Again</a>";
				}
	}
	else
		die("User doesnot exist");



	}
else
{
	echo "Please enter username and password";
	die("<br><a href='../index.php'>Login Again</a>");
}
?></div>
<footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Enactus Malaysia National Cup</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>