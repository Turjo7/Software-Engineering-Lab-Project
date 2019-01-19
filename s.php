
<?php



	$serveraddr = "localhost";
    $username = "root";
	$password="";
                      
    $dbname = "qw";
	$sure=$_POST["s"];
	 $yes="Yes";               
	
    


try {
             $conn = new PDO("mysql:host=$serveraddr;dbname=$dbname", $username, $password);
             $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			 
			  $stmt = "UPDATE home SET status='$yes' WHERE h_id='$sure'";
			  
              $conn->exec($stmt);
			  
			  echo "<script>window.alert('HOME Service Assigned');</script>";
			 
			  
			   echo "<script>window.location.assign('hsr.php');</script>";
			   
			 } catch (PDOException $ex) {
                                echo "<script>showalert('Sign Up Error');</script>";
                            }



?>

