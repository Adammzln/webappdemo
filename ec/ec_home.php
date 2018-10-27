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
                            Enactus <small>Malaysia</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-home"></i> Home
                            </li>
                        </ol>
                    </div>
                </div>
           
                    <div class="col-lg-9">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> APPOINTMENT AS ENACTUS MALAYSIA NATIONAL CUP 2014 EVENT COMMITTEE </h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
								<?php
if($_SESSION['username'])
	{?>
	<?php
		if($_POST['add']):
			$obj->add_content($_POST);
		elseif($_POST['update_user']):
			$obj->update_user($_POST);
		endif;
	?>
	<?php
	}
else
{
die('You must be logged in');
}
?>
                                  <strong>  As part of the event committee team, I;</strong>
<br><br>
1)	Understand that I will be given tasks by Enactus Malaysia Foundation and I promise to give it my very best to fulfil them. <br>
2)	Promise to follow the Enactus Code of Conduct.<br>
3)	Promise I will not quit and surrender; it is not who I am. <br>
4)	Promise to work together with the Event Committee team, EMF staff and Event Planner team as if they are my family, brothers and sisters.<br>
5)	Will not discriminate or favour my own university team among others.<br>
6)	Promise to not leak out results of competition to anyone including my university team members, family, friends and any living being on planet Earth until the results have been formally announced.<br>
7)	Promise to be honest and courteous at all times in my actions and words.<br>
8)	Promise to ask questions if I do not understand.<br>
9)	Promise to be punctual to all designated slots and time assigned to me in this event.<br>
10)	If I made a mistake, EMF staff & committee team have the rights to point out my wrongs and teach me; I am here to learn.<br>
11)	Promise to abide by the rules and regulations given to me by Enactus Malaysia, Enactus Worldwide, and my beloved country, Malaysia.<br>
                                </div>

                            </div>
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

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
