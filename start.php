<!DOCTYPE html>
<?php
include 'class/cms_class.php';

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
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Enactus Malaysia National Cup 2015</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
   
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

	<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
	<link type="text/css" rel="stylesheet" href="css/style.css" />


</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">SUFECS</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#enactus">Enactus</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#partner">Partners & Donors</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#universities">Universities</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
					<li>
						<a class="page-scroll" href="#modal" id="modal_trigger">Login</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
	 <!-- /pop up login -->
	 <div class="container">
	<div id="modal" class="popupContainer" style="display:none;">
		<header class="popupHeader">
			<span class="header_title">Login</span>
			<span class="modal_close"><i class="fa fa-times"></i></span>
		</header>
		
		<section class="popupBody">
			<!-- Social Login -->
			<div class="social_login">

				<div class="action_btns">
					<div class="one_half"><a href="#" id="login_form" class="btn">Student Leader</a></div>
					<div class="one_half last"><a href="#" id="admin_form" class="btn">E Committee</a></div>
				</div>
			</div>

			<!-- User Login form -->
			<div class="user_login">
				<form method="post" action="sl/sl_login.php">
					<label>Username</label>
					<input type="text" name='username' id='username'/>
					<br />

					<label>Password</label>
					<input type="password" name='password' id='password'/>
					<br />

					<div class="action_btns">
						<div class="one_half last"><input type="submit" class="btn btn_red" value="Login" ></div>
					</div>
				</form>
			</div>

			<!-- Admin Login Form -->
			<div class="admin_login">
				<form method="post" action="ec/ec_login.php">
					<label>Admin Username</label>
					<input type="text" name='username' id='username'/>
					<br />

					<label>Password</label>
					<input type="password" name='password' id='password'/>
					<br />

					<div class="action_btns">
						<div class="one_half last"><input type="submit" class="btn btn_red" value="Admin" ></a></div>
					</div>
				</form>
			</div>
		</section>
	</div>
</div>

<script type="text/javascript">
	$("#modal_trigger").leanModal({top : 200, overlay : 0.6, closeButton: ".modal_close" });

	$(function(){
		// Calling Login Form
		$("#login_form").click(function(){
			$(".social_login").hide();
			$(".user_login").show();
			$(".header_title").text('Student Leader');
			return false;
		});

		// Calling Register Form
		$("#admin_form").click(function(){
			$(".social_login").hide();
			$(".admin_login").show();
			$(".header_title").text('Event Committee');
			return false;
		});


	})
