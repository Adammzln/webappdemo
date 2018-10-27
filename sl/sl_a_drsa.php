<?php
require_once('database.php');
?>
<!DOCTYPE html>
<html>

<head>

    <title>Student Leader</title>

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
    <?php
if($_SESSION['username'])
	{?>

    <div id="wrapper">

                 <?php include 'nav_sl.php'?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            EMNC <small> Awards</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-trophy"></i> Awards <i class="fa fa-chevron-circle-right"></i> Dato'Resham Singh Awards
                            </li>
                        </ol>
                    </div>
                    
                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-shield fa-fw"></i> Best Student Leader</h3>
                            </div>
                            <div class="panel-body">
                    <?php
                    $obj->upload_image_bst($_SESSION['username']);
                    ?></div>
                    <div class="col-lg-12">
                            <?php
        $username=$_SESSION['username'];
        $sql = "SELECT file FROM  bst_details where username ='$username'";
        $res = mysql_query($sql) or die(mysql_error()); 

                            while($row = mysql_fetch_assoc($res)){
            ?>


<img src="<?php echo $row['file'] ?>" alt=""/>

<?php  } ?>
                            </div></div></div>
                </div>
                <!-- /.row -->
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
<?php
}
else
{
die('You must be logged in');
}
?>
    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
