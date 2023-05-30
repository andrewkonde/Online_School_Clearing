<?php include 'connection.php'; ?>
<?php

$name=$connection -> real_escape_string(($_POST["name"]));
$phone=$connection -> real_escape_string(($_POST["phone"]));
$dob=$connection -> real_escape_string(($_POST["dob"]));
$email=$connection -> real_escape_string(($_POST["email"]));
$username=$connection -> real_escape_string(($_POST["username"]));
$pass=$connection -> real_escape_string(($_POST["password1"]));
$pass2=$connection -> real_escape_string(($_POST["password2"]));
$img=addslashes(file_get_contents($_FILES["pic"]["tmp_name"]));

if($pass==$pass2){
	
	/*
echo ("Name: ".$name.'<br>');
echo ("Phone: ".$phone.'<br>');
echo ("DOB: ".$dob.'<br>');
echo ("Email: ".$email.'<br>');
echo ("Username: ".$username.'<br>');
echo ("Password: ".$pass.'<br>');
*/


$hashedpass= (password_hash($pass, PASSWORD_DEFAULT));



// name of the uploaded file
    $filename = $_FILES['pic']['name'];

// get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);
	
	if (!in_array($extension, ['jpg', 'jpeg', 'png'])) {
		
echo "<script language='javascript' type='text/javascript'>";
echo "alert('You Profile Picture Must Be a .JPG, .JPEG or .PNG');";
echo "</script>";
$URL="register.html";
echo "<script>location.href='$URL'</script>";
		
        
    } elseif ($_FILES['pic']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
	
echo "<script language='javascript' type='text/javascript'>";
echo "alert('Your Profile Picture Must be Less Than 1MB');";
echo "</script>";
$URL="register.html";
echo "<script>location.href='$URL'</script>";
	
        //echo "File too large!";
    } else {

$sql=("INSERT INTO members(name, phone, dob, email, username, pass, image) VALUES('$name', '$phone', '$dob', '$email', '$username', '$hashedpass', '$img')");
$insert=($connection->query($sql));
if($insert){
	
echo "<script language='javascript' type='text/javascript'>";
echo "alert('Details submitted successfully! You can now Log in');";
echo "</script>";
$URL="loginregister.html";
echo "<script>location.href='$URL'</script>";
	
}else{
	
echo "<script language='javascript' type='text/javascript'>";
echo "alert('Details submission failed! Please try again.');";
echo "</script>";
$URL="register.html";
echo "<script>location.href='$URL'</script>";

}
	}

}else{

echo "<script language='javascript' type='text/javascript'>";
echo "alert('The passwords do not match, Please try again');";
echo "</script>";
$URL="register.html";
echo "<script>location.href='$URL'</script>";


}



?>

