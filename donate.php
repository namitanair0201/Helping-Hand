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
    
    <title>Donate</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <!-- custom css-->
    <link href="css/home.css" rel="stylesheet">
    <script src="https://use.fontawesome.com/c896113aad.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

    <style>
        h2,h3,p{
            font-weight:bold;
        }
        p{
            font-style: lato, sans-serif;
            font-size: 16px;
        }
    </style>

  </head>
  
  <body>
        <div class = "container text-center">
                <h1>Donate</h1>
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
                <li class = "active"><a href = "donate.php"> Donate </a></li>
                <li class = "dropdown"><a href="#" data-toggle="dropdown" > Activities <b class= "caret"> </b>
                  <ul class = "dropdown-menu"> 
                      <li> <a href = "reg.php"> NGO registration process </a></li>
                      <li> <a href = "finder.php"> NGO Finder </a> </li>
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

<!--main body starts here-->
<div class = "container">
    <div class="row">
        <div class = "col-md-5">
            <img class = "thumbnail" src = "img/donate.jpg">
        </div>
        <div class = "col-md-3">
          
        </div>
      <div class = "col-md-4">
          <div class = "text-right">
            <h2> DONATE </h2>
            <h3> Your kindness can change lives</h3>
            <p> Please mail your cheques to <strong>601, Satara Plaza, Vashi </strong></p>
            <p> Else, you can drop us a mail at helpinghand@gmail.com. <br>Our representative will contact you and collect the donation as early as possible.</p>
            <p> We ensure that your kindness goes to those who need it.</p>
        </div>
      </div>  
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
