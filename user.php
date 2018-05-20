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
    
    <title>My events</title>

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
            <li class = "active"><a href="user.php"><?php echo 'Hi '.$_SESSION['name']; ?></a></li>
            <li><a href = "home.php"> Homepage </a></li>
            <li><a href = "donate.php"> Donate </a></li>
            <li class = "dropdown"><a href="#" data-toggle="dropdown" > Activities <b class= "caret"> </b>
              <ul class = "dropdown-menu"> 
                  <li> <a href = "reg.php"> NGO registration process </a></li>
                  <li> <a href = "finder.php"> NGO Finder </a> </li>
                  <li> <a href = "enroll.php"> Event Finder </a> </li>
                  <li> <a href = "top 5.php "> Top 5 NGOs for the month </a> </li>
              </ul>
            </li>
           <li><a href = "about.php"> Contact </a></li>
           <li><a href = "logout.php"> Logout </a></li>
      </ul>
  </div> <!-- for the navbar-->
</div> <!--container-->
</nav>
<div class = "container">
<h3> Here is your list of enrolled events. </h3>
<?php     
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
    $mail = $_SESSION['email'];
    $sql = "select e_id, e_name, e_loc, e_date, ngo_name from event, vol_event where vol_event.vol_email = '$mail' and vol_event.event_id = event.e_id";
    $result = $conn->query($sql); 
    if ($result->num_rows > 0)
    {
        //displaying the table header
        echo '<div class = "table-responsive"><table class = "table"> <thead> <tr> <th> '."ID".' </th> <th> '." Event" . ' </th> <th>'. "Location".' </th> <th>'. "date". '</th> <th>'. "NGO". '</th> </tr> </thead> <tbody>';
        while($row = $result->fetch_assoc())
        {
            echo '<tr> <td> '.$row['e_id'].' </td> <td> '.$row['e_name']. ' </td> <td>'. $row['e_loc'].' </td> <td>'. $row['e_date']. '</td> <td>'. $row['ngo_name']. '</td> </tr>';
        }
        echo '</tbody></table></div>';
     }
     else 
     {
          echo "You haven't enrolled for any events yet.";
     }    
    ?>

    <!-- creating a form for deleting the event list-->
    <h3 class = "text- center"> Remove an event from calender: </h3><br>
    <form method = "POST" action = "user.php" >    
        <label for = "id"> Please enter the event ID to remove event </label><br>
        <input class = "form-control" type = "integer" name = "id" id = "id" placeholder = "Event ID"><br>
        <input type="submit" value="Remove" name="remove" class="btn btn-lg btn-primary btn-block">
    </form>
 <br><br>
    <!-- remove it from the database-->
    <?php
    if(isset($_POST['remove']))
    {  
        if(!empty($_POST['id']))
        {   
            $e = $_SESSION['email'];
            $p = $_POST['id'];
            $sql1 = "DELETE FROM vol_event WHERE vol_email = '$e' AND event_id = '$p' ";
            if ($conn->query($sql1) == TRUE)
            {
                echo "You have successfully removed the event from your calender. Please refresh to view the changes".'<br><br><br>';
            }
            else
            {
                echo "Error: Please check the ID you have provided.".'<br><br><br>' ;
            }
        }
    }
    $conn->close();
    ?>
    <br><br><br>
</div>

<!-- footer to the page-->
<div class = "navbar navbar-default navbar-fixed-bottom">
    <div class = "container">
        <div class = "navbar-text pull-left ">
             Copyright A Helping Hand 2017
        </div>
        <div class = "navbar-text pull-right ">
                <a href = "www.fb.com"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a>
                <a href = "www.twitter.com"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
                <a href = "www.plus.google.com"><i class="fa fa-google-plus fa-2x" aria-hidden="true"></i></a>
        </div>
    </div>
</div>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>