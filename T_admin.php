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
        <link rel="stylesheet" href="css/bootstrap-datepicker.css" type="text/css">
		<script src="js/vendor/jquery-3.2.1.min.js"></script>
		<script src="js/vendor/modernizr-3.5.0.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/main.js"></script>
		<script src="js/plugins.js"></script>
        <script src="js/bootstrap-datepicker.min.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
        

		
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
			<li> <input type="text" id="search" class="lll" placeholder="Search User...." onkeyup="admin_search();"></li>
			<div class="log">
			<ul>
			<li><a href=""><i class="fa fa-user"></i> Admin </a></li>
			<li><a href=""> Log Out </a></li>
			</ul>
			</div>
			</form>
			</nav>
			</div>
		</div>
	

		
		<!--sidebar menu-->
		
		<div class= "sideber col-sm-3">
		       <section class= "menubar"> MENU </section>
             <div class= "nav">
                <h4><a href="bsr.php"> Bank </a>   </h4>
                <h4><a href="asr.php"> ATM  </a>   </h4>
                <h4><a href="esr.php"> EVENT  </a>  </h4>
                <h4><a href="hsr.php"> HOME  </a>    </h4>
                <h4><a href="mfu.php"> Message  </a></h4>
               
		</div>	
		<div>
		
			</div>
     </div>
	 
	 
	   <div class="main col-sm-9">
	     <table style="width: 100%;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>user_name</th>
                    <th>email</th>
                    <th>password</th>
                    <th>address</th>
					<th>phone</th>
                </tr>
            </thead>
            <tbody id="tbody">

                <?php
                try {
                    $con = new PDO("mysql:host=localhost;dbname=qw", "root", "");

                    $stmt = "select * from sign_up";
                    $pdostmt = $con->query($stmt);
                    $table = $pdostmt->fetchAll(PDO::FETCH_NUM);

                    foreach ($table as $row) {
                        echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td>";
                        
                    }
                    
                    if($pdostmt->rowCount()==0){
                        echo "<tr><td colspan='5' style='text-align:center'>No Data Exists</td></tr>";
                
                    }
                } catch (PDOException $ex) {
                    echo "<tr><td colspan='5' style='text-align:center'>No Data Exists</td></tr>";
                }
                ?>

            </tbody>
        </table>
	   
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
		
		
		
		 <script>
            
            
            

            function admin_search() {
                var curvalue=document.getElementById('search').value;
                
                var request=new XMLHttpRequest();
                
                request.onreadystatechange= function(){
                    if(this.readyState==4 && this.status==200){
                        document.getElementById('tbody').innerHTML=request.responseText;
                    }
                }
                
                request.open("GET","internal.php?search="+curvalue, true);
                request.send();
            }
        </script>
            
	

		
    </body>
	<style>
	.body{
	margin: 0;
	padding: 0;
	overflow: hidden;
}
.container-fluid{
	background-color: #1C0C4F;
}
.menu h1{
	color: white;
	font-family: 'Cherry Swash', cursive;
	font-weight: 500;
	line-height: 1.1;
	padding-left: 5px;
	padding-right: 180px;
}
.log ul{
	list-style: none;
	padding-left: 35px;
    padding-top: 15px;
    padding-bottom: 15px;
	margin: 0;
	float: right;
	font-size: 18px;
	
}
.log ul li{
	display: inline-block;
	margin-left: auto;
	
}
.log ul li a{
	text-decoration: none;
	padding: 8px;
	margin: 0;
	border-bottom: none;
	color: white;
	
}
li {
	float: left;
}

.buton{
	background-color: #1C0C4F;
	padding: 5px;
	margin-left: 20px;
	margin-right: 1500px;
	margin-top: 1px;
	margin-bottom: 0px;
}
.buton h3{
	text-align: center;
	padding-top: 0px;
}

.buton h3 a{
	text-decoration: none;
	color: white;
}



.lll{
	background-image: url(../img/icons8-search-32.png);
	background-repeat: no-repeat;
	background-position: 6px;
	padding: 12px 20px 14px 42px;
	border-radius: 25px;
	margin-top: 5px;
	outline: none;
	width: 200px;
	-webkit-transition:width 0.7s ease-in-out;
	-moz-transition:width 0.7s ease-in-out;
	-ms-transition:width 0.7s ease-in-out;
	-o-transition:width 0.7s ease-in-out;
	transition: width 0.7s ease-in-out;
	
}
input[type=text]:focus{
	width: 400px;
}
/* middle work */

.sideber{
	float: left;
	background: #E5DFDF;
	width:210px;
	height: 600px;
	
}
.menubar{
   
	background: #210B61;
	color: #fff;
	margin:20px;
	padding: 10px;
	text-align:center;
}


.nav h4 {
	font-size: 22px;
	padding-bottom:15px;
    padding-left: 40px;
	
}

.nav h4 a{
	text-decoration: none;
	color: #CD2727;
}

.nav h4 a:hover{
	background:#F87D7D;
	padding: 10px;
}


.main{
	float: left;
	background: #fff;
	width: 84%;
}

.main h3{
	text-align: center;
	color: black;
	font-size:25px;
	margin: 0px;
	padding-top: 10px;
	padding-bottom: 10px; 
	border-bottom: 1px solid #CCBCBC;
	
}

.form{
	background: #E5DFDF;
	margin: 10px 20px 10px 20px;
    padding:60px;
}

.ddd{
    font-size: 15px;
    font-weight: bold;
    
}
.abc{
    width: 355px;
    margin:10px;
    height:30px;
}
.ab{
   width: 55px;
    margin:10px;
    height:30px;
}
.cc{
    margin-left: 20px;
}
.group{
    margin-top: 0px;
    font-size: 15px;
    font-weight: bold;
}
.choose p{
    padding: 10px;
    color: #fff;
    background: #210B61;
    text-align: center;
    margin-left: 240px;
    margin-right: 200px;
    margin-top: 20px;
}
.previous{
   padding: 10px;
    width: 200px;
    color: #fff;
    background: #210B61;
    text-align: center;
        padding-bottom: 2px;
    margin-right: 650px;
}
.next{
    padding: 10px;
    padding-bottom: 2px;
   float: right;
     width: 200px;
    color: #fff;
    background: #210B61;
    text-align: center;
}
/*------*/
.bar{
      margin-top: 600px;
    border-top: 2px solid black;
}
.footer{
     margin-left: 600px;
  
      
   
}

.footer ul li{
    list-style: none;
     margin-top: 20px;
    margin-bottom: 70px;
   
     
}
.footer li a{
    text-decoration: none;
    color: black;
    margin-right: 30px;
     font-weight: 500px;
    
}
	
	
	</style>
</html>
