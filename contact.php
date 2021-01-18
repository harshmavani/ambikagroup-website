<?php
$msg = "";
if (isset($_REQUEST['submit'])) {

	if (($_REQUEST['fname'] == "") || ($_REQUEST['lname'] == "") || ($_REQUEST['email'] == "") || ($_REQUEST['mono'] == "") || ($_REQUEST['message'] == "")){
		$msg =  "<p class='alert alert-danger pt-1 pb-1'>"."Please fill all filds"."</p>";
	}
	else{
		$fname = $_REQUEST['fname'];
		$lname = $_REQUEST['lname'];
		$email = $_REQUEST['email'];
		$mono = $_REQUEST['mono'];
		$message = $_REQUEST['message'];

		$mailTo = "harshit.work2210@gmail.com";
		$headers ="From: ". $email;
		$txt ="you have received an email from ". $fname. $lname.".\n". "$mono". "$message";
		mail($mailTo, $fname, $txt ,$headers); 
		$msg = "<p class='alert alert-success pt-1 pb-1'>"."Sent sucessfully"."</p>";
	}
}
?>

<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<title>Ambika | Contact</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,700|Muli:300,400" rel="stylesheet">
	<link rel="stylesheet" href="fonts/icomoon/style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/jquery-ui.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/jquery.fancybox.min.css">
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
	<link rel="stylesheet" href="css/aos.css">
	<link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	<div class="site-wrap">
		<div class="site-mobile-menu site-navbar-target">
			<div class="site-mobile-menu-header">
				<div class="site-mobile-menu-close mt-3">
					<span class="icon-close2 js-menu-toggle"></span>
				</div>
			</div>
			<div class="site-mobile-menu-body"></div>
		</div>
		<div class="header-top bg-light">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-6 col-lg-3">
						<a href="index.php">
							<img src="images/logo.png" alt="Image" class="img-fluid" width="42%;">
						</a>
					</div>
					<div class="col-lg-3 d-none d-lg-block">
						<div class="quick-contact-icons d-flex" style="color: rgb(146, 140, 140);">
							<div class="icon align-self-start" style="margin-right: 10px;font-size: 35px; margin-top: 3px">
								<span class="flaticon-placeholder text-primary" style="color: #2700ff!important;"></span>
							</div>
							<div class="text">
								<span class="h4 d-block">India</span>
								<span class="caption-text" style="color: rgb(146, 140, 140);">KILLA-PARDI-396125
								</span>
							</div>
						</div>
					</div>
					<div class="col-lg-3 d-none d-lg-block">
						<div class="quick-contact-icons d-flex" style="color: rgb(146, 140, 140);">
							<div class="icon align-self-start" style="margin-right: 10px;font-size: 35px; margin-top: 3px">
								<span class="flaticon-call text-primary" style="color: #2700ff!important;"></span>
							</div>
							<div class="text">
								<span class="h4 d-block"> +91 98253 56262</span>
								<span class="caption-text" style="color: rgb(146, 140, 140);">Mobile No:</span>
							</div>
						</div>
					</div>
					<div class="col-lg-3 d-none d-lg-block">
						<div class="quick-contact-icons d-flex">
							<div class="icon align-self-start" style="margin-right: 10px;font-size: 35px; margin-top: 3px">
								<span class="flaticon-email text-primary" style="color: #2700ff!important;"></span>
							</div>
							<div class="text">
								<span class="h4 d-block"><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2b42454d446b4c464a424705484446" style="color:black;">info@ambikagroup.co.in</a></span>
								<span class="caption-text" style="color: rgb(146, 140, 140);">Email Address</span>
							</div>
						</div>
					</div>
					<div class="col-6 d-block d-lg-none text-right">
						<a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a>
					</div>
				</div>
			</div>
			<div class="site-navbar py-2 js-sticky-header site-navbar-target d-none pl-0 d-lg-block" role="banner">
				<div class="container">
					<div class="d-flex align-items-center">
						<div class="mr-auto">
							<nav class="site-navigation position-relative text-right" role="navigation">
								<ul class="site-menu main-menu js-clone-nav mr-auto d-none pl-0 d-lg-block">
									<li>
										<a href="index.php" class="nav-link text-left">Home</a>
									</li>
									<li >
										<a href="about.php" class="nav-link text-left">About Us</a>
									</li>
									<li>
										<a href="products.php" class="nav-link text-left">Our Products</a>
									</li>

									<li  class="active">
										<a href="contact.php" class="nav-link text-left">Contact</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="intro-section site-blocks-cover innerpage" style="background-image: url('images/contact.jpg'); opacity: 0.9;">
			<div class="container">
				<div class="row align-items-center text-center border">
					<div class="col-lg-12 mt-5" data-aos="fade-up">
						<h1>Get In Touch</h1>
						<p class="text-white text-center">
							<a href="index-2.html">Home</a>
							<span class="mx-2">/</span>
							<span>Contact Us</span>
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="site-section">
			<div class="container">
<!-- 				<form class=" " method="post" >
					<input type="text" name="expriment">
