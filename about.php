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
<title>About Us</title>

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


<div class="about">

<h2>Introduction</h2> 
<p>Titan Martial Club is a mixed martial arts club currently located in Mwatate, Taita- Taveta County and it comprises of practitioners from different martial arts disciplines, for example, Karate, Taekwondo, Boxing, Muay Thai, Kick Boxing, etc.</p><br> 
<h2>Background</h2>
<p>The club was formed in early 2020 by the Founders Andrew Konde and Lescer Kanjele, with the aim of Mixed Martial Arts Training for overall body fitness, self- defense, and Martial Arts Demonstrations.</p><br>
<h2>Objectives</h2>
<p>The main objectives of Titan Martial Club are:</p>
<p>1. Mixed Martial Arts Training</p>
<p>2. Self- Defense</p>
<p>3. Martial Arts Demonstration</p>
<p>4. Acting</p>
<p>5. Advertising</p><br>
<p>The club is still growing, and more people who are willing are welcome to join.<p>
<p>We currently do not have a permanent dojo (a training hall/ building/ place), so we train wherever suitable, a place free from much distraction.</p><br>
<h2>Mission</h2>
<p>We would like to be good ambassadors of Martial Arts to the world to the best of our ability, spreading awareness on the same and its endless benefits.</p><br>
<h2>Vision</h2>
<p>To be a leading company in and out of the region and to provide as much value as possible to the society.</p><br>

<style>
.about{
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