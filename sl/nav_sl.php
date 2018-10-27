<!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
				<img src="logo.png" alt="enactus" style="width:45px;height:45px">
                <a class="navbar-brand" href="sl_home.php">Student Leader</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['username'];?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="sl_logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="sl_home.php"><i class="fa fa-fw fa-home"></i> Home</a>
                    </li>
					<li>
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2"><i class="fa fa-fw fa-edit"></i> Mandatory Report <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="collapse2" class="panel-collapse collapse">
                            <li>
                                <a href="sl_mr_tds.php">Team Data Sheet</a>
                            </li>
                            <li>
                                <a href="sl_mr_ats.php">Active Team Sheet</a>
                            </li>
							<li>
                                <a href="sl_mr_pvf.php">Project Verification Form</a>
                            </li>
							<li>
                                <a href="sl_mr_ar.php">Annual Report</a>
                            </li>
							<li>
                                <a href="sl_mr_pr.php">Project Report</a>
                            </li>
                        </ul>
                    </li>
					<li>
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3"><i class="fa fa-fw fa-check-square"></i> Participants Application <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="collapse3" class="panel-collapse collapse">
                            <li>
                                <a href="sl_pa_ct.php">Competition Team</a>
                            </li>
                            <li>
                                <a href="sl_pa_sfa.php">Supporter & Faculty Advisor</a>
                            </li>
							<li>
                                <a href="sl_pa_o.php">Observer</a>
                            </li>
							<li>
                                <a href="sl_pa_af.php">Alumni & Family</a>
                            </li>
                        </ul>
                    </li>
					<li>
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4"><i class="fa fa-fw fa-trophy"></i> Awards <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="collapse4" class="panel-collapse collapse">
                            <li>
                                <a href="sl_a_asa.php">All Star Award</a>
                            </li>
                            <li>
                                <a href="sl_a_drsa.php">Dato' Resham Singh Award</a>
                            </li>
                        </ul>
                    </li>
					<li>
                        <a href="sl_payment.php"><i class="fa fa-fw fa-dollar"></i> Payment</a>
                    </li>
					 <li>
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse5"><i class="fa fa-fw fa-list"></i> Others <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="collapse5" class="panel-collapse collapse">
                            <li>
                                <a href="sl_o_c.php">Competition</a>
                            </li>
                            <li>
                                <a href="sl_o_e.php">Events</a>
                            </li>
							<li>
                                <a href="sl_o_a.php">Accommodation</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>