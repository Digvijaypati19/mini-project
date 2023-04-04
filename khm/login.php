<?php
error_reporting(0);
include("dbinfo.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
// username and password sent from Form
$myusername=mysql_real_escape_string($_POST['username']); 
$mypassword=mysql_real_escape_string($_POST['password']); 
$password=md5($mypassword); // Encrypted Password
$sql="SELECT id FROM kadmin WHERE username='$myusername' and passcode='$password'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
//$active=$row['active'];
$count=mysql_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1)
{
$_SESSION['login_user']=$myusername;

header("location: kadmin/index.php");
}
else 
{
$error="Your Login Name or Password is invalid";
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>K-Admin</title>
		<meta charset="utf-8">
		<link href="css/login.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--webfonts-->
		<link href='//fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700' rel='stylesheet' type='text/css'>
		<!--//webfonts-->
</head>
<body>
				 <!-----start-main---->
				<div class="login-form">
				<div style="color: red; position: absolute; font-size: 15px; font-weight: 600; margin-top: -10px; margin-left: 35px; padding: 10px;"><?php echo $error; ?></div>
					<div class="head">
						<img src="images/klogo.png" alt=""/>
					</div>
				<form action="" method="post">
					<li>
						<input type="text" class="text" id="username" name="username" value="" placeholder="Username" ><a href="#" class=" icon user"></a>
					</li>
					<li>
						<input type="password" value="" id="password" name="password" placeholder="Password" ><a href="#" class=" icon lock"></a>
					</li>
					<div class="p-container">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked><i></i>Remember Me</label>
								<input type="submit"  value="Log In" >
							<div class="clear"> </div>
					</div>
				</form>
			</div>
			<!--//End-login-form-->
		  <!-----start-copyright---->
   					<div class="copy-right">
						<p> All rights reserved | Developed by <a href="http://katareinfo.com/">Katare Informatics</a></p>
					</div>
				<!-----//end-copyright---->
		 		
</body>
</html>