<?php include 'connection.php'; ?>
<?php
session_start();
?>
<?php

$subjectcode=$connection -> real_escape_string(($_POST["subjectcode"]));
$subjectname=$connection -> real_escape_string(($_POST["subjectname"]));



$sql=("INSERT INTO subjects(subjectcode, subjectname) VALUES('$subjectcode','$subjectname')");
$insert=($connection->query($sql));
if($insert){
	
echo "<script language='javascript' type='text/javascript'>";
echo "alert('Details submitted successfully!');";
echo "</script>";
$URL="addsubjects.html";
echo "<script>location.href='$URL'</script>";
	
}else{
	
echo "<script language='javascript' type='text/javascript'>";
echo "alert('Details submission failed! Please try again.');";
echo "</script>";
$URL="addsubjects.html";
echo "<script>location.href='$URL'</script>";

}




?>

