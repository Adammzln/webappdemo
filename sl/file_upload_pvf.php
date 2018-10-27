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

function GetFileExtension($filetype)

     {

       if(empty($filetype)) return false;

       switch($filetype)

       {

           case 'application/msword': return '.docx';

           case 'application/pdf': return '.pdf';

           default: return false;

       }

     }

      

      

      

if (!empty($_FILES["uploadedfile"]["name"])) {

	$username=$_POST['username'];

    $name=$_POST['name'];

    $file_name=$_FILES["uploadedfile"]["name"];

    $temp_name=$_FILES["uploadedfile"]["tmp_name"];

    $imgtype=$_FILES["uploadedfile"]["type"];

    $ext= GetFileExtension($imgtype);
    
    $filename=basename($file_name,$ext);

    $imagename=$filename.$ext;

	

    $target_path = "../sl/university/".$username."/".$filename;

     

 

if(move_uploaded_file($temp_name, $target_path)) {

 

    $query_upload="INSERT into pvf_details VALUES ('','$target_path','$username')";

  $res=mysql_query($query_upload) or die("error in $query_upload == ----> ".mysql_error()); 

     

}else{

 

   exit("Error While uploading file on the server");
}

 

}

 header("location:sl_mr_pvf.php");

?>
