<?php

$searchval = "";
if (isset($_GET['search']))
    $searchval = $_GET['search'];

try {
    $con = new PDO("mysql:host=localhost;dbname=qw", "root", "");

    $stmt = "select * from sign_up where email like '%$searchval%';";
    $pdostmt = $con->query($stmt);
    $table = $pdostmt->fetchAll(PDO::FETCH_NUM);

    $htmlcode="";
    foreach ($table as $row) {
        $htmlcode.="<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td>" ;
        
    }
    echo $htmlcode;
} catch (PDOException $ex) {
    echo "<tr><td colspan='6' style='text-align:center'>No Data Exists</td></tr>";
}
?>
