<?php

$host="database-1.cp6e46ke6f6d.us-east-1.rds.amazonaws.com";
$user="database-1";
$pass="Test-db07";
$db="Tutorial_db";
$conn=new mysqli($host,$user,$pass,$db);
if($conn->connect_error){
    echo "Failed to connect DB".$conn->connect_error;
}
?>