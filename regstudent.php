<?php include 'connection.php'; ?>
<?php
session_start();
?>
<?php

$upi=$connection -> real_escape_string(($_POST["upi"]));
$adm=$connection -> real_escape_string(($_POST["adm"]));
$name=$connection -> real_escape_string(($_POST["name"]));
$dob=$connection -> real_escape_string(($_POST["dob"]));
$year=$connection -> real_escape_string(($_POST["year"]));
$gender=$connection -> real_escape_string(($_POST["gender"]));

$schoolcode=$_SESSION['schoolcode'];


$sql=("INSERT INTO registeredstudents(schoolcode, upi, adm, name, dob, yearjoined, gender) VALUES('$schoolcode','$upi','$adm', '$name', '$dob', '$year', '$gender')");
$insert=($connection->query($sql));
if($insert){
	
echo "<script language='javascript' type='text/javascript'>";
echo "alert('Details submitted successfully!');";
echo "</script>";
$URL="regstudent.html";
echo "<script>location.href='$URL'</script>";
	
}else{
	
echo "<script language='javascript' type='text/javascript'>";
echo "alert('Details submission failed! Please try again.');";
echo "</script>";
$URL="regstudent.html";
echo "<script>location.href='$URL'</script>";

}




?>

