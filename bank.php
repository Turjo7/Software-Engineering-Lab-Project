<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php

session_start();

if (!isset($_SESSION['email'])) {
    echo "<script>window.location.assign('index.php')</script>";
	
} else {
    ?>

<html>
    <head>
        <title> Security Provider </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="apple-touch-icon" href="icon.png">
		<link href="css/style.css" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Cherry+Swash:400,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Tajawal:400,500,700" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="css/normalize.css">
		<link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.css">
		<script src="js/vendor/jquery-3.2.1.min.js"></script>
		<script src="js/vendor/modernizr-3.5.0.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/main.js"></script>
		<script src="js/plugins.js"></script>
		
    </head>
	
    <body>
		
	<!--navigation bar section-->
		<div class="Topbar_wrapper container-fluid">
		<div class="container-fluid">
			<nav>
			<ul class="menu">
				<li><h1>Security Provider</h1> </li>
			</ul>
			
			<form action="">
			<li> <input type="text" name="" placeholder="Search...."></li>
			<div class="log">
			<ul>
			<li id="a" style="display:none;"><a href="login.php"><i class="fa fa-user"></i> Log In </a></li>
			<li id="b" style="display:none;"><a href="signup.php"> Sign Up </a></li>
		    <li id="c" ><a href="cart.php" style="color:#4dff4d;">USER: <?php echo  $_SESSION['email']?></a> </li>
			<li id="d"><a href="logout.php">Log Out</a></li>
			</ul>
			</div>
			</form>
			 <?php
        $status = "";
        if (isset($_GET['status'])) {
            $status = $_GET['status'];
            if ($status == 'invalid') {
                ?>
                <script>window.alert('invalid username or password');</script>
                <?php
            }
            else if($status=='dberror'){
                ?>
                <script>window.alert('Database Connection Error');</script>
                <?php
            }
            else if($status=='logout'){
                ?>
                <script>window.alert('Successfully logged out.');</script>
                <?php
            }
        }
        ?>
			</nav>
			</div>
		</div>
	
		<!--image section-->
		
		<h1 style="text-align:center;text-decoration: underline overline;color:blue;">Bank Service Taking Form Fill Up</h1>
		
		<!--Service section-->
		
		<div class="services">
		
		<form method="post" action="b.php" style="text-align:center; padding-top: 180px;">
            Date: <input type="date" placeholder="yyyy-mm-dd" id="da" name="da" style="text-align:center;">
            <br/>
			<br/>
            Time: <input type="" id="ti" name="ti" style="padding-left:12px;">
            <br/>
			<br/>
			Address: <input type="" id="add" name="add" style="padding-left:12px;">
            <br/>
			<br/>
            <input type="submit" name="bank_s" value="Go">
        </form>
		
		<!--Service section-->
		
		<div class="services">

		
		<!--Footer border section-->
       <div class="bar"></div>
		<div class="footer" > 
        
             <ul>
                  <li> <a href="#"> FAQ </a> </li>
                 <li> <a href="#"> TERMS </a> </li>
                 <li> <a href="#"> HELP </a> </li>
                 <li> <a href="#"> CONTACT US </a></li>
            
            </ul>
        
        </div>
            
		
    </body>
</html>
  <?php
}
?>

