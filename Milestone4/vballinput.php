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
                                        <li><a href="volleyball.php" class="side">Volleyball</a></li>
                                        <li><a href="basketball.php" class="side">Basketball</a></li>
                                    </ul>
                                </section>
                                <section>
                                    <div style='text-align: center;'>
                                        <a href="logout.php" class="button-big">Log Out</a>
                                    </div>
                                </section>
                </section>

            </div>
            <div class="9u">

                <!-- Main Content -->
                <section style="text-align:center;">
                    <header >
                        <h2>Input volleyball data.</h2>
                    </header>
                    
                    <table class="inputTable">
                    	<tr>
                    		<td class="inputTable" style="background: lightblue;"/>
                    		<td class="inputTable" style="background: lightblue;">Player Name</td>
                    		<td class="inputTable" style="background: lightblue;">Kills</td>
                    		<td class="inputTable" style="background: lightblue;">Assists</td>
                    		<td class="inputTable" style="background: lightblue;">Digs</td>
                    		<td class="inputTable" style="background: lightblue;">Errors</td>
                    		<td class="inputTable" style="background: lightblue;">Aces</td>
                    	</tr>

                    	<tr>
                    		<td class="inputTable" style="background: lightblue;">1. </td>
                    		<td class="inputTable"><input type="text" size="25"></td>
                    		<td class="inputTable"><input type="text" size="8"></td>
                    		<td class="inputTable"><input type="text" size="8"></td>
                    		<td class="inputTable"><input type="text" size="8"></td>
                    		<td class="inputTable"><input type="text" size="8"></td>
                    		<td class="inputTable"><input type="text" size="8"></td>
                    	</tr>

                    	<tr>
                    		<td class="inputTable" style="background: lightblue;">2. </td>
                    		<td class="inputTable"><input type="text" size="25"></td>
                    		<td class="inputTable"><input type="text" size="8"></td>
                    		<td class="inputTable"><input type="text" size="8"></td>
                    		<td class="inputTable"><input type="text" size="8"></td>
                    		<td class="inputTable"><input type="text" size="8"></td>
                    		<td class="inputTable"><input type="text" size="8"></td>
                    	</tr>

                    	<tr>
                    		<td class="inputTable" style="background: lightblue;">3. </td>
                    		<td class="inputTable"><input type="text" size="25"></td>
                    		<td class="inputTable"><input type="text" size="8"></td>
                    		<td class="inputTable"><input type="text" size="8"></td>
                    		<td class="inputTable"><input type="text" size="8"></td>
                    		<td class="inputTable"><input type="text" size="8"></td>
                    		<td class="inputTable"><input type="text" size="8"></td>
                    	</tr>

                    	<tr>
                    		<td class="inputTable" style="background: lightblue;">4. </td>
                    		<td class="inputTable"><input type="text" size="25"></td>
                    		<td class="inputTable"><input type="text" size="8"></td>
                    		<td class="inputTable"><input type="text" size="8"></td>
                    		<td class="inputTable"><input type="text" size="8"></td>
                    		<td class="inputTable"><input type="text" size="8"></td>
                    		<td class="inputTable"><input type="text" size="8"></td>
                    	</tr>

                    	<tr>
                    		<td class="inputTable" style="background: lightblue;">5. </td>
                    		<td class="inputTable"><input type="text" size="25"></td>
                    		<td class="inputTable"><input type="text" size="8"></td>
                    		<td class="inputTable"><input type="text" size="8"></td>
                    		<td class="inputTable"><input type="text" size="8"></td>
                    		<td class="inputTable"><input type="text" size="8"></td>
                    		<td class="inputTable"><input type="text" size="8"></td>
                    	</tr>

                    	<tr>
                    		<td class="inputTable" style="background: lightblue;">6. </td>
                    		<td class="inputTable"><input type="text" size="25"></td>
                    		<td class="inputTable"><input type="text" size="8"></td>
                    		<td class="inputTable"><input type="text" size="8"></td>
                    		<td class="inputTable"><input type="text" size="8"></td>
                    		<td class="inputTable"><input type="text" size="8"></td>
                    		<td class="inputTable"><input type="text" size="8"></td>
                    	</tr>
                    </table>

                    <br/>
                    <a href="volleyball2.php" class="button-smol">Submit</a>
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