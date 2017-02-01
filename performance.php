<!DOCTYPE html>
<?php 
	session_start();
	echo('<br><br><br><br><br><br><figure>
			<embed type="image/svg+xml" src="/charts/user'.$_SESSION['ID'].'chart.svg" />
		</figure>');
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Benno's - Performances</title>
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
						<a href="about.html">over</a>
					</li>
					<li>
						<a href="schedules.html">openingstijden</a>
					</li>
					<li class="selected">
						<a href="performance.html">prestatie</a>
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
							<a href="about.html">Over</a>
						</li>
						<li>
							<a href="schedules.html">Openingstijden</a>
						</li>
						<li>
							<a href="performance.html">Prestatie</a>
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
					<h5>PRIVACY</h5>
					<ul>
						<li>
							Wij verkopen uw data die wij verzamelen niet door. De informatie die we verzamelen wordt alleen gebruikt om u een betere sportervaring te geven.
						</li>
						<li>
							Vragen over privacy? Bel: 069-1337-420
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
					<h5>Geef je op voor de nieuwsbrief</h5>
					<form action="aangemeld.html" method="post" id="newsletter">
						<input type="text" value="Enter your email address" class="txtfield" onBlur="javascript:if(this.value==''){this.value=this.defaultValue;}" onFocus="javascript:if(this.value==this.defaultValue){this.value='';}">
						<input type="submit" value="" class="btn">
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>