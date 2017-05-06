<?php
	include('header.php');
	$un = $userRow['username'];
	
	if(isset($_POST['city-selected'])) {
		$city = $_POST['city'];
		$hotels = mysql_query("SELECT * FROM hotels WHERE city='$city'");
	}
?>
	<div id="main">
		<br />
		<br />
			<div id="content-main">
				<p class="intro"><h3>Choose the hotel in <strong><?php echo $city; ?></strong><h3></p><br />
				<p>
					
					<?php if(isset($hotels)) { ?>
					<form action="hotel.php" method="post">
						<table>
							<tr>
								<td>Select</td>
								<td>Hotel name</td>
								<td>Stars</td>
								<td>Price per person</td>
							</tr>
						<?php
						} 
						?>
						<?php
							while($hotelsRow = mysql_fetch_assoc($hotels)) {
							?>
								<tr>
									<td><input type="radio" name="selectedhotel" value="<?php echo $hotelsRow['hotel']; ?>" /></td>
									<td><?php echo $hotelsRow['hotel']; ?></td>
									<td><?php echo $hotelsRow['star']; ?></td>
									<td><?php echo $hotelsRow['price']; ?></td>
								</tr>
							<?php
							}
						?>
						<?php if(isset($hotels)) { ?>
						</table>
						<br />
						<input type="hidden" name="city" value="<?php echo $city; ?>" />
						<button name="hotelselected">Select hotel</button>
					</form>
					<?php 
						}
					?>
				</p>
			</div>
		</div>
<?php
	include('footer.php');
?>