<html>
<body>

<?php
session_start();
//Retrieve form parameters
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$cid=$_POST['cid'];
$email=$_POST['email'];
$DSN = $_POST['DSN'];
$phone_number = $_POST['phone_number'];
$bdate = $_POST['birthdate'];
echo $fname. " ". $lname. " ". $cid. " ". $email. " ". " ". $DSN. " ". $phone_number. " ". $bdate[2];
// connect to the mysql database
$link = mysqli_connect('localhost', 'root', '', 'college');
//check if user with same username exists in db
$sql = "SELECT * FROM faculty WHERE email = '".$email."';";
$result = mysqli_query($link,$sql);

if(mysqli_fetch_row($result)!=null)
{
	$_SESSION['error_msg'] =  "User with this username already exists. Please sign up with a different username";
	header("Location: adminerrorPage.php");
	session_write_close();
}
else
{
$sql = "INSERT INTO faculty (email,cid, FirstName, LastName,DSN, Phone_number, Dob) VALUES ('".$email."','".$cid."', '". $fname. "', '" . $lname . "','".$DSN."', '" .$phone_number . "', '". $bdate. "');";
echo $sql;

// excecute SQL statement
$result = mysqli_query($link,$sql);
 
// die if SQL statement failed
if (!$result){ 
	//echo("SQL Error");
	$_SESSION['error_msg'] = "There was a problem while adding up. Please try again.";
	header("Location: adminerrorPage.php");
  die(mysqli_error());
}
else
{
	$_SESSION['user_fname'] = $fname;
$_SESSION['user_lastname'] = $lname;
$_SESSION['email'] = $email;
header("Location: recsuc.html");


}
}

?>

</body>
</html>