<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
			<li id="a"><a href="login.php"><i class="fa fa-user"></i> Log In </a></li>
			<li id="b"><a href="signup.php"> Sign Up </a></li>
			<li id="c" style="display:none;"><a href="">User Name</a></li>
			<li id="d" style="display:none;"><a href="">Log Out</a></li>
			</ul>
			</div>
			</form>
			</nav>
			</div>
		</div>
	
		<!--image section-->
		
		<h1 style="text-align:center;text-decoration: underline overline;color:blue;">User Sign Up</h1>
		
		<!--Service section-->
		
		<div class="services">
		
		<form method="post" action="post_to_database.php" style="text-align:center; padding-top: 180px;">
		   User name: <input type="" placeholder="Mr.Abc" id="uname" name="uname" style="text-align:center;">
            <br/>
			<br/>
            User Email: <input type="email" placeholder="something@gmail.com" id="email" name="email" style="text-align:center;">
            <br/>
			<br/>
            Password: <input type="password" id="pass" name="pass" style="padding-left:12px;">
            <br/>
			<br/>
			Address: <input type="" id="address" name="address" style="padding-left:12px;">
            <br/>
			<br/>
			Phone: <input type="" id="phone" name="phone" style="padding-left:12px;">
            <br/>
			<br/>
            <input type="submit" name="login" value="Log In">
        </form>
	
		
		</div>

		
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
