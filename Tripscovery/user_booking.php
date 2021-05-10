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
		font-size: 30px;
	}
	td {
		padding: 15px;
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
	ul {
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
	li a:visited {
	  	background-color: #e6b800;
	  	color: white;
	  	text-decoration: underline;	
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
		width: 600px;
		padding: 30px;
		box-shadow: 0 10px 20px rgba(0,0,0,0.19);
	}
	.decor {
		font-family: Times New Roman;
	}
	.info_layout {
		color: #FFF;
		border: 10px;
		padding: 10px;
		font-size: 35px;
		text-align: center;
		text-shadow: 2px 2px black;
		background-color: rgba(09,41,98,0.99);
		width: 400px;
		margin: auto;
		border-radius: 40px;
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
			<td id="td1" style="padding: 10px; font-size: 48px; position: sticky; z-index: 1">SEDA <p style="color: #e6b800; display: inline;">NUVALI</p> HOTEL</td>
			<td id="td1" style="font-size: 25px; text-align: right;">Greetings, <?php echo $row[2]; ?>!</td>
		</tr>
	</table>
	<ul>
		<li><a href="user_view.php">My Profile</a></li><br>
		<li><a href="bookroom.php">Book A Room</a></li><br>
		<li><a href="user_room_status.php">Show Booking Status</a></li><br>
		<li><a href="user_payment.php">Payment</a></li><br>
		<li><a href="user_booking_history.php">Booking History</a></li><br>
		<li><a href="index.php">Logout</a></li><br>
	</ul>
	<div style="margin-left:25%;padding:1px 16px;height:1000px;">
		<p style="margin-left: 10%; margin-top: 3%; font-size: 24px;"></p>
			<table class="basic_box decor">
				<tr>
					<td><h2 class="info_layout">Personal Information</h2><br></td>
				</tr>
				<tr>
					<td><b>Name: </b></td>
					<td><?php echo $row[2] ?><br></td>
				</tr>
				<tr>
					<td><b>Phone Number: </b></td>
					<td><?php echo $row[0] ?><br></td>
				</tr>
				<tr>
					<td><b>Email Address: </b></td>
					<td><?php echo $row[3] ?><br></td>
				</tr>
				<tr>
					<td><b>Date of Birth: </b></td>
					<td><?php echo $row[5] ?><br></td>
				</tr>
				<tr>
					<td><b>ID Proof: </b></td>
					<td><?php echo $row[4] ?><br></td>
				</tr>
				<tr><td></td></tr><tr><td></td></tr>
			</table>
	</div>
</body>
</html>