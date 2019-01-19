
<?php

session_start();


if (!isset($_SESSION['email'])) {
    echo "<script>window.alert('Error');</script>";
	
} 
else {
	$serveraddr = "localhost";
    $username = "root";
	$password="";
                      
    $dbname = "qw";
	$user_email=$_SESSION['email'];
	$newp=$_POST['newp'];
	$var=$_SESSION['email'];
	                
	
    


try {
             $conn = new PDO("mysql:host=$serveraddr;dbname=$dbname", $username, $password);
             $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			 
			  $stmt = "UPDATE sign_up SET pass='$newp' WHERE email='$var'";
			  
              $conn->exec($stmt);
			  
			  echo "<script>window.alert('Password Change Successful');</script>";
			 
			  
			   echo "<script>window.location.assign('cart.php');</script>";
			   
			 } catch (PDOException $ex) {
                                echo "<script>showalert('Sign Up Error');</script>";
                            }

}

?>

