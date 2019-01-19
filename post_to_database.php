<?php

	$serveraddr = "localhost";
    $username = "root";
    $password = "";                    
    $dbname = "qw";
	$user_name=$_POST['uname'];
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$address=$_POST['address'];
	$phone=$_POST['phone'];
	
	
    $subject = "Welcome From Security Provider";
    $txt = "Congratulations , You Are Register Now With Us";
    $headers = "From: securityprovider@nasiruddinahmed.com' . '\r\n" ;
	
	
	
	
       try {
             $conn = new PDO("mysql:host=$serveraddr;dbname=$dbname", $username, $password);
             $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			 
			  $stmt = "insert into sign_up values(' ','$user_name','$email','$pass','$address','$phone')";
              $conn->exec($stmt);
			  echo "<script>window.alert('User Sign Up Is Successfull , Check Your Email Email');</script>";
			 
			  "CC: somebodyelse@example.com";

               mail($email,$subject,$txt,$headers);
			   echo "<script>window.location.assign('index.php');</script>";
			   
			 } catch (PDOException $ex) {
                                echo "<script>showalert('Sign Up Error');</script>";
                            }



?>