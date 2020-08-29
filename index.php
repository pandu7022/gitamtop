<?php

?>
<!DOCTYPE html>
<html>
<head>
	<title>GITAM TOP</title>
	<link rel="stylesheet" type="text/css"  href="cssfile/style.css">
</head>
<body>
	<table><tr><th><img src="123\logo1.png" width="150px" height="80px" align="left"></th>
	<th class="imgpos"><img src="123\logo.png" align="right" width="250px" height="80px"></th></tr></table>
	<hr>
	<div class="container">
	</div>
	<div class="b2">
	<form action="sign.php" method="post">
		
			<div class="n2"><center>Sign in</center></div><br>
			<div class="n1">Student registration number</div>
			<input type="text" name="name1" id="m124"><br>
			<br>
			<div class="n1">Password</div><input type="password" name="pas1" id="m124">
			<pre>        <button name="pandu" class="n21" id="m123"><font color="white">submit</font></button></pre>
	</form>
	<a href="forgottenpassword.php">Forgotten password</a>
	<br>
	<br>
	<a href="signup.php">Signup</a>
	<br><br>
	<div class="n1">For any assistance, please</div><center>contact</center><br>
	<div class="n1">Phone: 0891-2840555</div>
</svg></a></div>
</div>


<div class="b1"><div class="w3-content w3-display-container">
  <img class="mySlides" src="123\dxc1.jpg" width="109%">
  <img class="mySlides" src="123\min1.jpg" width="109%">
  <img class="mySlides" src="123\b1.jpg" width="109%">
  <img class="mySlides" src="123\b2.jpg" width="109%">
  <img class="mySlides" src="123\b3.jpg" width="109%">
  <img class="mySlides" src="123\b4.jpg" width="109%">
  <img class="mySlides" src="123\b5.jpg" width="109%">
  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div></div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>

</body>
</html>