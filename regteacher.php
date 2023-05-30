<?php include 'connection.php'; ?>
<?php
session_start();
?>
<?php

$tsc=$connection -> real_escape_string(($_POST["tsc"]));
$nationalid=$connection -> real_escape_string(($_POST["nationalid"]));
$name=$connection -> real_escape_string(($_POST["name"]));
$phone=$connection -> real_escape_string(($_POST["phone"]));
$dob=$connection -> real_escape_string(($_POST["dob"]));
$gender=$connection -> real_escape_string(($_POST["gender"]));
$year=$connection -> real_escape_string(($_POST["year"]));


$schoolcode=$_SESSION['schoolcode'];
/*
if (isset($_POST['subject1'])) {
    $subject1='1';
}else{
	$subject1='0';
}
*/


$sql=("INSERT INTO registeredteachers(schoolcode, tsc, nationalid, name, phone, dob, gender, yearjoined) VALUES('$schoolcode', '$tsc', '$nationalid', '$name', '$phone', '$dob', '$gender', '$year')");
$insert=($connection->query($sql));
if($insert){
	
echo "<script language='javascript' type='text/javascript'>";
echo "alert('Details submitted successfully!');";
echo "</script>";
$URL="regteacher.html";
echo "<script>location.href='$URL'</script>";
	
}else{
	
echo "<script language='javascript' type='text/javascript'>";
echo "alert('Details submission failed! Please try again.');";
echo "</script>";
$URL="regteacher.html";
echo "<script>location.href='$URL'</script>";

}




?>

