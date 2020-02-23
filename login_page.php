<?php
include("config.php");
include("session.php");

$name = $_POST[name];
$password = $_POST[password];

$sql = "SELECT name FROM users WHERE name = '$name' and password = PASSWORD('$password')";
      $result = mysqli_query($db,$sql);
      if(!$result) {
        echo "Error: %s\n" , mysqli_error($db);
        exit();
      };
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$count = mysqli_num_rows($result);
if ($count = 1) {
	$_SESSION['name'] = $row['name'];
       header("Location: http://fightfi.cf/impact/explore.php");
}

?>
