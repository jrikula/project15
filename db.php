<?php
$servername="localhost:3307";
$username="admin_jrikula";
$password="u6Bzkb8OdhwR2PRA";
$dbname ="moviehut";

// creating connection 
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) 
    die("Connection failed: ".$conn->connect_error);
?>
