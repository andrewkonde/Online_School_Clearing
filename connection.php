<?php

$host="localhost";
$user="root";
$password="";
$database="clearing";

$connection=new mysqli("$host", "$user", "$password", "$database");
if(!$connection){
	die ("Connection Failed: ".$connection->connect_error);
}
?>