<?php
	include('header.php');
	
	if(isset($_POST['update-profile'])) {
		$email = mysql_real_escape_string($_POST['email1']);
		$upass = md5(mysql_real_escape_string($_POST['pass1']));
		$un = $userRow['username'];
	
		if(mysql_query("UPDATE users SET email='$email',password='$upass' WHERE username='$un'")){
	?>
			<script>alert('Profile successfully updated!');</script>
	<?php
		}
		else {
	?>
			<script>alert('Could not update profile. Try again.');</script>
	<?php
		}
	}
?>
	<div id="main">
		<br />
		<br />
			<div id="content-main">
				<p class="intro"><center>Here you can change your registered Email ID and the Password</center></p>
				<p>
					<center>
						<div id="login-form">
							<form method="post">
								<table align="center" width="30%" border="0">
									<tr>
										<td>Username: <?php echo $userRow['username']; ?></td>
									</tr>
									<tr>
										<td>Email ID: <input type="email" name="email1" value="<?php echo $userRow['email']; ?>" required /></td>
									</tr>
									<tr>
										<td><input type="password" name="pass1" placeholder="New Password" required /></td>
									</tr>
									<tr>
										<td><button type="submit" name="update-profile">Update Profile</button></td>
									</tr>
								</table>
							</form>
		</div>
	</center>
				</p>
			</div>
		</div>
<?php
	include('footer.php');
?>