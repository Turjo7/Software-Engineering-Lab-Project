<?php



session_start();

//if (!isset($_SESSION['uname'])) {
//    echo "<script>window.location.assign('index.php')</script>";
//} else {
//echo "<script>window.alert('i am here')</script>";
    $email = "";
    $pass = "";
    if (isset($_POST['email']) && isset($_POST['pass'])) {
        $email = $_POST['email'];
        $pass = $_POST['pass'];
    }

    if (!empty($email) && !empty($pass)) {
        
        try {
            $con = new PDO('mysql:host=localhost;dbname=qw', 'root', '');
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = "select * from sign_up where email='$email' && pass='$pass'";
            $pdostmt = $con->query($stmt);

            if ($pdostmt->rowCount() == 1) {
                
                $_SESSION['email'] = $email;
                echo "<script>window.location.assign('index_1.php');</script>";

            } else {
                echo "<script>window.location.assign('index.php?status=invalid');</script>";
            }
        } catch (PDOException $ex) {
            echo "<script>window.location.assign('index.php?status=dberror');</script>";
        }
    } else {
        echo "<script>window.location.assign('index.php?status=invalid')</script>";
    }
//}
?>

