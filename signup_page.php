<?php
include("config.php");
include("session.php");

$name = $_POST[name];
$password = $_POST[password];
$email = $_POST[email];
$sql = "INSERT INTO `users`( `name`, `email`, `password`) VALUES ('$name','$email', PASSWORD('$password'))";
$result = mysqli_query($db,$sql);
if(!$result) {
        echo "Error: %s\n" , mysqli_error($db);
        exit();
      };
$_SESSION['message'] = "Account successfully created";
header("Location: http://fightfi.cf/impact/login.php");
?>
