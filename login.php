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
</body>
</html>