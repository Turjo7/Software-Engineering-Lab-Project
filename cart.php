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
		
		

		
		<!--Service section-->
		
		<div class="services">
		<div class="serv">
			<h2>User Cart </h2>
		</div>
		
	</div>
	
	<div>
	
	<h2>User Email: <?php echo $_SESSION['email']?></h2>
	<br/>
	<form method="post" action="updatep.php" style="margin-bottom:10px;border-style: solid;
  border-color: coral;">
	Enter New Password:<input type="" id="newp" name="newp" placeholder="Put New Password And Hit Enter">
	</form>
	<br/>
	<h2>All Service Request</h2>
	<hr/>
	<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "qw";
	$var=$_SESSION['email'];

// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "select * from cart where user_email='$var'";
	//$sql_1 = "select user_name from sign_up where email='$var'";
	$result = $conn->query($sql);
//	$result_1 = $conn->query($sql_1);
	//echo $result_1;

	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "cart_id: " . $row["cart_id"]."---". $row["user_email"]. "---" . $row["s_id"]."---".$row["s_name"]."---".$row["s_date"]."---".$row["s_time"]."---".$row["status"]."<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
<br/>
<br/>

<hr/>

<h3> 	Service Information : </h3>
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "qw";
	$var=$_SESSION['email'];

// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "select * from services;";
	//$sql_1 = "select user_name from sign_up where email='$var'";
	$result = $conn->query($sql);
//	$result_1 = $conn->query($sql_1);
	//echo $result_1;

	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "s_id: " . $row["s_id"]."---". $row["s_name"]. "---" . $row["s_id"]."---".$row["s_price_per_hour"]."---".$row["s_people"]."---"."<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
<hr/>
<h2>Total Bill:7500 BDT</h2>




<a href="https://www.easypayway.com/" target="_blank"><input type="button" value="Click To Pay(Real Payment Gateway)"></a>
	 
	</div>
		
		<!--service option-->
		
	
		
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

