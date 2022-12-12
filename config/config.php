<?php
    include_once("define.php");
    $conn = mysqli_connect(HOST , USER , PASS , DB);

    if(!$conn){
        echo "Connection failed: " . mysqli_connect_error();    
        // return  "<h1>Something went  wrong </h1>";
        // die("Connection failed: " . mysqli_connect_error());
    }else{
        // echo "Connected successfully";
    }
    
?>