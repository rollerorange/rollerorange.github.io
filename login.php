<!DOCTYPE php>
<?php 
include_once("check.php");
session_start(); 
if(!checkLoggedIn())
{?>
	<html>
	<head>
		<meta charset="UTF-8">
		<title>Benno's - Login</title>
		<link rel="stylesheet" href="css/style.css" type="text/css">
	</head>
	<body>
		<?php include ('db.php'); ?>
		<div id="page">
			<div id="header">
				<div>
					<a href="index.html" id="logo"><img src="images/logo.png" alt="LOGO"></a>
					<ul id="navigation">
						<li>
							<a href="index.html">home</a>
						</li>
						<li>
							<a href="about.html">over</a>
						</li>
						<li>
							<a href="schedules.html">openingstijden</a>
						</li>
						<li>
							<a href="performance.php">prestatie</a>
						</li>
						<li class="selected">
							<a href="login.php">login</a>
						</li>
						<li>
							<a href="contact.html">contact</a>
						</li>
					</ul>
				</div>
				<span class="shadow"></span>
			</div>
			<div id="contact">
			<?php
			$action=$_REQUEST['action'];
			if ($action==""){
			?>
			<form  action="" method="POST">
			<input type="hidden" name="action" value="submit">
				<h2>Log in</h2>
				<label>Username:</label>
				<input name="username" type="text" value=""/><br>
				<label>Wachtwoord:</label>
				<input name="wachtwoord" type="password" value=""/><br>
				<br>
				<input type="submit" value="Log in" class="btn"/>
			</form>
		<?php
			}else{
				$name=$_REQUEST['username'];
				$pass=$_REQUEST['wachtwoord'];
				if (($name=="")||($pass=="")){
					echo "All fields are required, please fill <a href=\"\">the form</a> again.";
				}else{
					if (compareLogin($name, $pass)){
						$_SESSION['loggedin'] = true;
						$_SESSION['username'] = $name;
						$_SESSION['ID'] = getID($name);
						$userID = $_SESSION['ID'];
						$_SESSION['authlevel'] = getAuthLevel($name);
						if($_SESSION['authlevel'] == 1){
							echo exec("python userData.py $userID");
							header("location:performance.php?uid=".$_SESSION['ID']);
						}else{
							echo exec("python adminData.py");
							header("location:admin.php");
						}
					}
				}
			}
			?>
	</body>
	</html>
<?php 
}else{?>
	<html>
	<head>
		<meta charset="UTF-8">
		<title>Benno's - Login</title>
		<link rel="stylesheet" href="css/style.css" type="text/css">
	</head>
	<body>
		<?php include ('db.php'); ?>
		<div id="page">
			<div id="header">
				<div>
					<a href="index.html" id="logo"><img src="images/logo.png" alt="LOGO"></a>
					<ul id="navigation">
						<li>
							<a href="index.html">home</a>
						</li>
						<li>
							<a href="about.html">over</a>
						</li>
						<li>
							<a href="schedules.html">openingstijden</a>
						</li>
						<li>
							<a href="performance.php">prestatie</a>
						</li>
						<li class="selected">
							<a href="login.php">login</a>
						</li>
						<li>
							<a href="contact.html">contact</a>
						</li>
					</ul>
				</div>
				<span class="shadow"></span>
			</div>
			<div id="contact">
			<?php
			$action=$_REQUEST['action'];
			if ($action==""){
			?>
			<form  action="" method="POST">
			<input type="hidden" name="action" value="submit">
				<h2>Je bent al ingelogd</h2>
				<h3>Klik hier om uit te loggen<h3>
				<input type="submit" value="Log out" class="btn"/>
			</form>
		<?php
			}else{
				unset($_SESSION['loggedin']);
				unset($_SESSION['username']);
				unset($_SESSION['ID']);
				unset($_SESSION['authlevel']);
				header("Refresh:0");
			}
			?>
	</body>
	</html>
<?php } ?>