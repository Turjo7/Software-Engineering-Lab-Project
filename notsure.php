
<?php



	$serveraddr = "localhost";
    $username = "root";
	$password="";
                      
    $dbname = "qw";
	$notsure=$_POST["notsure"];
	 $no="No";               
	
    


try {
             $conn = new PDO("mysql:host=$serveraddr;dbname=$dbname", $username, $password);
             $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			 
			  $stmt = "UPDATE bank SET status='$no' WHERE bs_id='$notsure'";
			  
              $conn->exec($stmt);
			  
			  echo "<script>window.alert('Bank Service Request Declained');</script>";
			 
			  
			   echo "<script>window.location.assign('bsr.php');</script>";
			   
			 } catch (PDOException $ex) {
                                echo "<script>showalert('Sign Up Error');</script>";
                            }



?>

