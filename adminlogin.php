<?php
session_start();
?>

<?php include 'connection.php'; ?>
<?php

$admincode=$connection -> real_escape_string(($_POST['code']));


	
	/*
echo ("Username: ".$username.'<br>');
echo ("Password: ".$userpass.'<br>');
*/



$thisuser=$_SESSION['username'];

//----------------------------------------------------------------------------------------------

if($admincode==37016886){
	
	
echo "<script language='javascript' type='text/javascript'>";
echo "alert('Success!');";
echo "</script>";
$URL="adminspace.php";
echo "<script>location.href='$URL'</script>";

}else {
	
	
echo "<script language='javascript' type='text/javascript'>";
echo "alert('Incorrect Admin Code! Please try again.');";
echo "</script>";
$URL="admin.php";
echo "<script>location.href='$URL'</script>";
}

//-----------------------------------------------------------------------------------------------



?>