<input type="submit" name="submit">
				</form>
 -->
				<form action=""  method="POST">
					<div class="row">
						<div class="col-md-6 form-group">
							<label for="fname">First Name</label>
							<input type="text" id="fname" name="fname" class="form-control form-control-lg">
						</div>
						<div class="col-md-6 form-group">
							<label for="lname">Last Name</label>
							<input type="text" id="lname" name="lname" class="form-control form-control-lg">
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 form-group">
							<label for="email">Email Address</label>
							<input type="text" id="emial" name="email"  class="form-control form-control-lg">
						</div>
						<div class="col-md-6 form-group">
							<label for="mono">Mobile Number</label>
							<input type="text" id="mono" name="mono" class="form-control form-control-lg">
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 form-group">
							<label for="message">Message</label>
							<textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
						</div>
					</div>
										<?php echo $msg ; ?>

					<div class="row">
						<div class="col-12">
							<input type="submit" name="submit" value="Send Message" class="btn btn-primary rounded-0 px-3 px-5" style="background-color: #1e4f94;
							border-color: #1e4f94;">
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="section-bg style-1" style="background-image: url('images/hero_1.jpg');">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
						<span class="icon flaticon-mortarboard"></span>
						<h3>Our Philosphy</h3>
						<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea? Dolore, amet reprehenderit.</p>
					</div>
					<div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
						<span class="icon flaticon-school-material"></span>
						<h3>Academics Principle</h3>
						<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea?
						Dolore, amet reprehenderit.</p>
					</div>
					<div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
						<span class="icon flaticon-library"></span>
						<h3>Key of Success</h3>
						<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea?
						Dolore, amet reprehenderit.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="footer">
			<div class="container">
				<div class="row">
					<div class="col-lg-3" >
						<p class="mb-4"><img src="images/logo.png" alt="Image" class="img-fluid" width="42%;"></p>
						<p style="color: #908888;font-weight:500;text-align: left;">We are leading manufacturers and exporters of corrugative adhesives & modified starches at Vapi & Pardi Gujarat, India since 1999. We have most modern manufacturing facility with experts in starch based adhesives technology.</p>
						<p ><a href="#" style="color: black;">Learn More</a></p>
					</div>
					<div class="col-lg-3" style="text-align: center;">
						<h3 class="footer-heading" style="color: black;"><span>Our Company</span></h3>
						<ul class="list-unstyled">
							<li><a href="#" style="color: #908888;font-weight:500;">About</a></li>
							<li><a href="#" style="color: #908888;font-weight:500;">News</a></li>
							<!-- <li><a href="#"></a></li> -->
							<li><a href="#" style="color: #908888;font-weight:500;">Our Team</a></li>
							<li><a href="#" style="color: #908888;font-weight:500;">Careers</a></li>
							<li><a href="#" style="color: #908888;font-weight:500;">Products</a></li>
						</ul>
					</div>
					<div class="col-lg-3" style="text-align: center;">
						<h3 class="footer-heading" style="color: black;"><span>Our Works</span></h3>
						<ul class="list-unstyled">
							<li><a href="#" style="color: #908888;font-weight:500;">Pipings</a></li>
							<li><a href="#" style="color: #908888;font-weight:500;">Construction</a></li>
							<li><a href="#" style="color: #908888;font-weight:500;">Powders</a></li>
						</ul>
					</div>
					<div class="col-lg-3" style="text-align: center;">
						<h3 class="footer-heading" style="color: black;"><span>Contact</span></h3>
						<ul class="list-unstyled">
							<li><a href="#" style="color: #908888;font-weight:500;">Help Center</a></li>
							<li><a href="#" style="color: #908888;font-weight:500;">Support Community</a></li>
							<li><a href="#" style="color: #908888;font-weight:500;">Press</a></li>
							<li><a href="#" style="color: #908888;font-weight:500;">FAQ</a></li>
							<li><a href="#" style="color: #908888;font-weight:500;">Our Partners</a></li>
						</ul>
					</div>

				</div>
				<div class="row">
					<div class="col-sm-12" style="text-align: center;">
						<p style="color: black">Copyright ©2020 All rights reserved </p>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" /><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#ff5e15" /></svg></div>
	<script src="js/jquery-3.3.1.min.js" type="c1be20718ea6817ff996554e-text/javascript"></script>
	<script src="js/jquery-migrate-3.0.1.min.js" type="c1be20718ea6817ff996554e-text/javascript"></script>
	<script src="js/jquery-ui.js" type="c1be20718ea6817ff996554e-text/javascript"></script>
	<script src="js/popper.min.js" type="c1be20718ea6817ff996554e-text/javascript"></script>
	<script src="js/bootstrap.min.js" type="c1be20718ea6817ff996554e-text/javascript"></script>
	<script src="js/owl.carousel.min.js" type="c1be20718ea6817ff996554e-text/javascript"></script>
	<script src="js/jquery.stellar.min.js" type="c1be20718ea6817ff996554e-text/javascript"></script>
	<script src="js/jquery.countdown.min.js" type="c1be20718ea6817ff996554e-text/javascript"></script>
	<script src="js/bootstrap-datepicker.min.js" type="c1be20718ea6817ff996554e-text/javascript"></script>
	<script src="js/jquery.easing.1.3.js" type="c1be20718ea6817ff996554e-text/javascript"></script>
	<script src="js/aos.js" type="c1be20718ea6817ff996554e-text/javascript"></script>
	<script src="js/jquery.fancybox.min.js" type="c1be20718ea6817ff996554e-text/javascript"></script>
	<script src="js/jquery.sticky.js" type="c1be20718ea6817ff996554e-text/javascript"></script>
	<script src="js/jquery.mb.YTPlayer.min.js" type="c1be20718ea6817ff996554e-text/javascript"></script>
	<script src="js/main.js" type="c1be20718ea6817ff996554e-text/javascript"></script>

	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="c1be20718ea6817ff996554e-text/javascript"></script>
	<script type="c1be20718ea6817ff996554e-text/javascript">
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-23581568-13');
	</script>
	<script src="js/rocket-loader.min.js" data-cf-settings="c1be20718ea6817ff996554e-|49" defer=""></script></body>

	</html>
