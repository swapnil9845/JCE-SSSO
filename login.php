<?php
//header("Location: studentsignUp.html");
session_start();
$email = $_POST['username'];
$password = $_POST['password'];
// connect to the mysql database
$link = mysqli_connect('localhost', 'root', '', 'college');
//check if user with same username exists in db
$sql = "SELECT Password, FirstName, LastName FROM studentsignup WHERE UserName = '".$email."';";
echo $sql;
$result = mysqli_query($link,$sql);
if($result)
{
	$row = mysqli_fetch_row($result);
	//echo $row[0]. " ".$row[1]. " ". $row[2];
	if($row!=null && strcasecmp($row[0], $password) == 0)
	{
		$_SESSION['user_fname'] = $row[1];
		$_SESSION['user_lastname'] = $row[2];
		$_SESSION['username'] = $email;
		session_write_close();
		echo "Authenticated";
		//Redirect to redirecting page 
				//if(isset($_POST['redirurl'])) 
				//{
				//	$url = $_POST['redirurl']; // holds url for last page visited. 
				//	header("Location:$url");
				//}
				//else
				//{
					header("Location: event.html");
				//}
	}
	else
	{
		$_SESSION['error_msg'] = "Login Failed.";
		session_write_close();
		header("Location: adminerrorPage1.php");
	}
}
else
	{
		$_SESSION['error_msg'] = "Login Failed.";
		session_write_close();
		header("Location: adminerrorPage1.php");
	}
?>