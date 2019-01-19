<?php





	$serveraddr = "localhost";
    $username = "root";
    $password = "";                    
    $dbname = "qw";
	$email=$_POST['e'];
	$message=$_POST['msg'];
	
	
   
	
	
	
	
       try {
             $conn = new PDO("mysql:host=$serveraddr;dbname=$dbname", $username, $password);
             $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			 
			  $stmt = "insert into msg values('$email','$message')";
              $conn->exec($stmt);
			  echo "<script>window.alert('User Message Sent Successfull!');</script>";
			 
			  "CC: somebodyelse@example.com";

               mail($email,$subject,$txt,$headers);
			   echo "<script>window.location.assign('index.php');</script>";
			   
			 } catch (PDOException $ex) {
                                echo "<script>showalert('message error');</script>";
                            }



?>