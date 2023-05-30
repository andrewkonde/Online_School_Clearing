<?php
echo (
'<html>
<form action="hashverify.php" method="POST">
Password: <input type="text" name="pass" required>
<button name="submit" type="submit">Submit</button>
</form> 
</html>'.'<br>');


$userpass=$_POST['pass'];
$test=123;
echo ("Your password is: ".$userpass).'<br>';
$hashedpass=password_hash($userpass, PASSWORD_DEFAULT);
echo ("Your hashed password is: ".$hashedpass.'<br>');

if(PASSWORD_VERIFY($test, $hashedpass)){
	echo ("Hashes matched!");
}else{
	echo ("Hashes didn't match!");
}


?>