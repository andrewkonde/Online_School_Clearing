<?php
session_start();
?>

<!DOCTYPE HTML>
<HTML>
<link rel = "stylesheet" type = "text/css" href = "style.css" />


<head>
<title>Admin Space</title>

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

<div class="admincontent">
<div class="members">

<?php include 'connection.php'; ?>
<?php






//**********************************************************************************
echo '<h2>Students   <form action="regstudent.html"><button type="submit">Add</button></form></h2>';

$query="SELECT * FROM registeredstudents";

echo '<table border="2" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial"><h3>ID</h3></font> </td> 
          <td> <font face="Arial"><h3>STUDENT UPI</h3></font> </td> 
          <td> <font face="Arial"><h3>ADM No.</h3></font> </td> 
          <td> <font face="Arial"><h3>NAME</h3></font> </td> 
          <td> <font face="Arial"><h3>DOB</h3></font> </td> 
		  <td> <font face="Arial"><h3>GENDER</h3></font> </td> 
          <td> <font face="Arial"><h3>DATE JOINED</h3></font> </td> 
      </tr>';
	  

if ($result = $connection->query($query)) {
	$totalstudents= mysqli_num_rows($result);
    while ($row = $result->fetch_assoc()) {
        $id = $row["ID"];
        $upi = $row["upi"];
        $adm = $row["adm"];
        $name = $row["name"];
        $dob = $row["dob"]; 
		$gender = $row["gender"]; 
		$joined = $row["joined"]; 
		

        echo '<tr> 
                  <td>'.$id.'</td> 
                  <td>'.$upi.'</td> 
                  <td>'.$adm.'</td> 
                  <td>'.$name.'</td> 
                  <td>'.$dob.'</td> 
				  <td>'.$gender.'</td> 
                  <td>'.$joined.'</td> 
              </tr>';
    }
    //$result->free();
}else{
echo "<script language='javascript' type='text/javascript'>";
echo "alert('Students not Found! Please try again.');";
echo "</script>";
$URL="admin.php";
echo "<script>location.href='$URL'</script>";
}
echo '</table>';
echo "Total Students: ".$totalstudents;

echo '<br>';
echo '<br>';
//--------------------------------------------------------------------------------------------------------------------------------------------------------
echo '<h2>Teachers   <form action="regteacher.html"><button type="submit">Add</button></form></h2>';

$query="SELECT * FROM registeredteachers";

echo '<table border="2" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial"><h3>ID</h3></font> </td> 
          <td> <font face="Arial"><h3>TEACHER TSC</h3></font> </td> 
          <td> <font face="Arial"><h3>NATIONAL ID No.</h3></font> </td> 
          <td> <font face="Arial"><h3>NAME</h3></font> </td> 
		  <td> <font face="Arial"><h3>PHONE No.</h3></font> </td> 
          <td> <font face="Arial"><h3>DOB</h3></font> </td> 
		  <td> <font face="Arial"><h3>GENDER</h3></font> </td> 
		  <td> <font face="Arial"><h3>YEAR JOINED</h3></font> </td> 
          <td> <font face="Arial"><h3>DATE JOINED</h3></font> </td> 
      </tr>';
	  

if ($result = $connection->query($query)) {
	$totalteachers= mysqli_num_rows($result);
    while ($row = $result->fetch_assoc()) {
        $id = $row["ID"];
        $tsc = $row["tsc"];
        $nationalid = $row["nationalid"];
        $name = $row["name"];
		$phone = $row["phone"];
        $dob = $row["dob"]; 
		$gender = $row["gender"]; 
		$yearjoined = $row["yearjoined"]; 
		$datejoined = $row["joined"]; 
		

        echo '<tr> 
                  <td>'.$id.'</td> 
                  <td>'.$tsc.'</td> 
                  <td>'.$nationalid.'</td> 
                  <td>'.$name.'</td> 
				  <td>'.$phone.'</td> 
                  <td>'.$dob.'</td> 
				  <td>'.$gender.'</td> 
				  <td>'.$yearjoined.'</td> 
                  <td>'.$datejoined.'</td> 
              </tr>';
    }
    //$result->free();
}else{
echo "<script language='javascript' type='text/javascript'>";
echo "alert('Teachers not Found! Please try again.');";
echo "</script>";
$URL="admin.php";
echo "<script>location.href='$URL'</script>";
}
echo '</table>';

echo "Total Teachers: ".$totalteachers;

echo '<br>';
echo '<br>';

echo '<h2>Subjects   <form action="#"><button type="submit">Add</button></form></h2>';
echo '<br>';
echo '<br>';

echo '<h2>Teacher Subjects   <form action="#"><button type="submit">Add</button></form></h2>';
echo '<br>';
echo '<br>';

?>
</div>

<div class="userfeedback">
<?php

echo '<br>';
//---------------------------------------------------------------------------------
/*
echo '<h2>Feedback</h2>';

$query2="SELECT * FROM feedback";

echo '<table border="2" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial"><h3>ID</h3></font> </td> 
          <td> <font face="Arial"><h3>USERNAME</h3></font> </td> 
          <td> <font face="Arial"><h3>FEEDBACK</h3></font> </td> 
      </tr>';
	  

if ($res = $connection->query($query2)) {
    while ($row = $res->fetch_assoc()) {
        $id = $row["ID"];
        $username = $row["username"];
        $feedback = $row["feedback"];

        echo '<tr> 
                  <td>'.$id.'</td> 
                  <td>'.$username.'</td> 
                  <td>'.$feedback.'</td> 
          
              </tr>';
    }
    //$result->free();
}else{
echo "<script language='javascript' type='text/javascript'>";
echo "alert('Feedback not Found! Please try again.');";
echo "</script>";
$URL="admin.php";
echo "<script>location.href='$URL'</script>";
}
echo '</table>';
//**********************************************************************************
*/
?>

</div>


</div>

<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<br><br><br>

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


