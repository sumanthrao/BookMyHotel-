
<?php 
	if (session_status() == PHP_SESSION_NONE) {
	session_start();
	}
	include_once 'dbconnect.php';

	if(isset($_SESSION['user'])) {
		$res = mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
		$userRow = mysql_fetch_array($res);
	}
?>
<!DOCTYPE html>
<html ><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Welcome - <?php if(isset($_SESSION['user']))
									echo $userRow['username']; else echo "Guest"; ?></title>
		<link rel="stylesheet" href="style.css" type="text/css" />
        <link rel="shortcut icon" href="top.jpg"/>
</head>
<body>
    <div id="container">
        <div id="header">
         <a  id="heya" href="index.php" style="float:left;"><img src="capture.png" height="133" width="250"></a>
         <img src="cover.jpg" height="130" width="530"  style="display:inline-block;margin-left:auto;margin-right:auto; opacity:0.9;  padding:0 !important;">
          <img src="cover.jpg" height="130" width="550"     style="display:inline-block;margin-left:-8px;margin-right:auto;opacity:0.9; padding:0 !important;">
         
            <div class="topbar" style="align:left; " >
               
                <div class="buttons">
                <a style="text-decoration:none;" href="index.php">Home</a>
                    <a style="text-decoration:none;" href="cancellation.php">Cancellation</a>
                    <a style="text-decoration:none;" href="package.php">Tour Packages</a>
                   
                    <div style=" display:inline; color:yellow;" >
                    <?php if(isset($_SESSION['user'])){ echo 'Hello '.$userRow['username'].'!'; ?>&nbsp;<a style="text-decoration:none;" href="logout.php?logout">Sign Out</a> <a style="text-decoration:none;"  href="profile.php">Profile</a>&nbsp;<a style="text-decoration:none;"   href="transactions.php">Booking History</a><?php } else { echo "Hello Guest!";?>&nbsp;<a style="text-decoration:none;"   href="login.php">Sign in</a>&nbsp;<a style="text-decoration:none;" href="register.php">Sign Up</a><?php }echo "";?>
                   
                    </div>
                    
                    
                    
                    
                    
                </div>
                </div>
                </body>
                </html>