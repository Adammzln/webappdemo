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
                            EMNC <small>Payment</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dollar"></i> Payment
                            </li>
                        </ol>
                    </div>
                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Payment</h3>
                            </div>
                            <div class="panel-body">
                            <?php
                    $obj->upload_image_payment($_SESSION['username']);
                    ?>
                           </div>  </div>   
                                
                    <div class="col-lg-12">
                            <?php
        $username=$_SESSION['username'];
        $sql = "SELECT payment_image FROM  payment_details WHERE username='$username'";
        $res = mysql_query($sql) or die(mysql_error()); 
                    if(mysql_num_rows($res)==0):
     
                    else:
                            while($row = mysql_fetch_assoc($res)){
            ?>


<img src="<?php echo $row['payment_image'] ?>" alt=""/>

<?php  } 
                        endif;?>
                                
                            
                        </div>
                    </div>
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
