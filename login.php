<head> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
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
.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  border-radius: 25px;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #43A047;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
</style>
<body style="background: linear-gradient(to right, #8360c3, #2ebf91); ">
<nav>	
     	<a href="index.html">Home</a>
        <a href="about.php">About</a>
        <a href="explore.php">Explore</a>
        <a href="signup.php">Signup/Login</a>
        <div class="animation start-portefolio"></div>
</nav>

<div class="login-page" style="border-radius: 25px;">
  <div class="form">
    <h2><?php echo $_SESSION['message'];?></h2>
    <form class="login-form" method="post" action="login_page.php">
      <input type="text" name="name" placeholder="username"/>
      <input type="password" name="password"  placeholder="password"/>
      <button>login</button>
      <p class="message">Not registered? <a href="signup.php">Create an account</a></p>
    </form>
  </div>
</div>
</body>
