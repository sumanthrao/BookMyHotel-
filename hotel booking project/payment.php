<?php 
	include('header.php');
if(!isset($_SESSION['user']))
{ 
?>
<script>alert("Please log in first.");
setTimeout(function(){location.href="login.php"} , 500);</script>
<?php } ?>

<?php
$hotel = mysql_fetch_assoc(mysql_query("SELECT * from LISTINGS WHERE hotelid=". $_GET['hotelid']));
$room = mysql_fetch_assoc(mysql_query("SELECT * from ROOMS WHERE hotelid=".$_GET['hotelid']. " AND roomtype='".$_GET['roomtype']."'"));


?><br><br>
<h1>Confirm booking</h1><br><br>
<?php 
$users=mysql_query("SELECT * from users WHERE user_id=". $_SESSION['user']);
$names=mysql_fetch_assoc($users);
  ?>
<h2>HELLO  <b><?php echo $names['username']?></b> , YOUR DETAILS ARE</h2>
<br><br>
<table align="center" width="30%" border="0">
<tr>
<th>
Hotel Name
</th>
<td>
<?php
echo $hotel["name"];
?>
</td>
</tr>


<tr>
<th>
Room type
</th>
<td>
<?php
echo $room["roomtype"];
?>
</td>
</tr>

<tr>
<th>
City
</th>
<td>
<?php
echo $hotel["city"];
?>
</td>
</tr>

<tr>
<th>
Price
</th>
<td>
<?php
echo $room["price"];
//var_dump($_REQUEST["bookdate"]);

?>
</td>
</tr>
</table>
<form action="complete-registration.php">
<input type="hidden" name="hotelid" value="<?php echo $hotel['hotelid']?>">
<input type="hidden" name="hotelname" value="<?php echo $hotel['name']?>">
<input type="hidden" name="price" value="<?php echo $room['price']?>">
<input type="hidden" name="roomtype" value="<?php echo $room['roomtype']?>">
<input type="hidden" name="bookdate" value="<?php echo $_REQUEST['bookdate']?>">
<input type="hidden" name="city" value="<?php echo $hotel['city']?>"><br><br>
<input type="submit" value="CONFIRM BOOKING" class="myButton" style="width:350px; height=80px;">
</form><br><br><br><br><br><br>
<?php 
	include('footer.php');

    ?>