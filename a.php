<?php
session_start();

if (!isset($_SESSION['email'])) {
    echo "<script>window.location.assign('index.php')</script>";
	
} else {

	$serveraddr = "localhost";
    $username = "root";
                      
    $dbname = "qw";
	$user_email=$_SESSION['email'];
	$b_date=$_POST['da'];
	$b_time=$_POST['ti'];
	$address=$_POST['add'];
	
	
	
	
	
	
       try {
             $conn = new PDO("mysql:host=$serveraddr;dbname=$dbname", $username, $password);
             $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			 
			  $stmt = "insert into atm values(' ','02','$b_date','$b_time','$address','$user_email')";
			  $stmt_1="insert into cart values(' ','$user_email','02','ATM','$b_date','$b_time')";
              $conn->exec($stmt);
			  $conn->exec($stmt_1);
			  echo "<script>window.alert('Submission Successful!,Wait For Admin Response');</script>";
			 
			  
			   echo "<script>window.location.assign('index_1.php');</script>";
			   
			 } catch (PDOException $ex) {
                                echo "<script>showalert('Sign Up Error');</script>";
                            }

}

?>