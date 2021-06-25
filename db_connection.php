<?php

function OpenCon()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbName = "form";
    
    $conn = new mysqli($servername, $username, $password, $dbName);

    if($conn->error){
        die("Connection Failed:  %s \n". $conn->error);
    }

    return $conn;
}

function CloseCon ($conn){
    $conn -> close();
}

?>