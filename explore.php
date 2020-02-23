<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<?php
include("config.php");
include("session.php");

?>
<head>
<style>
nav {
     	margin: 27px auto 0;

        position: relative;
        width: 470px;
        height: 50px;
        background-color: #3449;
        border-radius: 8px;
        font-size: 0;
}
nav a {
       	line-height: 50px;
        height: 100%;
        font-size: 15px;
        display: inline-block;
        position: relative;
        z-index: 1;
        text-decoration: none;
        text-transform: uppercase;
        text-align: center;
        color: white;
        cursor: pointer;
}
nav .animation {
        position: absolute;
        height: 100%;
        top: 0;
        z-index: 0;
        transition: all .5s ease 0s;
        border-radius: 8px;
}
a:nth-child(1) {
        width: 100px;
}
a:nth-child(2) {
        width: 110px;
}
a:nth-child(3) {
        width: 100px;
}
a:nth-child(4) {
        width: 160px;
}
nav .start-home, a:nth-child(1):hover~.animation {
        width: 100px;
        left: 0;
        background-color: #1abc9c;
}
nav .start-about, a:nth-child(2):hover~.animation {
        width: 110px;
        left: 100px;
        background-color: #e74c3c;
}
nav .start-blog, a:nth-child(3):hover~.animation {
        width: 100px;
        left: 210px;
        background-color: #3498db;
}
nav .start-portefolio, a:nth-child(4):hover~.animation {
        width: 160px;
        left: 310px;
        background-color: #9b59b6;
}
h1 {
    	font-family: Raleway;
        font-size: 25px;
}
a {
   	font-family: Raleway;
}

</style>
</head>
<body style="background: linear-gradient(to right, #8360c3, #2ebf91); ">
<nav>   
        <a href="index.html">Home</a>
        <a href="about.php">About</a>
        <a href="explore.php">Explore</a>
        <a href="signup.php">Signup/Login</a>
        <div class="animation start-blog"></div>
</nav>
<h1 style="color: white; font-size: 100px; text-align: center;">Let's explore, <?php echo $_SESSION['name'];?><h1>
<?php
$sql = "SELECT name, country, age, gender, description FROM guests";
$result = mysqli_query($db, $sql);

$loginman_before = '<div style="margin-left: 50px; margin-right: 50px; border-radius:25px; box-shadow: 0px 0px 11px 0px #000000; padding: 20px; "> 
<div class="row">
<div class="col-md-2">
<img src="https://image.flaticon.com/icons/png/512/17/17603.png" width=200px/>
</div>
<div class="col-md-8">
<h1 style="font-size: 50px;">'.$row["name"].'</h1> 
<p>'.$row["age"].' | '.$row["country"]. '</p> 
</div>
<div class="col-md-2">
<a href="donate"><img src="https://lh3.googleusercontent.com/proxy/fLIe14Y7ZVBPiLPP782laWzswvw54JRc20SXxx4NJf2XvMeqZN0_DlIjnpn6c0AlDx-HgmrAv4K3IsI_38WwVD9x3934Afz1eoXgIe6Tammi6WztBHxKmsx8K578e5HEmm4h" width=100px></a>
</div>
</div>
<p style="font-family: Raleway;">'.$row["description"].'</p>
</div>
';

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo  '<h2> <br> </h2> <div style="background-color: white; margin-left: 50px; margin-right: 50px; border-radius:25px; box-shadow: 0px 0px 11px 0px #000000; padding: 20px; "> <div class="row"> <div class="col-md-2"> <img 
src="https://image.flaticon.com/icons/png/512/17/17603.png" width=200px/> </div> <div class="col-md-8"> <h1 style="font-size: 50px;">'.$row["name"].'</h1> <p>'.$row["age"].' | '.$row["country"]. '</p> </div> <div 
class="col-md-2"> <a href="donate.php"><img src="https://lh3.googleusercontent.com/proxy/fLIe14Y7ZVBPiLPP782laWzswvw54JRc20SXxx4NJf2XvMeqZN0_DlIjnpn6c0AlDx-HgmrAv4K3IsI_38WwVD9x3934Afz1eoXgIe6Tammi6WztBHxKmsx8K578e5HEmm4h" 
width=100px></a> </div> </div> <p style="font-family: Raleway;">'.$row["description"].'</p> </div> <h2> <Br> </h2>'; 
    }
    echo "</table>";
} else {
    echo "0 results";
}
?>
</body>
