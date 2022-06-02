<?php

    $serverName = "localhost";
    $dbUserName = "root";
    $dbPassword = "";

    
    $dbName = "taralimited";

    $conn = new mysqli($serverName, $dbUserName, $dbPassword, $dbName);

    if($conn->connect_error)
    {
        die("****** Connection Failed!".$conn->connect_error);
    }

    try{
        $DBH = new pdo("mysql:host=$serverName;dbname=$dbName", $dbUserName, $dbPassword);
    }catch(PDOException $e){
        echo "Not Connected..".$e->getMessage();
    }
?>