<?php include 'connection.php'; ?>
<?php


$sql = "CREATE TABLE IF NOT EXISTS `students` (
 `ID` int(255) NOT NULL AUTO_INCREMENT,
 `upi` int(50) DEFAULT NULL,
 `name` tinytext DEFAULT NULL,
 `dob` date DEFAULT NULL,
 `email` varchar(50) DEFAULT NULL,
 `username` varchar(50) NOT NULL,
 `pass` varchar(255) DEFAULT NULL,
 `joined` timestamp NOT NULL DEFAULT current_timestamp(),
 `image` blob DEFAULT NULL,
 PRIMARY KEY (`ID`),
 UNIQUE KEY `upi` (`upi`),
 UNIQUE KEY `email` (`email`),
 UNIQUE KEY `username` (`username`)
)";


if(!(mysqli_query($connection, $sql))){
    echo "ERROR: Could not be able to execute $sql. " . mysqli_error($connection);
}

$sql2 = "CREATE TABLE IF NOT EXISTS `teachers` (
 `ID` int(255) NOT NULL AUTO_INCREMENT,
 `tsc` int(50) DEFAULT NULL,
 `nationalid` int(30) DEFAULT NULL,
 `name` tinytext DEFAULT NULL,
 `phone` int(15) DEFAULT NULL,
 `dob` date DEFAULT NULL,
 `email` varchar(50) DEFAULT NULL,
 `username` varchar(50) NOT NULL,
 `pass` varchar(255) DEFAULT NULL,
 `joined` timestamp NOT NULL DEFAULT current_timestamp(),
 `image` blob DEFAULT NULL,
 PRIMARY KEY (`ID`),
 UNIQUE KEY `phone` (`phone`),
 UNIQUE KEY `email` (`email`),
 UNIQUE KEY `username` (`username`)
)";


if(!(mysqli_query($connection, $sql2))){
    echo "ERROR: Could not be able to execute $sql2. " . mysqli_error($connection);
}
 
