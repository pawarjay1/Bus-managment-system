<?php
$server = "localhost"; 
$username = "root"; 
$password = ""; 
$db = "bus tracking"; 

$conn = mysqli_connect($server,$username,$password,$db); 

if(!$conn){
    die("not connected with server!"); 
}

?>