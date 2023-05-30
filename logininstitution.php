<?php
session_start();
?>

<?php
if(isset($_SESSION["logged"]) && $_SESSION["logged"] === true){
    header("location: index.php");
    exit;
}
?>

<?php include 'connection.php'; ?>
<?php

$schoolcode=$connection -> real_escape_string(($_POST['schoolcode']));
$userpass=$connection -> real_escape_string(($_POST['password']));


	/*
echo ("Username: ".$username.'<br>');
echo ("Password: ".$userpass.'<br>');
*/





//----------------------------------------------------------------------------------------------
$s="SELECT schoolcode FROM institutions WHERE schoolcode='$schoolcode'";
$valid=(mysqli_query($connection, $s));
$validmember=(mysqli_fetch_array($valid));

if(!$validmember){
	
	$_SESSION['logged']=false;
	
echo "<script language='javascript' type='text/javascript'>";
echo "alert('School Code not Found! Please try again.');";
echo "</script>";
$URL="loginregisterinstitution.html";
echo "<script>location.href='$URL'</script>";

}else{
	//$_SESSION['logged']===true;
$s="SELECT name FROM institutions WHERE schoolcode='$schoolcode'";
$valid=(mysqli_query($connection, $s));
if($valid->num_rows>0){
while($row=mysqli_fetch_array($valid)){
	$currentuser=$row['name'];
	$_SESSION['username']=$currentuser;
	
}

$sql="SELECT pass FROM institutions WHERE schoolcode='$schoolcode'";
$pass=(mysqli_query($connection, $sql));

if($pass->num_rows>0){
while($row=mysqli_fetch_array($pass)){
	$passresult=$row['pass'];
	//$_SESSION['password']=$passresult;
}

//mysql_result($result, 0);

if (password_verify($userpass, $passresult)) {
	
	//&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&
	
$sql3="SELECT image FROM institutions WHERE schoolcode='$schoolcode'";
$result=(mysqli_query($connection,$sql3));
if($result->num_rows>0){
while($row= mysqli_fetch_array($result)){
	$mypic=($row['image']);
	$_SESSION['image']=$mypic;
	//echo ('<img src="data:image/jpeg;base64,'.base64_encode($row['schoollogo']).'">');
}
	//&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&
	
	$_SESSION['logged']=true;
	$_SESSION['username']=$_SESSION['username'];
	$_SESSION['image']=$_SESSION['image'];
	//$_SESSION['institution']=true;
	$_SESSION['membership']='institution';
	$_SESSION['schoolcode']=$schoolcode;
	/*
	if($userpass===123){
	$_SESSION['status']="admin";
}else{
	$_SESSION['status']="member";
}
*/

	//$_SESSION['password']=$_SESSION['password'];
	
echo "<script language='javascript' type='text/javascript'>";
echo "alert('Login Successful!');";
echo "</script>";
$URL="index.php";
echo "<script>location.href='$URL'</script>";
}else{
$_SESSION["logged"]=false;
	
echo "<script language='javascript' type='text/javascript'>";
echo "alert('Schol Logo not Found! Please try again.');";
echo "</script>";
$URL="loginregisterinstitution.html";
echo "<script>location.href='$URL'</script>";
}
}else {
	
	$_SESSION["logged"]=false;
	
echo "<script language='javascript' type='text/javascript'>";
echo "alert('Incorrect Password! Please try again.');";
echo "</script>";
$URL="loginregisterinstitution.html";
echo "<script>location.href='$URL'</script>";
}

}

}








}

//-----------------------------------------------------------------------------------------------



?>

