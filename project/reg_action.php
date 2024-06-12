<?php
session_start();
if(isset($_POST['submit'])){
  $name=mysqli_real_escape_string($con,($_POST['name']));
  $email=mysqli_real_escape_string($con,($_POST['email']));
  $number=mysqli_real_escape_string($con,($_POST['number']));
$password=password_hash($_POST["password"],PASSWORD_DEFAULT);
$select="SELECT * FROM user WHERE Email='$email'";
$result = mysqli_query($con, $select);
if(mysqli_num_rows($result)> 0){
  $error[]='user already exists';
}else{

  $insert="INSERT INTO user(username,Email,Phonenumber,password) VALUES ('$name','$email','$number','$password')";
  mysqli_query($con, $insert);
  header("location:login.php");
}
}
?>

