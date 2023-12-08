<?php
session_start();
include "db_connect.php";

if(isset($_POST['brukernavn']) && isset($_POST['passord'])) {

   


$brukernavn = $_POST['brukernavn'];
$passord = $_POST['passord'];

if(empty($brukernavn)) {
    header ("Location: regitrering.php?error=Username is required!");
    exit();
}
else if(empty($passord)) {
    header ("Location: regitrering.php?error=Password is required!");
    exit();
}

$sql = "Insert into kunde(fornavn, passord) values ('$brukernavn', '$passord');"; 

$result = mysqli_query($conn, $sql);

header ("Location: index.php");

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>terminnoppgave</h1>
<form method="post">
    <h2>registrering:</h2>
    <label>Bruker: </label>
    <input type="text" name="brukernavn" placeholder="Brukernavn"><br/>
    <label>Passord: </label>
    <input type="password" name="passord" placeholder="Passord"><br/>
    <button type="submit">registrer</button><br/>
</form>
</body>
</html>