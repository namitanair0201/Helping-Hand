<?php
session_start(); // Starting Session
$_SESSION['var1']='';
if(isset($_POST['reg']))
{
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "helping hand";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error)
	{
		die("Connection failed: " . $conn->connect_error);
	} 
	else
	{
		$email=$_POST['email'];
		$password=$_POST['password'];
		$pass=$_POST['password_confirmation'];
		$name=$_POST['name'];
		$loc=$_POST['sel1'];

		if($password != $pass)
		{
			$_SESSION['var1']= "Passwords don't match";
		}
		else
		{
			$password = md5($_POST['password']); 
			$sql1 = "INSERT INTO volunteer (email,name,password,location) VALUES ('$email','$name','$password','$loc')";
			if ($conn->query($sql1) == TRUE)
			{
				$_SESSION['var1']="Successfully registered! Please LOGIN";
			}
			else
			{
				$_SESSION['var1']= "User already exists";
			}
		}
		header("Location: index.php");
	}
}
		$conn->close();
?>