$sql3 = "CREATE TABLE IF NOT EXISTS `institutions` (
  `ID` int(255) NOT NULL AUTO_INCREMENT,
  `schoolcode` int(50) DEFAULT NULL,
  `name` tinytext DEFAULT NULL,
  `county` tinytext DEFAULT NULL,
  `pobox` int(50) DEFAULT NULL,
  `foundedyear` int(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` int(15) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `joined` timestamp NOT NULL DEFAULT current_timestamp(),
  `image` blob DEFAULT NULL,
 PRIMARY KEY (`ID`),
 UNIQUE KEY `phone` (`phone`),
 UNIQUE KEY `pobox` (`pobox`),
 UNIQUE KEY `email` (`email`),
 UNIQUE KEY `schoolcode` (`schoolcode`)
)";
	
	if(!(mysqli_query($connection, $sql3))){
    echo "ERROR: Could not be able to execute $sql3. " . mysqli_error($connection);
}
 
 
 $sql4 = "CREATE TABLE IF NOT EXISTS `registeredstudents` (
 `ID` int(255) NOT NULL AUTO_INCREMENT,
 `schoolcode` int(50) DEFAULT NULL,
 `upi` int(50) DEFAULT NULL,
 `adm` int(10) DEFAULT NULL,
 `name` tinytext DEFAULT NULL,
 `dob` date DEFAULT NULL,
 `yearjoined` int(4) DEFAULT NULL,
 `gender` tinytext DEFAULT NULL,
 `joined` timestamp NOT NULL DEFAULT current_timestamp(),
 PRIMARY KEY (`ID`),
 UNIQUE KEY `upi` (`upi`)
)";


if(!(mysqli_query($connection, $sql4))){
    echo "ERROR: Could not be able to execute $sql4. " . mysqli_error($connection);
}

$sql5 = "CREATE TABLE IF NOT EXISTS `registeredteachers` (
 `ID` int(255) NOT NULL AUTO_INCREMENT,
 `schoolcode` int(50) DEFAULT NULL,
 `tsc` int(50) DEFAULT NULL,
 `nationalid` int(30) DEFAULT NULL,
 `name` tinytext DEFAULT NULL,
 `phone` int(15) DEFAULT NULL,
 `dob` date DEFAULT NULL,
 `gender` tinytext DEFAULT NULL,
 `yearjoined` int(4) DEFAULT NULL,
 `joined` timestamp NOT NULL DEFAULT current_timestamp(),
 PRIMARY KEY (`ID`),
 UNIQUE KEY `tsc` (`tsc`),
 UNIQUE KEY `phone` (`phone`)
)";




if(!(mysqli_query($connection, $sql5))){
    echo "ERROR: Could not be able to execute $sql5. " . mysqli_error($connection);
}
 
$sql6 = "CREATE TABLE IF NOT EXISTS `clearingrequests` (
 `ID` int(255) NOT NULL AUTO_INCREMENT,
 `schoolcode` int(50) DEFAULT NULL,
 `studentupi` int(50) DEFAULT NULL,
 `subject` tinytext DEFAULT NULL,
 `status` tinytext DEFAULT 'pending',
 `time` timestamp NOT NULL DEFAULT current_timestamp(),
 PRIMARY KEY (`ID`)
)";


if(!(mysqli_query($connection, $sql6))){
    echo "ERROR: Could not be able to execute $sql6. " . mysqli_error($connection);
}

$sql7 = "CREATE TABLE IF NOT EXISTS `clearedrequests` (
 `ID` int(255) NOT NULL AUTO_INCREMENT,
 `schoolcode` int(50) DEFAULT NULL,
 `studentupi` int(50) DEFAULT NULL,
 `teachertsc` int(50) DEFAULT NULL,
 `subject` tinytext DEFAULT NULL,
 `status` tinytext DEFAULT 'cleared',
 `time` timestamp NOT NULL DEFAULT current_timestamp(),
 PRIMARY KEY (`ID`)
)";


if(!(mysqli_query($connection, $sql7))){
    echo "ERROR: Could not be able to execute $sql7. " . mysqli_error($connection);
}

$sql8 = "CREATE TABLE IF NOT EXISTS `subjects` (
 `ID` int(255) NOT NULL AUTO_INCREMENT,
 `subjectcode` int(50) DEFAULT NULL,
 `subjectname` tinytext DEFAULT NULL,
 PRIMARY KEY (`ID`),
 UNIQUE KEY `subjectcode` (`subjectcode`),
 UNIQUE KEY `subjectname` (`subjectname`)
)";


if(!(mysqli_query($connection, $sql8))){
    echo "ERROR: Could not be able to execute $sql8. " . mysqli_error($connection);
}

$sql9 = "CREATE TABLE IF NOT EXISTS `subjectsoffered` (
 `ID` int(255) NOT NULL AUTO_INCREMENT,
 `schoolcode` int(50) DEFAULT NULL,
 `subjectcode` int(50) DEFAULT NULL,
 `subjectname` tinytext DEFAULT NULL,
 PRIMARY KEY (`ID`)
)";


if(!(mysqli_query($connection, $sql9))){
    echo "ERROR: Could not be able to execute $sql9. " . mysqli_error($connection);
} 

$sql10 = "CREATE TABLE IF NOT EXISTS `teachersubjects` (
 `ID` int(255) NOT NULL AUTO_INCREMENT,
 `schoolcode` int(50) DEFAULT NULL,
 `teachertsc` int(50) DEFAULT NULL,
 `subjectcode` int(50) DEFAULT NULL,
 `subjectname` tinytext DEFAULT NULL,
 PRIMARY KEY (`ID`)
)";


if(!(mysqli_query($connection, $sql10))){
    echo "ERROR: Could not be able to execute $sql10. " . mysqli_error($connection);
}

/*
$sql11 = "CREATE TABLE IF NOT EXISTS `systemadmins` (
 `ID` int(255) NOT NULL AUTO_INCREMENT,
 `username` tinytext(50) DEFAULT 'System Admin',
 `admincode` int(50) DEFAULT '37016886',
 `image` blob DEFAULT NULL,
 PRIMARY KEY (`ID`)
)";


if(!(mysqli_query($connection, $sql11))){
    echo "ERROR: Could not be able to execute $sql11. " . mysqli_error($connection);
} 
*/
 
 

mysqli_close($connection);
?>

