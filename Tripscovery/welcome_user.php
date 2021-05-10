<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
}

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: #f1f1f1;
  cursor: pointer;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}
img {
    float: right;
}
.icon {
	text-align: center;
}
.checked {
  color: yellow;
}
</style>
</head>
<body>

<h2>Find your ideal hotel!</h2>

<p>We offer room discounts for you right now!</p>

<div class="topnav">
  <a class="active" href="#home">List of Hotels</a>
  <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>
<br>
<div id="btnContainer">
  <button class="btn" onclick="listView()"><i class="fa fa-bars"></i> List</button> 
  <button class="btn active" onclick="gridView()"><i class="fa fa-th-large"></i> Grid</button>
</div>
<br>

<div class="row">
  <div class="column" style="background-color:#bbb;">
  	<div class="img">
  		<img src="images/SedaNuvali.png" alt="image" align="right" style="width:30%">
  	</div>
    <h2>Seda Nuvali Hotel</h2>
    <p><h4>Sta.Rosa, Laguna</h4></p>
    <p><h4><i>Price per night as low as ₱1,000!</i></h4></p>
    <p><i class="fa fa-wifi"></i>  Free Wi-Fi</p>
    <button type="button"><a style="text-decoration: none;  font-size: 18px; 
		text-align: center;" href="hotel1.php">View Details</a></button>
  </div>
 
  <div class="column" style="background-color:#ccc;">
  	<div class="img">
  		<img src="images/PaseoPremiere.jpg" alt="image" align="right" style="width:30%">
  	</div>
    <h2>Paseo Premiere Hotel</h2>
    <p><h4>Sta.Rosa, Laguna</h4></p>
    <p><h4><i>Save up to 80% in your Destination Book now & pay later!</i></h4></p>
    <p><i class="fa fa-wifi"></i>  Free Wi-Fi</p>	
    <button type="button"><a style="text-decoration: none;  font-size: 18px; 
		text-align: center;" href="hotel1.php">View Details</a></button>
  </div>
</div>

<div class="row">
  <div class="column" style="background-color:#bbb;">
  	<div class="img">
  		<img src="images/Technopark.png" alt="image" align="right" style="width:30%">
  	</div>
    <h2>TechnoPark Hotel</h2>
	<p><i class="fa fa-wifi"></i>  Free Wi-Fi</p>
    <p><h4>Sta.Rosa, Laguna</h4></p>
    <p><h4><i>Up to 30% Off | Enjoy great discounts here when you book!</i></h4></p>
    <button type="button"><a style="text-decoration: none;  font-size: 18px; 
		text-align: center;" href="hotel1.php">View Details</a></button>
  </div>

  <div class="column" style="background-color:#ccc;">
  	<div class="img">
  		<img src="images/ElCielito.png" alt="image" align="right" style="width:30%">
  	</div>
    <h2>El Cielito Hotel</h2>
	<p><i class="fa fa-wifi"></i>  Free Wi-Fi</p>
    <p><h4>Sta.Rosa, Laguna</h4></p>
    <p><h4><i>Price per night as low as ₱3,000!</i></h4></p>
    <p><h4><i></i></h4></p>
    <button type="button"><a style="text-decoration: none;  font-size: 18px; 
		text-align: center;" href="hotel1.php">View Details</a></button>	
  </div>
</div>

<script>
// Get the elements with class="column"
var elements = document.getElementsByClassName("column");

// Declare a loop variable
var i;

// List View
function listView() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.width = "100%";
  }
}

// Grid View
function gridView() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.width = "50%";
  }
}

/* Optional: Add active class to the current button (highlight it) */
var container = document.getElementById("btnContainer");
var btns = container.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

</body>
</html>
	