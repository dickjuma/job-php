<?php
@include 'header.php';
@include 'database.php';
$sql="INSERT INTO contact(name,Email,issue) VALUES(?,?,?)";
$stmt = $mysqli->stmt_init();
if(!$stmt->prepare($sql)){
    echo "sql error". $mysqli->error;
}
$stmt->bind_param("sss",

$_POST["name"],
$_POST["email"],
$_POST["text"]);
 if($stmt->execute()){

    header("location:dashboard.php");
    exit;
 }
else{
    $error[]='error uploading your issue';
    header('contact.php');
};

?>
?
<html>
    <head>
<link rel="stylesheet" href="contact.css">
    </head>
<body>


<h1 align="center">contact chedi linkers for any enquiry</h1>
<H2 align = "center"><I>Welcome</I></H2><HR color = "magenta" size = "5">
    <form action="" method="POST">
    <div class="contact">
    <div class="con">
<label for="name">Name</label>
<input type="text" name="name" id="juma" autocomplete="on" required="true" autofocus="on" placeholder="names">
<br>
    </div>
<div class="con">
<label for="na">Email address</label>
<input type="text" name="email" id="wafula" autocomplete="on" required="true" autocomplete="on" placeholder="Email address">
<br>
<br>
</div>

    <textarea placeholder="type your message here" rows="15" cols="50" name="text"></textarea>
    <br>
<input type="submit" value="send">
</div>
</div>
</fieldset>
</form>
</body
<footer>
    <?php
    @include 'footer.php';
    ?>
</footer>

</html>
