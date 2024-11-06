<?php

$host="testdb.cp6e46ke6f6d.us-east-1.rds.amazonaws.com";
$user="admin";
$pass="Test-db24#";
$db="testdb";
$conn=new mysqli($host,$user,$pass,$db);
if($conn->connect_error){
    echo "Failed to connect DB".$conn->connect_error;
}
?>