<?php
	session_start();
	include_once 'dbconnect.php';

	if(isset($_SESSION['user'])!="") {
	?>
		<script>alert("You are already logged in. Redirecting to home page");
		setTimeout(function(){location.href="index.php"} , 500);</script>
	<?php
		
	}

	if(isset($_POST['btn-login'])) {

		$email = mysql_real_escape_string($_POST['email']);
		$upass = mysql_real_escape_string($_POST['pass']);
		$res = mysql_query("SELECT * FROM users WHERE email='$email'");
		$row = mysql_fetch_array($res);
		
		if($row['password'] == md5($upass)) {
			$_SESSION['user'] = $row['user_id'];
			header("Location: index.php");
		}
		else {
			?>
			<script>alert('Wrong details');</script>
			<?php
		}
	}
?>
<div id="login">
	<center><?php include('header.php'); ?>
		<div id="login-form" style="background: url("bg.png");">
			<form method="post">
				<table align="center" width="30%" border="0">
					<tr>
						<td><input type="text" name="email" placeholder="Your Email" required /></td>
					</tr>
					<tr>
						<td><input type="password" name="pass" placeholder="Your Password" required /></td>
					</tr>
					<tr>
						<td><button type="submit" name="btn-login" class="myButton">Sign In</button></td>
					</tr>	
					<tr>
						<td><a href="register.php" style="color:darkblue; background:lightblue;">Sign Up Here</a></td>
					</tr>
				</table>
			</form>
		</div>
	</center></div>
<?php 
	include('footer.php');
?>