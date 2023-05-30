<?php
session_start();
if(!(isset($_SESSION["logged"]) && $_SESSION["logged"] === true)){
	header("location: loginregister.html");
    exit;
}
?>
<?php include 'connection.php'; ?>
<?php

$feed = $connection -> real_escape_string(($_POST["feed"]));

//$feed1=mysql_real_escape_string($_POST["feed"]);
$username= $_SESSION['username'];

	
//echo ($username.", Your Feedback:".'<br>');	
//echo ($feed.'<br>');
//echo ($feed1.'<br>');





$sql=("INSERT INTO feedback(username, feedback) VALUES('$username', '$feed')");
$insert=($connection->query($sql));
if($insert){
	
echo "<script language='javascript' type='text/javascript'>";
echo "alert('Feedback submitted successfully!');";
echo "</script>";
$URL="index.php";
echo "<script>location.href='$URL'</script>";
	
}else{
	
echo "<script language='javascript' type='text/javascript'>";
echo "alert('Feedback submission failed! Please try again.');";
echo "</script>";
$URL="feedback.php";
echo "<script>location.href='$URL'</script>";

}






?>

