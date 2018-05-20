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
    
    <title>Contact</title>

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
                <li><a href = "home.php"> Home </a></li>
                <li><a href = "donate.php"> Donate </a></li>
                <li class = "dropdown"><a href="#" data-toggle="dropdown" > Activities <b class= "caret"> </b>
                  <ul class = "dropdown-menu"> 
                      <li> <a href = "reg.php"> NGO registration process </a></li>
                      <li> <a href = "finder.php"> NGO Finder </a> </li>
                      <li> <a href = "enroll.php"> Event Finder </a> </li>
                      <li> <a href = "top 5.php "> Top 5 NGOs for the month </a> </li>
                  </ul>
                </li>
               <li class = "active"><a href = "about.php"> Contact </a></li>
               <li><a href = "response.php"> Comments </a></li>
               <li><a href = "logout.php"> Logout </a></li>
          </ul>
      </div> <!-- for the navbar-->
  </div> <!--container-->
</nav>

<div class = "container text-center">
    <p>
        <strong>"A Helping Hand"</strong> was born when we realized that there was a need to bridge the gap between the volunteers and NGOs.
        People have a desire to give back to society, but are wary of doing so; because of a lack of transparency in the system.
        We were inspired by the <em>Digital India</em> campaign. 
        Our website is designed with helping NGOs in the initial stages of registration, and helping them to understand 
        the difference between the various types. We aim to help volunteers find an NGO that they can contribute to, and spread awareness. 
        We hope that this site is able to help you.
    </p>  
    <p> You can reach us at <strong>helping.hand@gmail.com</strong> </p> 
</div>
<div class="row">
    <div class="col-sm-6">
      <a href="#demo" data-toggle="collapse">
        <div class = "text-center"><img src="img/namita.jpg" class="img-circle person" alt="Namita Nair"></div>
      </a>
      <div id="demo" class="collapse">
            <h2 class="text-center"><strong>Namita Nair</strong></h2>
            <h3 class = "text-center">Voracious Reader</h3><br><br><br>
      </div>
    </div>
    <div class="col-sm-6">
      <a href="#demo2" data-toggle="collapse">
            <div class = "text-center"><img src="img/rohan.png" class="img-circle person" alt="Rohan Keswani"></div>
      </a>
      <div id="demo2" class="collapse">
            <h2 class="text-center"><strong>Rohan Keswani</strong></h2>
            <h3 class = "text-center">Gaming Freak</h3> <br><br><br>
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