<?php
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['username'])) {

?>

<!DOCTYPE html>
<html>
<head>
    <title>yadda</title>
    <link rel="shortcut icon" href="#" />
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1> Hei, <?php echo $_SESSION['username']; ?> </h1>
    <table>
        <td>
        <tr>
            <a href="logout.php">Logg ut</a>
        </td>
        </tr> 
    </table>

    <div id="gameContainer">
        <h1>3 på rad</h1>
        <div id="cellContainer">
            <div cellIndex="0" class="cell"></div>
            <div cellIndex="1" class="cell"></div>
            <div cellIndex="2" class="cell"></div>
            <div cellIndex="3" class="cell"></div>
            <div cellIndex="4" class="cell"></div>
            <div cellIndex="5" class="cell"></div>
            <div cellIndex="6" class="cell"></div>
            <div cellIndex="7" class="cell"></div>
            <div cellIndex="8" class="cell"></div>
        </div>
        <h2 id="statusText"></h2>
        <button id="restartBtn">Start på nytt</button>
    </div>
    <script type="text/javascript" src="home.js"></script>
</body>
</html>

<?php
}
else {
    header("Location: index.php");
    exit();
}

?>

