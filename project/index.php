<?php
@include 'database.php';
@include 'sign.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Chedi regester</title>
    <link rel="stylesheet" href="regester.css">
    <script type="text/javascript">
      function val(elem){
        if(isNaN(elem.value)){
          alert("phone number must be number ");
          return false;
        }
        true;
      }
function validate(){
  var username=document.getElementById("username");
  var email=document.getElementById("mail");
  var phonenumber=document.getElementById("phone");
  var password=document.getElementById("pass");
  if(username.value.trim() ==""||email.value.trim()==""||phonenumber.value.trim()==""||password.value.trim()==""){
    alert("You cant regester with blank values");
    return false;
  }
  else{
    true;
  }
  if(password.value.length <=6){
    alert("Password must be longer than 6 characters");
    return false;
  }
  else{
  true;
  }
if(password.value ===username.value){
  alert("password cant be same as  username 'please  try again'");
  return false;
}
else{
return true;
}
}
    </script>
</head>
<body>
  <h1 class="heading">CHEDI LINKERS</h1>
   <div class="center">


    <h1>Register</h1>
    <form method="POST">
     <?php if($error): ?><h5 style="text-align: center;">Email Already exists</h5>
     <?php endif; ?>

      <div class="text_field">
<input type="text" name="name" required id="username">
<span></span>
<label>Username</label>

      </div>
      <div class="text_field">
        <input type="text" name="email" required id="ma  il">
        <span></span>
        <label>Email Address</label>

              </div>
              <div class="text_field">
                <input type="text" name="number" required id="phone" onkeyup="val(this)">
                <span></span>
                <label>Phone Number</label>

                      </div>

              <div class="text_field">
                <input type="password" name="password" required id="pass">
                <span></span>
                <label>Password</label>

                      </div>
<input type="submit" value="Regester" name="submit">
<div class="signup_link">
Have account?<a href="login.php">Login</a>
   </div>
</form>

</div>
</body>
</html>
