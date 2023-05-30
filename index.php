<?php 
include 'tables.php'; 
include 'connection.php'; 
?>

<?php
session_start();
?>



<!DOCTYPE HTML>
<HTML>
<link rel = "stylesheet" type = "text/css" href = "style.css" />


<head>
<title>FISCOCLEAR</title>

<link rel = "icon" href = "icon.ico" type = "image/x-icon"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>


<div class="top">

<div class="logo">
<a href="index.php"><img src="Images/logo.jpg" class="logo" width="100px" height="100px"/></a>
</div>

<div class="title">
<h3>FISCOCLEAR</h3>
</div>

<div class="links">
<a href="index.php"><h4>Home</h4></a>
<a href="about.php"><h4>About Us</h4></a>
<a href="services.php"><h4>Services</h4></a>
<a href="contacts.php"><h4>Contacts</h4></a>
</div>


<div class="profile">



  <?php 
  
  
  
  if((isset($_SESSION["logged"]) && $_SESSION["logged"] === true)){
	
	$img = $_SESSION['image'];
	$user= $_SESSION['username'];
	echo '<div class="pic">';
    echo ('<img src="data:image/jpeg;base64,'.base64_encode($img).'" width="50px" height="50px">');
	echo '</div>';
	
	echo '<div class="myname">';
	echo '
 <select name="forma" onchange="location = this.value;">
 <option value="">';
 //echo '<h4>';
 echo ($user);
 //echo '</h4>';
 
 echo '</option>';
 
 //########################################################################################################################################
 
 if($_SESSION['membership']=='student'){
 echo '<option value="#">Request Clearance</option>';
 echo '<option value="#">Edit My Details</option>';
 echo '<option value="#">Shipping</option>';
 }
elseif($_SESSION['membership']=='teacher'){
 echo '<option value="#">Clear Students</option>';
 echo '<option value="#">Edit My Details</option>';
 echo '<option value="#">Shipping</option>';
}elseif($_SESSION['membership']=='institution'){
 echo '<option value="admin.php">Admin Space</option>';
}elseif($_SESSION['membership']=='systemadmin'){
 echo '<option value="systemadminspace.php">System Admin Space</option>';
}



 echo '<option value="logout.php">Log Out</option>';
 
 
  //########################################################################################################################################
 echo '</select>';

echo '</div>';

echo '<div class="feedback">';
echo ('<a href="feedback.php"><h4>Feedback</h4></a>');
echo '</div>';

	//sssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss
	echo '
	<style>
	.notlogged{
		display: none;
	}
	
	.profile div{
	display: inline-block;
	width: 31%;
	text-align: center;
	background-color: red;
}

@media only screen and (max-width: 1250px) {
	.profile div{
		width: 100%
	}
	
	.notlogged{
		display: none;
	}
	
}
	
	</style>';
	
     
    }
	elseif(!(isset($_SESSION["logged"]) && $_SESSION["logged"] === true))
	
    {
/*-------------------------------------------------------------------------------------------------------------------------------*/
echo '<div class="notlogged">';
	echo '
 <select name="forma" onchange="location = this.value;">
 <option value="">';
 echo '<h4>Login/ Sign Up</h4>';
 echo '</option>';
 
 echo '<option value="loginregisterstudent.html">Student</option>';
 echo '<option value="loginregisterteacher.html">Teacher</option>';
 echo '<option value="loginregisterinstitution.html">Institution</option>';
 echo '<option value="systemadmin.php">System Admin</option>';
 echo '</select>';

echo '</div>';
/*-------------------------------------------------------------------------------------------------------------------------------*/
/*
	  echo '<div class="notlogged">';
      echo '<a href="loginregister.html"><h4>Login/ Sign Up</h4></a>';
	  echo '</div>';
 */   
	echo '
	<style>
	.pic, .myname, .feedback{
		display: none;
	}
	
	
	
	

@media only screen and (max-width: 1250px) {
	.pic, .myname, .feedback{
		display: none;
	}
	
	.notlogged {
	width: 100%;
	}
	
}
	
	</style>';
  }
?>






</div>



</div>



<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="Images/clearing6.jpg" style="width:100%">
  <div class="text"><h1>HASSLE - FREE SCHOOL CLEARANCE</h1></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="Images/clearing4.jpg" style="width:100%">
  <div class="text"><h1>DOORSTEP DOCUMENT DELIVERY</h1></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="Images/clearing2.jpg" style="width:100%">
  <div class="text"><h1>LET'S GO ONLINE</h1></div>
</div>

<!-- <a class="prev" onclick="plusSlides(-1)">&#10094;</a> -->
<!-- <a class="next" onclick="plusSlides(1)">&#10095;</a> -->

</div>



<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
 
</div>



<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000); // Change image every 5 seconds
}
</script>


<div class="content"><br><br>
<h2>Complete your school clearance at the comfort of your home!</h2>
<div class="contentimage1">
<div class="contentimg"><img src="Images/clearing5.jpg" width="500px" height="250px"></div>
<div class="contenttext"><p><a href="loginregister.html">Sign up now</a> and start your school clearing process hassle- free. </p></div>
</div>

<br><br><br><br>

<h2>Get your documents delivered at your doorstep!</h2>
<div class="contentimage2">
<div class="contenttext"><p><a href="#">Apply</a> for your documents to be delivered to your doorstep within three working days. </p></div>
<div class="contentimg"><img src="Images/clearing5.jpg" width="500px" height="250px"></div>
</div>

<br><br>

<style>
.content{
	background-color: white;
	text-align: center;
}

.contentimage1{
	display: flex;
	padding-left: 3%;
	
}

.contentimage2{
	display: flex;
	padding-left: 19%;
	
}

.contenttext{
	padding-top: 5%;
	padding-left: 2%;
	padding-right: 2%;
}
</style>

</div>


</body>


<footer>

<div class="below">

<div class="history">
<h3>History</h3>
<p>Fiscoclear was formed in early 2020 by the Founders Andrew Konde, Yohann Macbush and Mickdad Mwadime, with the aim of solving the problem of physical school clearing by providing an online school clearing platform. </p>
</div>

<div class="contacts">
<h3>Contacts</h3>
<p>Tel:</p>
<p>+254711190225</p>
<p>Email: andrewkonde0@gmail.com</p>

</div>

<div class="quicklinks">
<h3>Social Media</h3>
<a href="#" target="_blank">YouTube</a><br><br>
<a href="#" target="_blank">Instagram</a><br><br>
<a href="#" target="_blank">Facebook Page</a><br><br>
<a href="#" target="_blank">Facebook Public Group</a><br><br>
</div>

<style>
.below{
background-color: red;
display: flex;
position: relative;
width: 100%;
height: auto;
bottom: 0%;
left: 0%;

}

.below div{
display: inline-block;
text-align: center;
background-color: red;
text-align: left;
color: white;
/*border: 3px solid blue;*/
width: 33.333%;
margin: 0%;
padding: 3%;
}

</style>


</div>

</footer>

</HTML>