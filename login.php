<?php
session_start();
include "db_connect.php";

if(isset($_POST['brukernavn']) && isset($_POST['passord'])) {

    
    


$brukernavn = $_POST['brukernavn'];
$passord = $_POST['passord'];
/*
if(empty($brukernavn)) {
    header ("Location: index.php?error=Username is required!");
    exit();
}
else if(empty($passord)) {
    header ("Location: index.php?error=Password is required!");
    exit();
}*/

$sql = "SELECT * FROM kunde WHERE fornavn='$brukernavn' AND passord='$passord'"; 

$result = mysqli_query($conn, $sql);
print_r(mysqli_num_rows($result));


if(mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    if($row['fornavn'] == $brukernavn && $row['passord'] == $passord) {
        echo "Innlogget";
        $_SESSION['username'] = $row['fornavn'];
        $_SESSION['id'] = $row['kundenr'];
        header("Location: home.php");
        echo "ok";
        exit();
    }
    else{
        echo "fEilet";
        header("Location: index.php?error=Ugyldig brukernavn eller passord!");
        exit();
    }
}
else {
    echo "fwilet";
    header("Location: index.php");
    exit();
}
}
?>