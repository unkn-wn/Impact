<?php
include("config.php");
include("session.php");

$name = $_POST[name];
$country = $_POST[country];
$gender = $_POST[gender];
$description = $_POST[description];
$age = $_POST[age];

$sql = "INSERT INTO `guests`( `name`, `country`, `gender`,`description`,`age`) VALUES ('$name','$country', '$gender','$description','$age')";
echo $sql;
$result = mysqli_query($db,$sql);
if(!$result) {
        echo "Error: %s\n" , mysqli_error($db);
        exit();
      };
$_SESSION['message'] = "Account successfully created";
header("Location: http://fightfi.cf/impact/login.php");
?>
