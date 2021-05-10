<!DOCTYPE>
<html>
	<head>
		<title>Image Gallery</title>
	</head>
	<style type="text/css">
		body {
			background: #f2f2f2;
			margin: 0px;
		}
		.basic_box {
			border: 1px solid #ccc;
			border-radius: 5px;
			margin: 10px 220px;
			padding: 50px;
			box-shadow: 0 10px 20px rgba(0,0,0,0.19);
		}
		.large_box {
			border: 1px solid #ccc;
			border-radius: 5px;
			margin: 10px 220px;
			padding: 50px;
			box-shadow: 0 10px 20px rgba(0,0,0,0.19);
		}
		ul
		{
  			list-style-type: none;
			background-color: rgba(09,41,98,0.99);
			margin-bottom: 10px;
			color: white;
			margin-top: -38px;
			padding: 0px;
			overflow: hidden;
			margin-left: -10px;
			margin-right: -10px;
			z-index: 1;
			position: sticky;
			top: 0px;
		}
		.footer {
			background-color: rgba(09,41,98,0.99);
			bottom: 0px;
			margin: 0px;
			margin-bottom: 0px;
			padding: 10px,0;
		}
		.foot-text {
			color: #D6FEFF;
			text-align: left;
		}
		li
		{
			display: inline;
			float: left;
		}
		* {box-sizing: border-box;}

		body {font-family: Verdana, sans-serif;}

		.mySlides {display: none;}

		h1
		{
			background-color: rgba(09,41,98,0.99);
			color: white;
			border: 10px;
			margin-left: -10px;
			margin-right: -10px;
			margin-top: -10px;
			padding: 15px;
			font-size: 60px;
			text-align: center;
			font-family: "Times New Roman";
		}

		h2
		{
			border: 10px;
			padding: 5px;
			font-size: 35px;
			text-align: center;
		}

		a:link, a:visited 
		{
			color: white;
			padding: 14px 25px;
			text-align: center; 
			text-decoration: none;
			display: block;
		}

		a:hover, a:active 
		{
			background-color: white;
			color: #094198;
		}

		img {
			vertical-align: middle;
			background-size: cover;
		}
		.row {
  			display: flex;
		}

		.column {
  			flex: 33.33%;
  			padding: 5px;
		}
		.r_room
		{
			color: #FFF;
			border: 10px;
			padding: 10px;
			font-size: 35px;
			text-align: center;
			text-shadow: 2px 2px black;
			background-color: rgba(09,41,98,0.99);
			width: 500px;
			margin: auto;
			border-radius: 40px;
		}
		div.desc {
			  padding: 15px;
			  text-align: center;
			  text-decoration-color: black;
		}
	</style>
	<body>
		<h1>SEDA <p style="color: #e6b800; display: inline;">NUVALI</p> HOTEL</h1>
		<ul>
			<li><a href="hotel1.php">Home</a>
			<li><a href="#rooms_and_rates">Room Images</a></li>
			<li><a href="image_gallery.php">Hotel Gallery</a>
		</ul>
		<br>
		<div class="large_box">
			<h2 class="r_room">Our Facilities</h2><br>
			<div class="row">
	  			<div class="column">
	  				<a target="_blank" href="images/Facilities.jpg">
	    				<img src="images/Facilities.jpg" alt="Snow" style="width:100%">
	    			</a>
	    			<div class="desc">Facilities</div>
	  			</div>
	  			<div class="column">
	  				<a target="_blank" href="images/InteriorView.jpg">
	    				<img src="images/InteriorView.jpg" alt="Forest" style="width:100%">
	    			</a>
	    			<div class="desc">Interior View</div>
	  			</div>
	  			<div class="column">
	  			<a target="_blank" href="images/FitnessCenter.jpg">
	    			<img src="images/FitnessCenter.jpg" alt="Mountains" style="width:100%">
	    		</a>
	    		<div class="desc">Fitness Center</div>
	  			</div>
			</div><br>

			<div class="row">
	  			<div class="column">
	  			<a target="_blank" href="images/Spa.jpg">
	    			<img src="images/Spa.jpg" alt="Snow" style="width:100%">
	    		</a>
	    		<div class="desc">Spa</div>
	  			</div>
	  			<div class="column">
	  				<a target="_blank" href="images/GoodView.jpg">
	    				<img src="images/GoodView.jpg" alt="Forest" style="width:100%">
	    			</a>
	    			<div class="desc">Staycation</div>
	  			</div>
	  			<div class="column">
	  				<a target="_blank" href="images/KidsAreas.jpg">
	    				<img src="images/KidsAreas.jpg" alt="Mountains" style="width:100%">
	    			</a>
	    			<div class="desc">Kids Areas</div>
	  			</div>
			</div><br>
			<div class="row">
	  			<div class="column">
	  				<a target="_blank" href="images/Lobby.jpg">
	    				<img src="images/Lobby.jpg" alt="Snow" style="width:100%">
	    			</a>
	    			<div class="desc">Lobby</div>
	  			</div>
	  			<div class="column">
	  				<a target="_blank" href="images/Outdoor.jpg">
	    				<img src="images/Outdoor.jpg" alt="Forest" style="width:100%">
	    			</a>
	    			<div class="desc">Swimming Pool(Outdoor)</div>
	  			</div>
	  			<div class="column">
	  				<a target="_blank" href="images/PoolOutdoor.jpg">
	    				<img src="images/PoolOutdoor.jpg" alt="Mountains" style="width:100%">
	    			</a>
	    			<div class="desc">Swimming Pool Outdoor View</div>
	  			</div>
  		</div>
		</div><br><br><br>
		

		<div class="basic_box">
			<h2 id="rooms_and_rates" class="r_room">OUR ROOMS</h2><br>
			<div class="row">
  				<div class="column">
  					<a target="_blank" href="images/club_room.png">
    					<img src="images/club_room.png" alt="Snow" style="width:100%">
    				</a>
    				<div class="desc"><center>₱ 1000.00</center></div>
  				</div>
  				<div class="column">
  					<a target="_blank" href="images/deluxe_room.jpg">
    					<img src="images/deluxe_room.jpg" alt="Forest" style="width:100%">
    				</a>
    				<div class="desc"><center>₱ 1800.00</center></div>
  				</div>
  				<div class="column">
  					<a target="_blank" href="images/premier_room.jpg">
    					<img src="images/premier_room.jpg" alt="Mountains" style="width:100%">
    				</a>
    				<div class="desc"><center>₱ 3000.00</center></div>
  				</div>
			</div>
			<div class="row">
  				<div class="column">
    				<h3><center>Club Room</center></h3>
  				</div>
  				<div class="column">
    				<h3><center>Deluxe Room</center></h3>
  				</div>
  				<div class="column">
    				<h3><center>Premier Room</center></h3>
  				</div>
			</div>
		</div><br>
	</body>