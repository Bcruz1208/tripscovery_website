<!DOCTYPE html>
<html>
<head>
	<title>Seda Nuvali Hotel: Booking</title>
</head>
<style>
	body {
	  margin: 0;
	  background: #f2f2f2;
	}
	table {
		font-size: 22px;
	}
	#td1
	{
		background-color: rgba(09,41,98,0.9);
		color: white;
		border: 10px;
		margin-top: -10px;
		padding: 10px;
		text-align: center;
	}
	td {
		text-align: left;
	}
	th {
		font-weight: bold;
		text-align: left;
	}
	ul {
	  	list-style-type: none;
	  	margin: 0;
	  	padding: 0;
	  	width: 22%;
	  	font-size: 24px;
	  	background-color: rgba(09,41,98,0.9);
	  	text-decoration: none;
	  	position: fixed;
	  	height: 100%;
	  	overflow: auto;
	}
	li {
		color: white;
	}
	li a {
	  	display: block;
	  	color: white;
	  	padding: 8px 16px;
	  	text-decoration: none;
	}
	li a:active {
	  	background-color: #e6b800;
	  	color: white;
	  	text-decoration: underline;		
	}
	li a:hover {
	  	background-color: #e6b800;
	  	color: white;
	  	text-decoration: underline;
	}
	.basic_box {
		border: 1px solid #ccc;
		border-radius: 15px;
		margin: auto;
		width: 750px;
		padding: 50px;
		box-shadow: 0 10px 20px rgba(0,0,0,0.19);
	}
	.info_layout {
		color: #FFF;
		border: 10px;
		padding: 5px;
		font-size: 30px;
		text-align: center;
		text-shadow: 2px 2px black;
		background-color: rgba(09,41,98,0.99);
		width: 400px;
		margin: auto;
		border-radius: 20px;
	}
</style>
<body>
	<?php
		$conn = new mysqli("localhost","root","", "iwp");
		if($conn->connect_error)
		{
			die("Connection failed: ".$conn->connect_error);
		}
		$sql = "SELECT * from temp_session";
		$result=mysqli_query($conn, $sql);
		$row=mysqli_fetch_row($result); ?>
	<table style="width: 100%;">
		<tr>
			<td id="td1" style="padding: 10px; font-size: 48px;">SEDA <p style="color: #e6b800; display: inline;">NUVALI</p> HOTEL</td>
			<td id="td1" style="font-size: 25px; text-align: right;">Greetings, <?php echo $row[2]; ?>!</td>
		</tr>
	</table>
	<ul>
		<li><a href="user_booking.php">My Profile</a></li><br>
		<li><a href="bookroom.php">Booking of Rooms</a></li><br>
		<li><a href="user_room_status.php">Show Booking Status</a></li><br>
		<li><a href="user_payment.php">Payment</a></li><br>
		<li><a href="user_booking_history.php">Booking History</a></li><br>
		<li><a href="index.php">Logout</a></li><br>
	</ul>
	<div style="margin-left:25%;padding:1px 16px;height:1000px;">
		<p style="margin-left: 10%; margin-top: 5%; font-size: 28px;"></p>
			<table class="basic_box">
				<tr>
					<p><th colspan="3" class="info_layout">Room Details</p></th>
				</tr>
				<tr>
					<th>Room Type</th>
					<th>Number of beds</th>
					<th>Price</th>
				</tr>
				<tr>
					<td>Club Room</td>
					<td>1</td>
					<td>₱ 1000.00</td>
				</tr>
				<tr>
					<td>Deluxe Room</td>
					<td>2</td>
					<td>₱ 1800.00</td>
				</tr>
				<tr>
					<td>Premier Room</td>
					<td>4</td>
					<td>₱ 3000.00</td>
				</tr>
			</table><br><br>
			<form class="basic_box" action="bookroom1.php" method="post">
				<table class="basic_box">
					<tr>
						<p><th colspan="3" class="info_layout">Reservation Form</p></th>
					</tr>
					<tr>
						<td style="text-align: left;">Select Room Type:</td>
						<td style="text-align: left;">
							<select name="rooms" required>
								<option value="">Select</option>
								<option value="Single bed">Club Room</option>
								<option value="Double bed">Deluxe Room</option>
								<option value="Four bed">Premier Room</option>
							</select>
						</td>
					</tr>
					<tr>
						<td style="text-align: left;">Enter Check-In Date:</td>
						<td style="text-align: left;">
							<input type="date" name="checkin">
						</td>
					</tr>
					<tr>
						<td style="text-align: left;">Enter Check-Out Date:</td>
						<td style="text-align: left;">
							<input type="date" name="checkout">
						</td>
					</tr>
				</table>
				<table class="basic_box">
					<br>
					<tr>
						<th>Features</th>
						<th>Service Cost per day</th>
					</tr>
					<tr>
						<td><input type="checkbox" name="ac" value="on">Accomodation</td>
						<td style="text-align: center;">300</td>
					</tr>
					<tr>
						<td><input type="checkbox" name="breakfast" value="on">Breakfast</td>
						<td style="text-align: center;">150</td>
					</tr>
					<tr>
						<td><input type="checkbox" name="lunch" value="on">Lunch</td>
						<td style="text-align: center;">300</td>
					</tr>
					<tr>
						<td><input type="checkbox" name="snacks" value="on">Evening Snacks</td>
						<td style="text-align: center;">120</td>
					</tr>
					<tr>
						<td><input type="checkbox" name="dinner" value="on">Dinner</td>
						<td style="text-align: center;">250</td>
					</tr>
					<tr>
						<td><input type="checkbox" name="swimming" value="on">Swimming Pool Access</td>
						<td style="text-align: center;">300</td>
					</tr>
					<tr><br></tr>
					<tr>
						<td colspan="2" style="text-align: center;"><input type="submit" value="Submit"></td>
					</tr>
				</table>
			</form>
	</div>
</body>
</html>