</script>
    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Enactus</div>
                <div class="intro-heading">Enabling progress through entrepreneurial action</div>
                <a href="#enactus" class="page-scroll btn btn-xl">Tell Me More</a>
            </div>
        </div>
    </header>

    <!-- Enactus Section -->
    <section id="enactus">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Enactus</h2>
                    <h3 class="section-subheading text-muted">Enactus is an international organization that connects student, academic and business leaders through entrepreneurial-based projects that empower people to transform opportunities into real, sustainable progress for themselves and their communities.</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
						<img src="img/enactus/country.png" class="img-responsive img-circle" alt="">
                    </span>
                    <h4 class="e-heading">Countries</h4>
                    <p class="text-muted">Meet the distinguished members from different countries, which includes senior leaders from a diverse range of industries and companies that support Enactus.</p>
                </div>
                <div class="col-md-4">
					<span class="fa-stack fa-4x">
						<img src="img/enactus/universities.png" class="img-responsive img-circle" alt="">
                    </span>
                    <h4 class="e-heading">Universities</h4>
                    <p class="text-muted">Working with leading corporate partners and member universities, Enactus establishes student programs on campuses around the world.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
						<img src="img/enactus/students.png" class="img-responsive img-circle" alt="">	
                    </span>
                    <h4 class="e-heading">Students</h4>
                    <p class="text-muted">Enactus students use entrepreneurial action to develop community outreach projects that empower people and improve livelihoods.</p>
                </div>
            </div>
        </div>
    </section>
	
    <!-- Partner Grid Section -->
    <section id="partner" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Partners & Donors</h2>
                    <h3 class="section-subheading text-muted">Corporations and organizations play an essential role in advancing our work to improve lives, strengthen communities and develop socially responsible business leaders. Recognition is based on total annual investment made through partner memberships, sponsorships, strategic partnerships, special grants and in-kind gifts.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 partner-item">
                    <a href="#partner1" class="partner-link" data-toggle="modal">
                        <div class="partner-hover">
                            <div class="partner-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/partner/worldwide_p.png" class="img-responsive" alt="">
                    </a>
                    <div class="partner-caption">
                        <h4>Worldwide</h4>
                        <p class="text-muted">Corporate & Organizational Partners</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 partner-item">
                    <a href="#partner2" class="partner-link" data-toggle="modal">
                        <div class="partner-hover">
                            <div class="partner-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/partner/national_p.png" class="img-responsive" alt="">
                    </a>
                    <div class="partner-caption">
                        <h4>National</h4>
                        <p class="text-muted">Corporate & Organizational Partners</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 partner-item">
                    <a href="#partner3" class="partner-link" data-toggle="modal">
                        <div class="partner-hover">
                            <div class="partner-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/partner/trustees_p.png" class="img-responsive" alt="">
                    </a>
                    <div class="partner-caption">
                        <h4>National</h4>
                        <p class="text-muted">Boards of Trustees</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">About</h2>
                    <h3 class="section-subheading text-muted">Enactus Malaysia National Cup</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/1.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>WHEN WE IMPROVE LIVES</h4>
                                    <h4>WE ALL WIN.</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">National competitions are a showcase of how our students are transforming lives and enabling progress through entrepreneurial action.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/2.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Sponsors Fair</h4>
                                    <h4>Top to Top Future Forum</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Representatives from Enactus Malaysia comapnies will showcase their organizations through display tables. Enactus students are encourage to use this opportunity to learn more about these companies and even network with potential employers.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/3.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Opening, Semi-Final</h4>
                                    <h4>Final Competition</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">There were 3 rounds of the comeptition; Opening, Semi-Final and Final. After a through slot drawing and league pairing process, the teams were split into each leagues and the winner of each league advanced to Semi-Final round.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/4.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Enactus Malaysia Awards</h4>
                                    <h4>Closing Ceremony</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">This awards and closing ceremony was the culmination of which National Champion Team will be crown and represent Malaysia in Enactus World Cup(EWC). </p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4><br>Join US
                                    </h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Universities Section -->
    <section id="universities" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Universities</h2>
                    <h3 class="section-subheading">Working with leading corporate partners and member universities, Enactus establishes student programs on campuses around the world. With the support and encouragement of their faculty advisors and a local business advisory board, Enactus students apply business concepts to develop community outreach projects that improve livelihoods.</h3>
                </div>
            </div>
			
            <div class="row">
                <div class="col-sm-4">
<h5>Albukhary International University (AiU)	</h5>
<h5>Kuala Lumpur Metropolitan University College	</h5>
<h5>Sunway University College	</h5>
<h5>Swinburne University of Technology	</h5>
<h5>Taylor's University College	</h5>
<h5>Tunku Abdul Rahman College (TARC)	</h5>
<h5>Twintech International University	</h5>
<h5>University of Malaysia Perlis (UNIMAP)	</h5>
<h5>University of Malaysia Sarawak (UNIMAS)	</h5>
<h5>University of Malaysia, Kelantan (UMK)	</h5>
<h5>University of Sultan Zainal Abidin (UniSZA)	</h5>
<h5>Malaya University (UM)	</h5>
<h5>University of Technology Petronas (UTP)	</h5>
<h5>Tun Hussein Onn University of Technology Malaysia (UTHM)	</h5>
<h5>University of Technology Malaysia (UTM)	</h5>
<h5>Northern University of Malaysia (UUM)	</h5>
                </div>
				
				<div class="col-sm-4">
                    <a href="#university" class="partner-link" data-toggle="modal">
                        <img src="img/universities/1.png" class="img-responsive img-circle" alt="">
                    </a>
                </div>
				
				<div class="col-sm-4">
