
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
			 
			  $stmt = "UPDATE bank SET status='$yes' WHERE bs_id='$sure'";
			 
			  
              $conn->exec($stmt);
			  
			  echo "<script>window.alert('Bank Service Assigned');</script>";
			 
			  
			   echo "<script>window.location.assign('bsr.php');</script>";
			   
			 } catch (PDOException $ex) {
                                echo "<script>showalert('Sign Up Error');</script>";
                            }



?>

