<?php
@include 'database.php';
if (isset($_POST[''])) {
  $password=password_hash($_POST["password"],PASSWORD_DEFAULT);
$email=$_POST['email'];
$sql="UPDATE `user` SET passwords='$password'";
$result=$mysqli->query($sql);
if($result){
  header("hello.php");

}else{
  header("reset.php");
}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Chedi regester</title>
    <link rel="stylesheet" href="reset.css">
</head>
<body>
  <h1 class="heading">CHEDI LINKERS</h1>
   <div class="center">


    <h1>Register</h1>
    <form method="POST">

     <div class="text_field">
                <input type="email" name="email" required id="mail"  autocomplete="false" placeholder="regestered email">
                <span></span>
                <label></label>
                <br>
              <div class="text_field">
                <label></label>
                <input type="password" name="password" required id="pass" placeholder="new password">
                <span></span>


                      </div>
<input type="submit" value="Change" name="submit">
<div class="signup_link">
remember password?<a href="login.php">Login</a>
   </div>
</form>

</div>
</body>
</html>
</body>
</html>
