
<?php



	$serveraddr = "localhost";
    $username = "root";
	$password="";
                      
    $dbname = "qw";
	$sure=$_POST["sure"];
	 $yes="Yes";               
	
    


try {
             $conn = new PDO("mysql:host=$serveraddr;dbname=$dbname", $username, $password);
             $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			 
			  $stmt = "UPDATE atm SET status='$yes' WHERE a_id='$sure'";
			  
              $conn->exec($stmt);
			  
			  echo "<script>window.alert('ATM Service Assigned');</script>";
			 
			  
			   echo "<script>window.location.assign('asr.php');</script>";
			   
			 } catch (PDOException $ex) {
                                echo "<script>showalert('Sign Up Error');</script>";
                            }



?>

