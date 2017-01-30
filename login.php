<!DOCTYPE php>
<html>
<head>
	<meta charset="UTF-8">
	<title>Login</title>
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
						<a href="about.html">about</a>
					</li>
					<li>
						<a href="schedules.html">class schedules</a>
					</li>
					<li>
						<a href="performance.html">performances</a>
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
                echo "test";
            }
        }
        ?>
		</div>
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
							<a href="performance.html">Performances</a>
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
					<h5>Recent Blog Posts</h5>
					<ul>
						<li>
							<a href="login.php">Dance Tips &amp; Tricks: How To Know If Modern Dance Is Right For You</a>
						</li>
						<li>
							<a href="login.php">Dance Tips &amp; Tricks: The Secrets To A Successful Dancing Career</a>
						</li>
						<li>
							<a href="login.php">Daring Dancer: Harillsa Gortengkov</a>
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