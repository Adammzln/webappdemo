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

function GetImageExtension($imagetype)

     {

       if(empty($imagetype)) return false;

       switch($imagetype)

       {

           case 'image/bmp': return '.bmp';

           case 'image/gif': return '.gif';

         case 'image/jpeg': return '.jpg';

           case 'image/png': return '.png';

           default: return false;

       }

     }

      

      

      

if (!empty($_FILES["uploadedimage"]["name"])) {

	$username=$_POST['username'];

    $name=$_POST['name'];

    $file_name=$_FILES["uploadedimage"]["name"];

    $temp_name=$_FILES["uploadedimage"]["tmp_name"];

    $imgtype=$_FILES["uploadedimage"]["type"];

    $ext= GetImageExtension($imgtype);
    
    $filename=basename($file_name,$ext);

    $imagename=$filename.$ext;

	

    $target_path = "images/".$imagename;

     

 

if(move_uploaded_file($temp_name, $target_path)) {

 

    $query_upload="INSERT into ar_details VALUES ('','$target_path','$username')";

  $res=mysql_query($query_upload) or die("error in $query_upload == ----> ".mysql_error()); 

     

}else{

 

   exit("Error While uploading image on the server");
}

 

}

 header("location:sl_mr_ar.php");

?>
