<?php
require_once('database.php');
?>
<!DOCTYPE html>
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
                            Enactus <small>Annual Report</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-edit"></i> Mandatory Report  <i class="fa fa-chevron-circle-right"></i> AR
                            </li>
                        </ol>
                    </div>
                </div>
           
                    <tr id="trCalCodes">
		<td width="125">

                        </td>
		<td>
<form class="form-horizontal" role="form" action="ec_mr_ar.php" method="post">

		<div class="form-group">
		<label for="uni" class="col-sm-2 control-label'"> University:
		</label>&nbsp;&nbsp;
		<select class="form-control" style="width:auto; display:inline;" id="university" name="university" >
		<?php
		
		$sql = "SELECT * FROM sl_details";
		$res = mysql_query($sql) or die(mysql_error());
			while($row = mysql_fetch_assoc($res)):
			{
			?>
			<div>
			<option class="form-control" value="<?php echo $row['sl_id']?>"> <?php echo $row['username']?>
			</option>
			</div>
			<?php
			}
			endwhile;
		?>;
		</select>
		<input type="submit" name="btnAutoPopulate" value="Confirm" id="btnAutoPopulate" class="button" />
		<input type="hidden" name="add_participant" value="true">
		</div>
</form>


<div>
<?php

	if($_POST['add_participant']):
		$obj->add_participant($_POST);
	endif;
	
	

?>

</div>
 </td>
	</tr>
	

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
