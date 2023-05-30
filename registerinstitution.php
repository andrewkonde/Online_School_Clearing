<?php include 'connection.php'; ?>
<?php

$name=$connection -> real_escape_string(($_POST["name"]));
$county=$connection -> real_escape_string(($_POST["county"]));
$pobox=$connection -> real_escape_string(($_POST["pobox"]));
$foundedyear=$connection -> real_escape_string(($_POST["foundedyear"]));
$email=$connection -> real_escape_string(($_POST["email"]));
$phone=$connection -> real_escape_string(($_POST["phone"]));
$schoolcode=$connection -> real_escape_string(($_POST["schoolcode"]));
$pass=$connection -> real_escape_string(($_POST["password1"]));
$pass2=$connection -> real_escape_string(($_POST["password2"]));
$logo=addslashes(file_get_contents($_FILES["pic"]["tmp_name"]));

if($pass==$pass2){
	

$hashedpass= (password_hash($pass, PASSWORD_DEFAULT));



// name of the uploaded file
    $filename = $_FILES['pic']['name'];

// get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);
	
	if (!in_array($extension, ['jpg', 'jpeg', 'png'])) {
		
echo "<script language='javascript' type='text/javascript'>";
echo "alert('You Profile Picture Must Be a .JPG, .JPEG or .PNG');";
echo "</script>";
$URL="registerinstitution.html";
echo "<script>location.href='$URL'</script>";
		
        
    } elseif ($_FILES['pic']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
	
echo "<script language='javascript' type='text/javascript'>";
echo "alert('Your Profile Picture Must be Less Than 1MB');";
echo "</script>";
$URL="registerinstitution.html";
echo "<script>location.href='$URL'</script>";
	
        //echo "File too large!";
    } else {

$sql=("INSERT INTO institutions(schoolcode, name, county, pobox, foundedyear, email, phone, pass, image) VALUES('$schoolcode', '$name', '$county', '$pobox', '$foundedyear', '$email', '$phone', '$hashedpass', '$logo')");
$insert=($connection->query($sql));
if($insert){
	
echo "<script language='javascript' type='text/javascript'>";
echo "alert('Details submitted successfully! You can now Log in');";
echo "</script>";
$URL="loginregisterinstitution.html";
echo "<script>location.href='$URL'</script>";
	
}else{
	
echo "<script language='javascript' type='text/javascript'>";
echo "alert('Details submission failed! Please try again.');";
echo "</script>";
$URL="registerinstitution.html";
echo "<script>location.href='$URL'</script>";

}
	}

}else{

echo "<script language='javascript' type='text/javascript'>";
echo "alert('The passwords do not match, Please try again');";
echo "</script>";
$URL="registerinstitution.html";
echo "<script>location.href='$URL'</script>";


}



?>

