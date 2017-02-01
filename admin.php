<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<?php 
session_start(); 
require_once('check.php');
if(!checkAdminAccess()){
	echo("HTTP/1.1 401 Unauthorized");
    exit;
}else{ 
	echo('<br><br><br><br><br><br><figure>
			<embed type="image/svg+xml" src="/charts/adminChart.svg" />
		</figure>');?>
	<html>
	<head>
		<meta charset="UTF-8">
		<title>Benno's - Administatie</title>
		<link rel="stylesheet" href="css/style.css" type="text/css">
	</head>
	<body>
		<div id="page">
			<div id="header">
				<div>
					<a href="index.html" id="logo"><img src="images/logo.png" alt="LOGO"></a>
					<ul id="navigation">
						<li>
							<a href="index.html">home</a>
						</li>
						<li>
							<a href="about.html">about</a>
						</li>
						<li>
							<a href="schedules.html">class schedules</a>
						</li>
						<li>
							<a href="performance.php">performances</a>
						</li>
						<li>
							<a href="login.php">login</a>
						</li>
						<li>
							<a href="contact.html">contact</a>
						</li>
					</ul>
				</div>
				<span class="shadow"></span>
			</div>
			<div id="contents">
				<div id="about">
					<h2>Admin Paneel</h2>
				</div>
			</div>
			<div id="footer">
				<span class="shadow"></span>
				<div>
					<div class="section">
						<h5>Navigation Menu</h5>
						<ul class="navigation">
							<li>
								<a href="index.html">Home</a>
							</li>
							<li>
								<a href="about.html">About</a>
							</li>
							<li>
								<a href="schedules.html">Class Schedules</a>
							</li>
							<li>
								<a href="performance.php">Performances</a>
							</li>
							<li>
								<a href="login.php">Login</a>
							</li>
							<li>
								<a href="contact.html">Contact</a>
							</li>
						</ul>
					</div>
					<div class="section">
						<h5>Studio Hours</h5>
						<ul>
							<li>
								Mondays to Fridays: 8am- 5pm
							</li>
							<li>
								Saturdays: 10am-5pm
							</li>
							<li>
								Sundays: 10am-12nn
							</li>
							<li>
								For Appointments: Call 262-956-6778
							</li>
						</ul>
					</div>
					<div class="section">
						<h5>Social</h5>
						<ul class="connect">
							<li>
								<a href="https://twitter.com/Bensportschool" target="_blank">Twitter</a>
							</li>
							<li>
								<a href="https://www.youtube.com/channel/UCfJoEbaQrV0ZdQ9lTaUAYWw" target="_blank">Youtube</a>
							</li>
							<li>
								<a href="https://plus.google.com/u/1/110051609457175552666" target="_blank">Google+</a>
							</li>
						</ul>
						<h5>Newsletter Signup</h5>
						<form action="index.html" method="post" id="newsletter">
							<input type="text" value="Enter your email address" class="txtfield" onBlur="javascript:if(this.value==''){this.value=this.defaultValue;}" onFocus="javascript:if(this.value==this.defaultValue){this.value='';}">
							<input type="submit" value="" class="btn">
						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
	</html>
<?php } ?>