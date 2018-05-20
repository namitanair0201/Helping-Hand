<?php
session_start();
if(!isset($_SESSION['login_user']))
{
    header('location: index.php');
}

if(!isset($_SESSION['email'])){
    $_SESSION['email']='';
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <title> Event Finder</title>

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
                      <li> <a href = "finder.php"> NGO Finder </a> </li>
                      <li class = "active"> <a href = "enroll.php"> Event Finder </a> </li>
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
    <h3>Please select the location and/or the date as per your suitability. </h3>
    <br><br>
    <!-- form for selecting the values-->
    <form action = "enroll.php " method = "POST">
    <label for= "location">Choose your suitable event location: </label>
        <select placeholder = "Select location" class="form-control" name="location" id="location">
            <option value = '' selected disabled > Please choose</option>
            <option>panvel</option>
            <option>kharghar</option>
            <option>seawoods</option>
            <option>nerul</option>
            <option>vashi</option>
            <option>chembur</option>
            <option>mulund</option>
        </select>

    <label for= "date">Enter suitable date: </label>
    <input id = "date" type = "date" name = "date"  class = "form-control">
    <input type="submit" value="SUBMIT" name="submit" class="btn btn-lg btn-primary btn-block">
    </form>
    <br><br>
    
    
    <!-- table for displaying the result-->
    <?php     
     $_SESSION['var1']='';
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

    if(isset($_POST['submit']))
    { 
        if (empty($_POST['location']) && empty($_POST['date'])) 
        {
            echo '<h3>'."Please choose a value".'</h3>';
        } 
        else
        {
            if(empty($_POST['location'])) $loc = '';
            else
            {
                 $loc=$_POST['location'];
                 $sql = "SELECT e_id, e_date, e_name, e_loc, ngo_name FROM event WHERE (e_loc = '$loc')";
            }             
            if(empty($_POST['date'])) $date = '';
            else 
            {
                $date=$_POST['date'];
                $sql = "SELECT e_id, e_date, e_name, e_loc, ngo_name FROM event WHERE (e_date = '$date')";
            }
            if(!empty($_POST['location']) && !empty($_POST['date']) )
            {
                $loc = $_POST['location'];
                $date = $_POST['date'];
                $sql = "SELECT e_id, e_name, e_loc, e_date, ngo_name FROM event WHERE (e_date = '$date') AND (e_loc = '$loc')";
            }
            $result = $conn->query($sql); 
        if(is_object($result))
        {
            if ($result->num_rows > 0)
            {    
                echo '<h2>Event List</h2>';
                //displaying the table header      
                echo '<div class = "table-responsive"><table class = "table"><thead><tr><th>'."Event Name".'</th><th>'."Location".'</th><th>'."Date".'</th><th>'. "NGO".'</th><th>'. "ID".'</th></tr></thead><tbody>';
                while($row = $result->fetch_assoc())
                {
                    echo '<tr><td>'.$row['e_name'].'</td><td>'.$row['e_loc'].'</td><td>'.$row['e_date'].'</td> <td>'.$row['ngo_name'].'</td><td>'.$row['e_id'].'</td></tr>';
                }
                echo '</table></div>';
            }
        }

            else 
            {
                 echo "Sorry No events found. Try with different values.";
            }
        }    
    }
    ?>

    <!-- creating a form for updating the event list-->
    <h3 class = "text- center"> Enroll for an event </h3><br>
    <form method = "POST" action = "enroll.php" >    
        <label for = "id"> Please enter the event ID to register for an event </label><br>
        <input class = "form-control" type = "integer" name = "id" id = "id" placeholder = "Event ID"><br>
        <input type="submit" value="Enroll" name="enroll" class="btn btn-lg btn-primary btn-block">
    </form>
 <br><br><br>
    <!-- add it to the database-->
    <?php
    if(isset($_POST['enroll']))
    {  
        if(!empty($_POST['id']))
        {   
            $e = $_SESSION['email'];
            $p = $_POST['id'];
            $sql1 = "INSERT INTO vol_event( vol_email, event_id ) VALUES ( '$e', '$p') ";
            if ($conn->query($sql1) == TRUE)
            {
                echo "You have successfully enrolled for the event.".'<br><br><br>';
                
            }
            else
            {
                echo "Error: you have already enrolled or no such event ID exists".'<br><br><br>' ;
            }
        }
    }
    $conn->close();
    ?>

</div>

<!-- footer to the page-->
<div class = "navbar navbar-default navbar-fixed-bottom">
    <div class = "container">
        <div class = "navbar-text pull-left ">
             Copyright A Helping Hand 2017
        </div>
        <div class = "navbar-text pull-right ">
                <a href = "https://www.facebook.com/"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a>
                <a href = "https://www.twitter.com"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
                <a href = "https://www.plus.google.com"><i class="fa fa-google-plus fa-2x" aria-hidden="true"></i></a>
        </div>
    </div>
</div>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>