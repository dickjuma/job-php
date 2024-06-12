<?php
$passwords=password_hash($_POST["password"],PASSWORD_DEFAULT);
$mysqli=require __DIR__ . "/database.php";
$sql="INSERT INTO user(username,email,phonenumber,passwords) VALUES(?,?,?,?)";
$stmt = $mysqli->stmt_init();
if(!$stmt->prepare($sql)){
    echo "sql error". $mysqli->error;
}
$stmt->bind_param("ssss",
$_POST["name"],
$_POST["email"],
$_POST["number"],
 $passwords);
 if($stmt->execute()){
    echo"signup successfull";
    header("location:login.php");
    exit;
 }
else{
    $error[]='Email alraedy exists already exists';
    header('index.php');
};

?>
