<?php
$is_invalid=false;
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  require __DIR__ ."/database.php";
  $sql=sprintf("SELECT * FROM user WHERE Email = '%s'",
  $mysqli->real_escape_string($_POST["email"]));
  $result= $mysqli->query($sql);
$dicy=$result->fetch_assoc();
if ($dicy) {
if(password_verify($_POST["password"], $dicy["passwords"])) {
  session_start();
  session_regenerate_id();
  $_SESSION["user_id"] = $dicy["id"];
  header("location:dashboard.php");
  exit;
}
}
$is_invalid=true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Chedi login</title>
    <link rel="stylesheet" href="login.css"

</head>
<body>
  <h1 class="heading">CHEDI LINKERS</h1>
<div class="contain">
  <div class="image">


 <div class="center">
    <h1>login</h1>
     <?php if($is_invalid): ?><h5 style="text-align: center;">Invalid Details</h5>
     <?php endif; ?>
    <form method="POST" >
      <div class="text_field">
<input type="text" name="email" required value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">
<span></span>
<label>Email Address</label>

      </div>
      <div class="text_field">
        <input type="password" name="password" required>
        <span></span>
        <label>Password</label>

              </div>
              <div class="pass"><a href="reset.php">Forgot password??</a></div>
<input type="submit" value="login" name="submit">
<div class="signup_link">
    Not a member?<a href="index.php">Signup</a>
</div>
            </form>
   </div>
  </div>
   </div>
</body>
</html>
