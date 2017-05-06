<?php include('header.php'); error_reporting(0);?>
<?php
	session_start();
	
	

	if(isset($_SESSION['user'])!="") {
	?>
		<script>
				alert("You are already registered. Please log out to register again. Redirecting to homepage..");
				location.href="index.php";
		</script>
	<?php
	}
	include_once 'dbconnect.php';

	if(isset($_POST['btn-signup'])) {
		$uname = mysql_real_escape_string($_POST['uname']);
		$email = mysql_real_escape_string($_POST['email']);
		$upass = md5(mysql_real_escape_string($_POST['pass']));
	
		if(mysql_query("INSERT INTO users(username,email,password) VALUES('$uname','$email','$upass')")){
	?>
			<script>alert('Successfully registered! You are being redirected to homepage.');
					location.href="index.php";
			</script>
	<?php
		}
		else {
	?>
			<script>alert('Error while registration.');</script>
	<?php
		}
	} 
 
?>

 
	<center>
		<div id="login-form">
			<form method="post">
				<table align="center" width="30%" border="0">
					<tr>
						<td><input type="text" name="uname" placeholder="User Name" required /></td>
					</tr>
					<tr>
						<td><input type="email" name="email" placeholder="Your Email" required /></td>
					</tr>
					<tr>
						<td><input type="password" name="pass" placeholder="Your Password" required /></td>
					</tr>
					<tr>
						<td><button type="submit" name="btn-signup" class="myButton">Sign Up</button></td>
					</tr>
					<tr>
						<td><a href="login.php" style="color:white;">Sign In Here</a></td>
					</tr>
				</table>
			</form>
		</div>
	</center><br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php 
	include('footer.php');
?>
