<?php
session_start();
if(isset($_SESSION["user"])){
header("Location: home.php");
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
		<title>Datanamic Sport Analytics - Welcome</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--5grid--><script src="css/5grid/viewport.js"></script><!--[if lt IE 9]><script src="css/5grid/ie.js"></script><![endif]--><link rel="stylesheet" href="css/5grid/responsive.css" /><!--/5grid-->
		<link rel="stylesheet" href="css/style.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="css/style-ie9.css" /><![endif]-->
	</head>
	<body>

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
					<div class="12u">

						<!-- Main Content -->
						<section>

						<div style="float:left; padding-right:175px;">
							<img src="images/volley.jpg" class="bordered-feature-image"/>
						</div>
							<header>
								<h2>Welcome!</h2>
							</header>

							<?php
							$emailErr = $passwordErr = "";
							$email = $password = "";

							function test_input($data) {
							$data = trim($data);
							$data = stripslashes($data);
							$data = htmlspecialchars($data);
							return $data;
							}

							if ($_SERVER["REQUEST_METHOD"] == "POST") {
							

							// Email check
								if (empty($_POST["email"])) {
									$emailErr = "Missing.";
								}
								else {
									$email = test_input($_POST["email"]);
								}
								if (!preg_match("/^[a-zA-Z0-9_\+]+@[a-zA-Z0-9]+\.[a-zA-z]+$/", $email)){
									$emailErr = "Enter a valid email address";
								}

							//Password check
								if (empty($_POST["password"])) {
									$passwordErr = "Missing";
								}
								else {
									$password = test_input($_POST["password"]);
								}
								if (strlen($password)<4){
									$passwordErr = "Password must be at least 4 characters";
								}
								


								if(($emailErr == "") && ($passwordErr == "")){
									$servername = "localhost";
									$username = "root";
									$dbpassword = "";
									$dbname = "datanamics";

							// Create connection
									$conn = new mysqli($servername, $username, $dbpassword, $dbname);
							// Check connection
									if ($conn->connect_error) {
										die("Connection failed: " . $conn->connect_error);
									} 

									
									$email = $_POST['email'];
									$password = $_POST['password'];
									

									

									//if session vars match database vars, set SESSION_loggedIn to email
									$sql =  " SELECT email FROM userData Where password = '$password' ";
									$result = $conn->query($sql);

						

									foreach ($result as $value) {
										foreach ($value as $value2) {
											$_SESSION["user"] = $value2;
											header("Location: home.php"); /* Redirect browser */
											exit();
										}
									}

									

									$conn->close();



								$email = $password = "";
							}
							
							
						}
					?>

						<form method = "post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" id="payment-form">
							<p>Please enter your e-mail and password to continue.</p>
							<table>
								<tr>
									<td>E-mail: </td>
									<td><input style="width: 200px" type = "text" name = "email" value="<?php echo htmlspecialchars($email);?>">
										<span class = "error"><?php echo $emailErr;?></span>
									</td>
								</tr>

								<tr>
									<td>Password: </td>
									<td><input style="width: 200px" type = "password" name = "password" value="<?php echo htmlspecialchars($password);?>">
										<span class = "error"><?php echo $passwordErr;?></span> 
									</td>
								</tr>

								</table>
								<br/>
									<button type="submit" name="btnsubmit" class="button-smol">Log In</button>

									<p><br/>Don't have an account with us yet? Register <a href="signup.php">here</a>.</p>
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