<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
</head>
<style>
	div {
		width: 40%;
		height: 100%;
		text-align: center;
		position: relative;
		margin-right: 30%;
		margin-left: 30%;
		vertical-align: middle;
		font-size: 30px;
		padding-top: 25px;
		padding-bottom: 50px;
		box-shadow: 0 10px 20px rgba(09,41,98,0.19);
		border-radius: 15px;
		color: #1E90FF;
		border: 10px solid #094198;
		border-radius: 15px;
	}
	body  {
	  	background-image: url("images/index_bg.jpg");
		background-repeat: no-repeat;
		background-size: cover;
		margin: 0px;
	}
	button, .button {
		width: 30%;
		background-color: #4AB8F9;
		border: 1px solid #a6a6a6;
		box-shadow: 2px 2px #a6a6a6;
	}
	.input {
		font-size: 22px;
		text-align: center;
		opacity: 0.5;
	}
	table {
		width: 100%;
	}
	td {
		text-align: center;
	}
	button:link, button:visited, .button:link, .button:visited 
	{
		text-decoration: none;
		color: white;
		text-decoration: none;  
		font-size: 25px;
	}
	button:hover, button:active, .button:hover, .button:active
	{
		background-color: white;
		border: 1px solid #a6a6a6;
		box-shadow: 2px 2px #a6a6a6;
		color: #4AB8F9;
		text-decoration: none;  
		font-size: 25px;
	}
	input:hover, input:active 
	{
		background-color: #8c8c8c;
		box-shadow: 2px 2px #a6a6a6;
	}
</style>

<body>
	<br>
	<br>
	<br>
	<br><br>
	<br>
	<br>
	<div style="background-color: #E6F2F8;">
		<form action="user_logged_in.php" method="post">
			<img src="images/tripscoveryLogo.png" alt="logo" class="center" style="width:30%">
			<table>
				<tr>
					<td colspan="2"><p style="font-size: 35px; color: #094198;"><b>User Type Login</b></p></td>
				</tr>
			</table>
		<br>
			<tr>
				<td><button type="button"><a style="text-decoration: none;  font-size: 25px;" href="user_login.php">Guest</a></button></td><br><br><br>
				<td><button type="button"><a style="text-decoration: none;  font-size: 25px;" href="admin_login.php">Admin</a></button></td>
			</tr>
		</table><br>
	</div>
</body>
</html>