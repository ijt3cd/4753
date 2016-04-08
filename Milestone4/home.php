<?php
session_start();
if(!isset($_SESSION["user"])){
header("Location: index.php"); /* Redirect browser */
exit();
}
?>

<!DOCTYPE HTML>
<!--
	Halcyonic 1.0 by nodethirtythree + FCT
	http://nodethirtythree.com | @nodethirtythree
	Released under the Creative Commons Attribution 3.0 license (nodethirtythree.com/license)
-->
<html>
	<head>
		<title>Datanamic Sport Analytics - About Us</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--5grid--><script src="css/5grid/viewport.js"></script><!--[if lt IE 9]><script src="css/5grid/ie.js"></script><![endif]--><link rel="stylesheet" href="css/5grid/responsive.css" /><!--/5grid-->
		<link rel="stylesheet" href="css/style.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="css/style-ie9.css" /><![endif]-->
	</head>
	<body class="subpage">
	
		<!-- Header -->
			<div id="header-wrapper">
				<header id="header" class="5grid">
					<div class="12u-first">

						<!-- Logo -->
							<h1><a href="index.php" class ="logo-image"><img src="images/logo.png" alt="" /></a></h1>
						
						<!-- Nav -->
							<nav>
								<a href="index.php">Homepage</a>
								<a href="signup.php">Sign Up</a>
								<a href="login.php">Log In</a>
								<a href="about.php">About Us</a>
							</nav>

					</div>
				</header>
			</div>

		<!-- Content -->
			<div id="content-wrapper">
				<div id="content">
					<div class="5grid">
						<div class="3u-first">
							
							<!-- Sidebar -->
								<section>
									<h2>Your Sports</h2><hr/>
									<ul class="link-list">
<<<<<<< HEAD
										<li><a href="volleyball.php">Volleyball</a></li>
										<li><a href="basketball.php">Basketball</a></li>
=======
										<li><a href="#" class="side">Volleyball</a></li>
										<li><a href="#" class="side">Basketball</a></li>
>>>>>>> origin/master
									</ul>
								</section>
								<section>
									<div style='text-align: center;'>
										<a href="logout.php" class="button-big">Log Out</a>
									</div>
								</section>

						</div>
						<div class="9u">
							
							<!-- Main Content -->
								<section>
									<header>
										<h2>Welcome to the Member Homepage!</h2>
										<h3>We are excited to have you join us! To begin please click on one of the sports tabs
											you have selected. If you have already signed up, continue to one of your sports</h3>

										<table style = "width:90%; text-align: center; margin: 0px auto; border-collapse: separate; border-spacing: 50px 30px;">
										<tr>
									                <td>
														<a href="#" class="bordered-feature-image"><img src="images/pic01.jpg" alt="" /></a>
														<h2>Volleyball</h2>
														<ul>
															<li>&bull; Discover your statistically strong hitters</li>
															<li>&bull; Find that better rotation</li>
															<li>&bull; Improve your setter’s decision-making</li>
														</ul>
													</td>



													<!-- Feature #2 -->
													<td>
														<a href="#" class="bordered-feature-image"><img src="images/pic02.jpg" alt="" /></a>
														<h2>Basketball</h2>
														<ul>
															<li>&bull; Receive lineup suggestions</li>
															<li>&bull; Measure player efficiency</li>
															<li>&bull; Find optimal shot locations</li>
														</ul>
													</td>
										</tr>
										</table>
									</header>
								</section>


						</div>
					</div>
				</div>
			</div>
	
		<!-- Copyright -->
			<div id="copyright">
				<br/>
				Created by Isaac Tessler, Harriet Cao, Grant Zou. Design by nodethirtythree + FCT.
				<br/>
			</div>

	</body>
</html>