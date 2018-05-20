<?php
session_start(); // Starting Session
$_SESSION['error'] = ''; // Variable To Store Error Message
if (isset($_POST['submit'])) 
{
    if (empty($_POST['username']) || empty($_POST['password']))
    {
        $_SESSION['error'] = "empty";
    }
    else
    {
        // Define $username and $password
        $username=$_POST['username'];
        $password=$_POST['password'];
        // Establishing Connection with Server by passing server_name, user_id and password as a parameter
        $connection = mysqli_connect("localhost", "root", "");
        // Selecting Database
        $db = mysqli_select_db($connection, "helping hand");
        // SQL query to fetch information of registered users and finds user match.
        $password = md5( $password);
        $result = mysqli_query( $connection, "select * from volunteer where email = '$username' and password = '$password'");
        $rows = mysqli_num_rows( $result);
        if ($rows == 1)
        {
            $_SESSION['login_user']=$username; // Initializing Session
            while($row = $result->fetch_assoc())
            {
                $_SESSION['name']=  $row["name"];
            }
        $_SESSION['email']= $username;
        setcookie("username", $username, time()+(86400*30));
        setcookie("password", md5($password), time()+(86400*30));
        header('location: home.php'); // Redirecting To Other Page
        }
        else if($rows==false)
        {
            $_SESSION['error'] = md5($password);
            header('location: index.php'); // Redirecting To Other Page
        }
        mysqli_close($connection); // Closing Connection
    }
}
?>