<?php
    error_reporting(0);
	include 'login.php';
	if (!empty($_SESSION['login_user'])){
		header("location: profile.php?user=".$_SESSION['login_user']);
		exit();
	


	$error = $_POST['error'];
 
	$error = mysqli_real_escape_string($conn,$_POST['error']);
	 
	echo "<center>$error</center>";
    }
    
?>

<!DOCTYPE html>
<html>
<head>
<title>Somaiya Placement Portal</title>
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/form.css">
<link rel="stylesheet" type="text/css" href="css/media.css">
<link rel="stylesheet" type="text/css" href="css/animate.css">
<link href="https://fonts.googleapis.com/css?family=Fjalla+One|Maitree|Ropa+Sans" rel="stylesheet">

<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="js/jquery.js"></script>
<script src="js/main.js"></script>
<style>
.msg-alert{
  display: none;
  position: fixed;
  left: 50%;
 -ms-transform: translate(-50%);
  transform: translate(-50%); 
  bottom:0;
  z-index: 9999;
}

.msg-alert p{
  font-family: calibri;
  border-radius: 5px 5px 0px 0px;
  padding: 5px 8px;
  font-size: 20px;
  color: white;
}
</style>
</head>

<body id="home">
	<div class="msg-alert"><p></p></div>
	<div class="cssload-loader">
	<div class="cssload-flipper">
		<div class="cssload-front"></div>
		<div class="cssload-back"></div>
	</div><br/>
	<center><span id="loading">Loading</span></center>
	</div>

	<div class="clr-switch"></div>
	<div class="bubble-1"></div>
	<div class="bubble-2"></div>
	<div class="bubble-3"></div>
	
	<div id="login-form">
	<input type="radio" id="login" name="switch" class="hide" checked>
	<input type="radio" id="signup" name="switch" class="hide">
	<div>
		<ul class="form-header">
		<li><label for="login"><i class="material-icons">lock</i> LOGIN</li>
		<li><label for="signup"><i class="material-icons">credit_card</i> REGISTER</label></li>
		</ul>
	</div>

	<div class="section-out">
		<section class="login-section">
			<div class="login">
				<form id="form_login" name="form_login" action="login.php" method="POST">
					<ul class="ul-list">
						<li><input type="email" id="log_email" name="log_email" required class="input" placeholder="Email Address" required="" /><span class="icon"><i class="material-icons">local_post_office</i></span></li>

						<li><input type="password" id="log_passwd" name="log_passwd" required class="input" minlength="4" maxlength="32" placeholder="Your Password" required="" /><span class="icon"><i class="material-icons">lock</i></span></li>

						<li><input type="submit" id="submit" name="submit" value="Sign in" class="btn"></li>

					 
						<li><input type="button" value="Close" class="btn close"></li>

						<span class="errorTxt"></span>
						<div id="status"></div>
					</ul>
				</form>
			</div>	<!-- login -->
		</section>

		<section class="signup-section">
			<div class="login">
				<form id="form_signup" name="form_signup" action="signup.php" method="POST">
					<ul class="ul-list">
						<li><input type="radio" id="student" name="check-type" onchange="check_type()" value="student" checked> Student&emsp;<input type="radio" id="inst" name="check-type" value="institute" onchange="check_type()"> Institute&emsp;<input type="radio" id="comp" name="check-type" value="company" onchange="check_type()"> Company</li>

						<li><input type="text" required pattern="^[a-zA-Z ]+$" class="input" id="reg_name" name="reg_name" maxlength="32" placeholder="Student Name"/><span class="icon"><i class="material-icons">account_box</i></span></li>

						<li><input type="text" required class="input" id="reg_uname" name="reg_uname" pattern="^[a-z\d\.]{5,}$" placeholder="User Name length of 5" onchange="check_user()"/><span class="icon"><i class="material-icons">person</i></span></li>

						<li><input type="email" required class="input" id="reg_email" name="reg_email" placeholder="Email Address"/><span class="icon"><i class="material-icons">local_post_office</i></span></li>

						<li><input type="password" required class="input" id="reg_passwd" name="reg_passwd" placeholder="Password"/><span class="icon"><i class="material-icons">lock</i></span></li>

						<li><input type="password" required="" class="input" id="c_password" name="c_password" placeholder="Confirm Password"/><span class="icon"><i class="material-icons">lock</i></span></li>
						<li><label>By signing up, you agree to our Terms of Service</label></li>

						<li><input type="submit" id="signup-btn" value="Sign up" class="btn"></li>

					 

						<li><input type="button" value="Close" class="btn close"></li>
					</ul>					
				 

				</form>
			</div>	<!-- login -->
		</section>
	</div>	<!-- section-out -->
	</div>	<!-- login-form -->

	<header>
		<div class="wrap-width">
		<a href="home.php">
			<div class="navbar-logo">
				<img src="images/somaiya.png"/>
				<img id="hat" src="images/h.png"/>
			</div>  
	 
		<div class="horizontal-page-links" id="nav">

			<div class="register-user">
				<a id="register">Register</a>
				<a id="login">Login</a>
				 
			</div> 
			
			<ul>	
        <div class="sliding-out links"><li><a href="home.php">Home</a></li></div>
        <div class="sliding-out links"><li><a href="rec.php">Recruiters</a></li></div>
				<div class="sliding-out links"><li><a href="aboutus.php">About </a></li></div>
				<div class="sliding-out links"><li><a href="#contact">Contact </a></li></div>
			 
			</ul>
			
		</div>  
		</div>
	</header>