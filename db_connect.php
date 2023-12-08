<?php

    $server = "localhost";
    $user = "root";
    $pw = "Admin";
    $db = "barevifter";

    $conn = mysqli_connect($server, $user, $pw, $db);

    if(!$conn) {
        echo "Connection failed!";        
    }
