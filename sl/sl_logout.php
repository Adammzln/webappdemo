<?php
include '../class/cms_class.php';

$obj = new emnc();

//Setup our connection vars
$obj->host = 'localhost';
$obj->username = 'root';
$obj->password = '';
$obj->db = 'emnc';

//Connect To Our DB
$obj->connect();

session_start();

session_destroy();

header("location: ../index.php");


?>
