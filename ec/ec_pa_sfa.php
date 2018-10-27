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
                            EMNC <small>Attendees</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-check-square"></i> Participants Application <i class="fa fa-chevron-circle-right"></i> Supporter & Faculty Advisor
                            </li>
                        </ol>
                    </div>
                </div>
           
                    
<div class="col-lg-10">
                        <div class="div">
                            <div class="panel-heading">
                                <h3 class="panel-title">For additional participants, you may choose from 2 packages as below:<br>
i)Basic package (RM 5.00/pax):
Name tag<br>
ii)	Full package (RM 50.00/pax): 
Enactus t-shirt, lanyard, name tag, Enactus lapel pin, button badge
</h3>
                            </div>
<form class="form-horizontal" role="form" action="ec_pa_sfa.php" method="post">
		<div class="form-group">
		<label for="uni" class="col-sm-2 control-label'"> University: </label>&nbsp;&nbsp;
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
		<input type="hidden" name="view_uni" value="true">
		</div>
</form>
    <br><br>
	<div class="panel panel-default">
        <caption>Basic Package </caption>
                    <div class="panel-body">
                            <table style="width:100%" border="1px solid black";>
							
                                <?php if($_POST['view_uni']):
            $obj->post_attendees_sfa($_POST);
            endif;
            ?>
		</div>
</form>
    <br><br>
	<div class="panel panel-default">                  
         <div class="panel-body">
             <?php 
                        if(isset($_POST['overwrite'])):
                            $obj->save_attendees($_POST);
endif;
?>
                                
                                </table>
<br>
<button onclick="myFunction()">Print</button>

<script>
function myFunction() {
    window.print();
}
</script>    
                            </div>
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
