<?php
session_start();
/*if(!(isset($_SESSION["logged"]) && $_SESSION["logged"] === true)){
	header("location: loginregister.html");
    exit;
}    */
?>
<!DOCTYPE HTML>
<HTML>
<link rel = "stylesheet" type = "text/css" href = "style.css" />

<head>
<title>Services</title>

<link rel = "icon" href = "logo icon min png.png" type = "image/x-icon"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>


<div class="top">

<div class="logo">
<a href="index.php"><img src="Images/logo.jpg" class="logo" width="100px" height="100px"/></a>
</div>

<div class="title">
<h3>TITAN MARTIAL CLUB</h3>
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
 
 echo '<option value="edit.php">Edit My Details</option>';
 echo '<option value="admin.php">Admin Options</option>';
 echo '<option value="logout.php">Log Out</option>';
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
	  echo '<div class="notlogged">';
      echo '<a href="loginregister.html"><h4>Login/ Sign Up</h4></a>';
	  echo '</div>';
    
	echo '
	<style>
	.pic, .myname, .feedback{
		display: none;
	}
	
	.notlogged {
	width: 100%;
	margin: auto;
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

</div>
</div>


<div class="services">

<h3>Our Services</h3>
<h4>Mixed Martial Arts Training Video Tutorials</h4> 
<p>Since we currently don't have a permanent dojo, we usually conduct most of our trainings online. We offer video tutorials mainly through our <a href="https://www.youtube.com/channel/UCA0mzeWRmmV6_BcQucPGC5A" target="_blank">YouTube Channel.</a> These range from physical exercises and conditioning which are important for the general health of the body, and also mental training, which forms an important part especially in self- defense.</p>
<p>This is made possible particularly by our able and qualified instructors.</p><br>
<h4>Self- Defense Training Video Tutorials</h4> 
<p>These are also currently offered via our <a href="https://www.youtube.com/channel/UCA0mzeWRmmV6_BcQucPGC5A" target="_blank">YouTube Channel</a> as well.</p>
<p>The self- defense techniques demonstrated are usually researched on and tested to make sure they can be applied succesfully and efficiently in a real combat situation.</p><br>
<h4>Martial Arts Demonstration</h4> 
<p>We offer Martial Arts performances and demonstrations at events as a form of entertainment.</p>
<p>For bookings, please feel free to <a href="contacts.php" target="_blank">Contact Us </a> as soon as possible.</p><br>
<h4>Acting</h4> 
<p>We currently do short Martial Arts action films with the aim of addressing common societal matters in a unique way using Matial Arts, but we're also planning on longer films in the near future.</p>
<p>For bookings, please feel free to <a href="contacts.php" target="_blank">Contact Us </a> as soon as possible.</p><br>
<h4>Advertising</h4> 
<p>Companies and firms can hire us to create advertisements for their products and services, as well as market them.</p><br>

<style>
.services{
background-color: white;
padding: 5px;


}

</style>

</div>




</body>


<footer>

<div class="below">

<div class="history">
<h3>History</h3>
<p>Titan Martial Club was formed in early 2020 by the Founders Andrew Konde and Lescer Kanjele, with the aim of Mixed Martial Arts Training for overall body fitness, self- defense, and Martial Arts Demonstrations. </p>
</div>

<div class="contacts">
<h3>Contacts</h3>
<p>Tel:</p>
<p>+254711190225</p>
<p>+254746921790</p>
<p>Email: titanmartialclub@gmail.com</p>

</div>

<div class="quicklinks">
<h3>Social Media</h3>
<a href="https://www.youtube.com/channel/UCA0mzeWRmmV6_BcQucPGC5A" target="_blank">YouTube</a><br><br>
<a href="https://www.instagram.com/titan_martial_club/" target="_blank">Instagram</a><br><br>
<a href="https://www.facebook.com/titanmartialclub" target="_blank">Facebook Page</a><br><br>
<a href="https://www.facebook.com/groups/410427213350712" target="_blank">Facebook Public Group</a><br><br>
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