<h5>Malaysia Technical University Malacca </h5>
<h5>University of Kuala Lumpur	</h5>
<h5>Islamic Science University of Malaysia </h5>
<h5>University of Science Malaysia (USM)	</h5>
<h5>Sultan Idris University of Education (UPSI)	</h5>
<h5>University of Malaysia Pahang (UMP)	</h5>
<h5>University of Malaysia Sabah (UMS)	</h5>
<h5>International Islamic University of Malaysia (IIUM)	</h5>
<h5>MARA University of Technology (UiTM)	</h5>
<h5>Multimedia University (MMU)	</h5>
<h5>National University of Malaysia (UKM)	</h5>
<h5>Tenaga National University (UNITEN)	Selangor
<h5>The University of Nottingham: Malaysia Campus	</h5>
<h5>University Putra Malaysia (UPM)	</h5>
<h5>University Tun Abdul Razak (UNIRAZAK)	</h5>
<h5>University of Malaysia Terengganu (UMT)	</h5>
                </div>
            </div>
			<div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="large text-muted">Enactus is more than just another student organization to add on campus. Participating universities join a network of institutions and acedemic leaders from around the world as well as executives and companies that support Enactus.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Feel free to drop us an email or call us if you have any questions or problems.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Mailing Address</h4>
								<h6>Company Name</h6>
								20, Jalan Waja 3,<br />
								Taman Parit Raja, 10330<br />
								Parit Raja, Batu Pahat, Johor<br /><br />
								<strong>Phone:</strong> 012-4143311<br />
								<strong>Email:</strong> <a href="mailto:info@enactusmalaysia.com">info@enactusmalaysia.com</a> 
                            </div>
								<div class="col_12 float_r">
								<h4>Our Location</h4>
								<iframe width="380" height="220" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.my/maps/ms?msid=211521306483647876967.0004f943b2f1bb0aab05f&msa=0&ll=1.861426,103.109565&spn=0.026894,0.048752&amp;t=m&amp;output=embed"></iframe>              
								<div class="cleaner h30"></div>
							</div>
						</div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Enactus Malaysia National Cup</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="https://twitter.com/enactus"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="https://www.facebook.com/EnactusMalaysia"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="https://www.linkedin.com/company/enactus"><i class="fa fa-linkedin"></i></a>
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

    <!-- Partner Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Partner Modal 1 -->
    <div class="portfolio-modal modal fade" id="partner1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Worldwide</h2>
                            <p class="item-intro text-muted">Corporate & Organizational Partners</p>
                            <img class="img-responsive" src="img/partner/worldwide.jpg" alt="">
                            <p>Corporations and organizations play an essential role in advancing our work to improve lives, strengthen communities and develop socially responsible business leaders. Recognition is based on total annual investment made through partner memberships, sponsorships, strategic partnerships, special grants and in-kind gifts.</p>
                <a class="page-scroll btn btn-xl" data-dismiss="modal">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="partner2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>National</h2>
                            <p class="item-intro text-muted">Corporate & Organizational Partners</p>
                            <img class="img-responsive img-centered" src="img/partner/national.png" alt="">
                            <p>Corporations and organizations play an essential role in advancing our work to improve lives, strengthen communities and develop socially responsible business leaders. Recognition is based on total annual investment made through partner memberships, sponsorships, strategic partnerships, special grants and in-kind gifts.</p>
							<a class="page-scroll btn btn-xl" data-dismiss="modal">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal modal fade" id="partner3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>National</h2>
                            <p class="item-intro text-muted">Board of Trustees</p>
                            <img class="img-responsive img-centered" src="img/partner/trustees.png" alt="">
                            <p>Meet the distinguished members of our primary governing body, which includes senior leaders from a diverse range of industries and companies that support Enactus Malaysia.</p>
							<a class="page-scroll btn btn-xl" data-dismiss="modal">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
	    <!-- university -->
    <div class="portfolio-modal modal fade" id="university" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>National</h2>
                            <p class="item-intro text-muted">Universities</p>
                            <img class="img-responsive img-centered" src="img/universities/u_p.png" alt="">
                            <p>Enactus is more than just another student organization to add on campus. Participating universities join a network of institutions and acedemic leaders from around the world as well as executives and companies that support Enactus.</p>
							<a class="page-scroll btn btn-xl" data-dismiss="modal">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>

</body>

</html>
