<?php
session_start();
if(!isset($_SESSION['login_user']))
{
    header('location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <title>NGO Finder</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <!-- custom css-->
    <link href="css/home.css" rel="stylesheet">
    <script src="https://use.fontawesome.com/c896113aad.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

  </head>
  
  <body>
        <div class = "container text-center">
                <h1>A Helping Hand</h1>
        </div>

<!--using bootstrap to create the navigation bar-->
<nav class = "navbar navbar-default navbar-fixed-top"> <!--fixing it to the top of the page-->
    
  <div class = "container">
      <button type = "button" class = "navbar-toggle" data-toggle = "collapse" data-target = ".navbar-collapse">
          <span class = "sr-only"> Toggle navigation </span>
          <span class="icon-bar"> </span>
          <span class="icon-bar"> </span>
          <span class="icon-bar"> </span> <!--will display 3 bars when the screen size is reduced-->
      </button>

      <a class= "navbar-brand" href="#"> Do good, feel good </a> <!-- name of the "brand"-->
      <div class="navbar-collapse collapse"> 

          <ul class = "nav navbar-nav navbar-right">
                <li><a href="user.php"><?php echo 'Hi '.$_SESSION['name']; ?></a></li>
                <li><a href = "home.php"> Homepage </a></li>
                <li><a href = "donate.php"> Donate </a></li>
                <li class = "dropdown"><a href="#" data-toggle="dropdown" > Activities <b class= "caret"> </b>
                  <ul class = "dropdown-menu"> 
                      <li> <a href = "reg.php"> NGO registration process </a></li>
                      <li  class = "active"> <a href = "finder.php"> NGO Finder </a> </li>
                      <li> <a href = "enroll.php"> Event Finder </a> </li>
                      <li> <a href = "top 5.php "> Top 5 NGOs for the month </a> </li>
                  </ul>
                </li>
               <li><a href = "about.php"> Contact </a></li>
               <li><a href = "response.php"> Comments </a></li>
               <li><a href = "logout.php"> Logout </a></li>
          </ul>
      </div> <!-- for the navbar-->
  </div> <!--container-->
</nav>
<div class = "container">
    <p> Welcome to our NGO Finder. This tool is designed to help you find NGOs according to your need. </p>
    <form action = "finder.php " method = "POST">
    <label for= "location">Click here to find by location: </label>
     <br>   <select required class="form-control" name="location" id="location">
            <option value = '' selected disabled>-- Location --</option>
            <option>panvel</option>
            <option>kharghar</option>
            <option>seawoods</option>
            <option>nerul</option>
            <option>vashi</option>
            <option>chembur</option>
            <option>mulund</option>
        </select><br>

    <label for= "cause">Click here to find by causes: </label>
    <select required class="form-control" name="cause" id="cause">
            <option value = '' selected disabled>-- Cause -- </option>
            <option>education</option>
            <option>civil rights</option>
            <option>women empowerment</option>
            <option>awareness</option>
    </select> <br>
    <input type="submit" value="SUBMIT" name="submit" class="btn btn-lg btn-primary btn-block">
    </form>

    <?php     
     $_SESSION['var1']='';
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "helping hand";
     
     // Create connection
     $conn = new mysqli($servername, $username, $password, $dbname);
     // Check connection
     if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);}
    if(isset($_POST['submit']))
    {   $loc=$_POST['location'];
        $cause=$_POST['cause'];
        $sql = "SELECT name,contact,location FROM ngo WHERE ((location = '$loc') AND (cause = '$cause'))";
        $result = $conn->query($sql); 
        if ($result->num_rows > 0) {
            //displaying the table header
            echo '<h3>'."List of NGOs".'</h3><div class = "table-responsive"><table class = "table"><thead><tr><th>'."NGO Name".'</th><th>'."Contact Number".'</th><th>'."Location".'</th></tr></thead><tbody>';
            while($row = $result->fetch_assoc()) {
                
            echo '<tr><td>'.$row['name'].'</td><td>'.$row['contact'].'</td><td>'.$row['location'].'</td></tr>';
            }
        } else { echo "Sorry No NGOs, Try with different values.";}
    }    
    $conn->close();
    ?>
        </table>
        <br><br><br>
</div>
</div>

<!-- footer to the page-->
<div class = "navbar navbar-default navbar-fixed-bottom">
    <div class = "container">
        <div class = "navbar-text pull-left ">
             Copyright A Helping Hand 2017
        </div>
        <div class = "navbar-text pull-right ">
                <a href = "https://www.facebook.com"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a>
                <a href = "https://www.twitter.com"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
                <a href = "https://www.plus.google.com"><i class="fa fa-google-plus fa-2x" aria-hidden="true"></i></a>
        </div>
    </div>
</div>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
