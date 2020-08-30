<?php
include 'DatabaseConnection.php';
$fname = $conn->real_escape_string($_REQUEST['fname']);
$lname = $conn->real_escape_string($_REQUEST['lname']);
$gender = $conn->real_escape_string($_REQUEST['gender']);
$email = $conn->real_escape_string($_REQUEST['email']);
$password = $conn->real_escape_string($_REQUEST['psw']);


$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);
$numberFirstName    = preg_match('@[0-9]@', $fname);
$numberLastName    = preg_match('@[0-9]@', $lname);
$specialChars = preg_match('@[^\w]@', $password);


if(strlen($password) > 6 && $uppercase && $lowercase && $number && $specialChars && $numberLastName == False && $numberFirstName == False )
{
	$sql = "INSERT INTO userinformation (FirstName,LastName,Gender,EmailId,Password) VALUES ('$fname','$lname','$gender','$email','$password')";
	
}
else
{
	echo '<script>alert("Error");</script>';
	echo '<script>location.href="./sign_up.php";</script>';
}



if ($conn->query($sql) === TRUE) {
	$msg ="Hello".$fname."".$lname."!\n"."Welcome to Genete & Ciudad \n You have successfully completed your registeration \n We Welcome you to the family..! \n\n \n \n Thanks and Regards \n Gente & Ciudad";
	mail($email,"Regisration Successfull",$msg);
	//echo '<script>location.href="./RegisterSuccess.php";</script>';
	 header('Location:./RegisterSuccess.php?name='.$fname);

} else {
	echo '<script>alert("Account Already Exists");</script>';
	echo '<script>location.href="./sign_up.php";</script>';
    //header('Location:./sign_up.html');

}

$conn->close();
?>