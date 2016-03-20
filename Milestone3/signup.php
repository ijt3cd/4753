<!DOCTYPE HTML>
<!--
	Halcyonic 1.0 by nodethirtythree + FCT
	http://nodethirtythree.com | @nodethirtythree
	Released under the Creative Commons Attribution 3.0 license (nodethirtythree.com/license)
-->
<html>
<head>
	<title>Datanamic Sport Analytics - Sign Up</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<!--5grid--><script src="css/5grid/viewport.js"></script><!--[if lt IE 9]><script src="css/5grid/ie.js"></script><![endif]--><link rel="stylesheet" href="css/5grid/responsive.css" /><!--/5grid-->
	<link rel="stylesheet" href="css/style.css" />
	<!--[if lte IE 9]><link rel="stylesheet" href="css/style-ie9.css" /><![endif]-->
	<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
	<script type="text/javascript">
		// This identifies your website in the createToken call below
		Stripe.setPublishableKey('pk_test_NXTpBhEVwIsYpPYS8ltRRV4D');
		</script>
	</head>
	<body class="subpage">

		<!-- Header -->
		<div id="header-wrapper">
			<header id="header" class="5grid">
				<div class="12u-first">

					<!-- Logo -->
					<h1><a href="index.html" class ="logo-image"><img src="images/logo.png" alt="" /></a></h1>

					<!-- Nav -->
					<nav>
						<a href="index.html">Homepage</a>
						<a href="signup.php">Sign Up/Login</a>
						<a href="about.html">About Us</a>
					</nav>

				</div>
			</header>
		</div>

		<!-- Content -->
		<div id="content-wrapper">
			<div id="content">
				<div class="5grid">
					<div class="12u-first">

						<!-- Main Content -->
						<section>
							<header>
								<h2>Register below!</h2>
							</header>

							<?php

         				// define variables and set to empty values
							$nameErr = $emailErr = $addressErr = $cityErr = $stateErr = $zipErr = "";
							$name = $email = $address = $city = $state = $zip = $baseball = $basketball = $football = 
							$volleyball = "";

							if ($_SERVER["REQUEST_METHOD"] == "POST") {
							// Name check
								if (empty($_POST["name"])) {
									$nameErr = "Missing.";
								}
								else {
									$name = test_input($_POST["name"]);
								}
								if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
									$nameErr = "Only letters and white space allowed.";
								}
								if (trim($name) == '') {
									$nameErr = "Missing.";
								}

							// Email check
								if (empty($_POST["email"])) {
									$emailErr = "Missing.";
								}
								else {
									$email = test_input($_POST["email"]);
								}
								if (!preg_match("/^[a-zA-Z0-9_\+]*@[a-zA-Z0-9]+\.[a-zA-z]+$/", $email)){
									$emailErr = "Enter a valid email address";
								}

							// Address check
								if (empty($_POST["address"])) {
									$addressErr = "Missing.";
								}
								else {
									$address = test_input($_POST["address"]);
								}
								if (trim($address) == '') {
									$addressErr = "Missing.";
								}

							// City check
								if (empty($_POST["city"])) {
									$cityErr = "Missing.";
								}
								else {
									$city = test_input($_POST["city"]);
								}
								if (!preg_match("/^[a-zA-Z ]*$/",$city)) {
									$cityErr = "Only letters and white space allowed.";
								}
								if (trim($city) == '') {
									$cityErr = "Missing.";
								}

							// State check
								if (empty($_POST["state"])) {
									$stateErr = "Missing.";
								}
								else {
									$state = test_input($_POST["state"]);
								}
								if (!preg_match("/^[a-zA-Z ]*$/",$state)) {
									$stateErr = "Enter Valid State";
								}
								if (trim($state) == '') {
									$stateErr = "Missing.";
								}

							// Zipcode check
								if (empty($_POST["zip"])) {
									$zipErr = "Missing.";
								}
								else {
									$zip = test_input($_POST["zip"]);
								}
								if (!preg_match ('/^[0-9]{5}$/', $zip)){
									if (!preg_match ( '/^([0-9]{5})-([0-9]{4})$/', $zip) ) {
										$zipErr = "Enter Valid Zip";
									}
								}

								if(($nameErr == "") && ($emailErr == "") && ($addressErr == "") && ($cityErr == "") && ($stateErr == "") && ($zipErr == "")){
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "datanamics";

							// Create connection
									$conn = new mysqli($servername, $username, $password, $dbname);
							// Check connection
									if ($conn->connect_error) {
										die("Connection failed: " . $conn->connect_error);
									} 

									$name = $_POST['name'];
									$email = $_POST['email'];
									$address = $_POST['address'];
									$city = $_POST['city'];
									$state = $_POST['state'];
									$zip = $_POST['zip'];
									$baseball = $_POST['baseball'];
									$basketball = $_POST['basketball'];
									$football = $_POST['football'];
									$volleyball = $_POST['volleyball'];

									$sql = "INSERT INTO userData (name, email, address, city, state, zip, baseball, basketball, football, volleyball) VALUES ('$name', '$email', '$address', '$city', '$state', '$zip', '$baseball', '$basketball', '$football', '$volleyball')";

									if ($conn->query($sql) === TRUE) {
										echo "<div style ='font:21px;font-size:200%;font-weight: 900;color:#38B400;text-align:center'> Signup successful.</div>";
									} else {
										echo "Error: " . $sql . "<br>" . $conn->error;
									}

									$conn->close();



								//email stuff

								/**
 * This example shows settings to use when sending via Google's Gmail servers.
 */
//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
								date_default_timezone_set('Etc/UTC');
								require './PHPMailer-master/PHPMailerAutoload.php';
//Create a new PHPMailer instance
								$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
								$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
								$mail->SMTPDebug = 0;
//Ask for HTML-friendly debug output
								$mail->Debugoutput = 'html';
//Set the hostname of the mail server
								$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
								$mail->Port = 587;
//Set the encryption system to use - ssl (deprecated) or tls
								$mail->SMTPSecure = 'tls';
//Whether to use SMTP authentication
								$mail->SMTPAuth = true;
//Username to use for SMTP authentication - use full email address for gmail
								$mail->Username = "datanamicsUVA@gmail.com";
//Password to use for SMTP authentication
								$mail->Password = "datanamic";
//Set who the message is to be sent from
								$mail->setFrom('datanamicsUVA@gmail.com', 'Data Namic');
//Set an alternative reply-to address
								//$mail->addReplyTo('replyto@example.com', 'First Last');
//Set who the message is to be sent to
								$mail->addAddress($email, 'John Doe');
//Set the subject line
								$mail->Subject = 'Datanamic Subscription Confirmation';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
								//$mail->msgHTML('hi');
//Replace the plain text body with one created manually
								$body = "Thank you $name"."!"."

								Your payment has been received, and your subscription will begin immediately.
								We hope that the Datanamics system will help bring your team to the next level.
								Good Luck!
								-The Datanamics Team";
								$mail->Body = $body;
//Attach an image file
								//$mail->addAttachment('images/phpmailer_mini.png');
//send the message, check for errors
								if (!$mail->send()) {
									echo "Mailer Error: " . $mail->ErrorInfo;
								} else {
									echo "<div style ='font:21px;font-size:100%;font-weight: normal;color:#38B400;text-align:center'> You will receive a confirmation email shortly.</div>";
								}

								$name = $email = $address = $city = $state = $zip = $baseball = $basketball = $football = $volleyball = "";

							}
						}

						function test_input($data) {
							$data = trim($data);
							$data = stripslashes($data);
							$data = htmlspecialchars($data);
							return $data;
						}
						?>

						<p><span class = "error">All fields required.</span></p>

						<!--Personal info-->

						<form method = "post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
							<table>
								<tr>
									<td style='font-size:120%;'><u>Personal Information</u></td>
								</tr>

								<tr>
									<td><br/>Name:</td>
									<td><br/><input type = "text" name = "name" value="<?php echo htmlspecialchars($name);?>">
										<span class = "error"><?php echo $nameErr;?></span>
									</td>
								</tr>

								<tr>
									<td>E-mail: </td>
									<td><input type = "text" name = "email" value="<?php echo htmlspecialchars($email);?>">
										<span class = "error"><?php echo $emailErr;?></span>
									</td>
								</tr>

								<tr>
									<td>Street Address: </td>
									<td><input type = "text" name = "address" value="<?php echo htmlspecialchars($address);?>">
										<span class = "error"><?php echo $addressErr;?></span>
									</td>
								</tr>

								<tr>
									<td>City:</td>
									<td><input type = "text" name = "city" value="<?php echo htmlspecialchars($city);?>">
										<span class = "error"><?php echo $cityErr;?></span>
									</td>
								</tr>

								<tr>
									<td>State:</td>
									<td><input type = "text" name = "state" value="<?php echo htmlspecialchars($state);?>">
										<span class = "error"><?php echo $stateErr;?></span>
									</td>
								</tr>

								<tr>
									<td>Zipcode:</td>
									<td><input type = "text" name = "zip" value="<?php echo htmlspecialchars($zip);?>">
										<span class = "error"><?php echo $zipErr;?></span>
									</td>
								</tr>

								<tr>
									<td><br/>Sports (select all that apply): &emsp;</td>
									<td><br/><input type="hidden" name="baseball" value=0> 
										<input type="checkbox" name="baseball" value=1>Baseball<br>
										<input type="hidden" name="basketball" value=0> 
										<input type="checkbox" name="basketball" value=1>Basketball<br>
										<input type="hidden" name="football" value=0> 
										<input type="checkbox" name="football" value=1>Football<br>
										<input type="hidden" name="volleyball" value=0> 
										<input type="checkbox" name="volleyball" value=1>Volleyball<br>
									</td>
								</tr>

								<!--Credit card info-->
								<tr>
									<td style='font-size:120%;'><u><br/>Banking Information</u></td>
								</tr>

								<tr>
									<td colspan='2'><br/>Currently, our service is subscription based at a rate of 
										<strong>$10/month</strong>.</td>
								</tr>

								<!--?INPUT VALIDATION?-->
								<tr>
									<td><br/>Credit Card Number:</td>
									<td><br/><input type="text" size="20" data-stripe="number"/></td>
								</tr>

								<tr>
									<td>CVV:</td>
									<td><input type="text" size="4" data-stripe="cvc"/></td>
								</tr>

								<tr>
									<td>Expiration Date (MM/YYYY):</td>
									<td><input type="text" size="2" data-stripe="exp-month"/> / 
										<input type="text" size="4" data-stripe="exp-year"/></td>
								</tr>

								<td>
									<br/><input type = "submit" name = "submit" value = "Submit">
								</td>

							</table>

						</form>

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