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
/*$sql5="SELECT name FROM institutions WHERE schoolcode='$myschoolcode'";
$result=(mysqli_query($connection,$sql5));
if($result->num_rows>0){
while($row= mysqli_fetch_array($result)){
	$myschoolname=($row['name']);
	$_SESSION['myschoolname']=$myschoolname;
	//echo ('<img src="data:image/jpeg;base64,'.base64_encode($row['schoollogo']).'">');
}
}
*/

if($admincode==37016886){
	
	$_SESSION['logged']=true;
	$_SESSION['username']='System Admin';
	$pic='<img src="Images/logo.jpg"/>';
	//$pic='Images/logo.jpg';
	$_SESSION['image']=$pic;
	$_SESSION['membership']='systemadmin';
	
echo "<script language='javascript' type='text/javascript'>";
echo "alert('Success!');";
echo "</script>";
$URL="systemadminspace.php";
echo "<script>location.href='$URL'</script>";

}else {
	
	
echo "<script language='javascript' type='text/javascript'>";
echo "alert('Incorrect Admin Code! Please try again.');";
echo "</script>";
$URL="systemadmin.php";
echo "<script>location.href='$URL'</script>";
}

//-----------------------------------------------------------------------------------------------



?>

