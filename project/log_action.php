<?php
session_start();
@include 'database.php';

if(isset($_POST['submit'])){
  $name=mysqli_real_escape_string($con,($_POST['name']));
  $email=mysqli_real_escape_string($con,($_POST['email']));
  $number=mysqli_real_escape_string($con,($_POST['number']));
$password=md5($_POST['password']);
$select="SELECT * FROM user WHERE Email='$email' && password='$password'";
$result = mysqli_query($con, $select);
if(mysqli_num_rows($result)> 0){
    $row = mysqli_fetch_assoc($result);
    if(is_array($row) && !empty($row)){
$_SESSION['valid']=$row['Email'];
$_SESSION['id']=$row['id'];
$_SESSION['username']=$row['username'];
$_SESSION['number']=$row['number'];

}
else{
    $error[]='wrong username or password';
}
if(isset($_SESSION['valid'])){
    header('location:dashboard.php');
}
}}

?>
