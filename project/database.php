<?php
$host="localhost";
$dbname="details";
$username="root";
$password="";

$mysqli=new mysqli($host,$username,$password,$dbname);
if ($mysqli->connect_error) {
    die("connection err". $mysqli->connect_error);
}
return $mysqli;
