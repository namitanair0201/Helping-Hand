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
    
    <title>Homepage</title>

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
                <li class = "active"><a href = "home.php"> Homepage </a></li>
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
               <li><a href = "response.php"> Comments </a></li>
               <li><a href = "logout.php"> Logout </a></li>
          </ul>
      </div> <!-- for the navbar-->
  </div> <!--container-->
</nav>

<!-- carousel for the webpage-->
<div class = "container">
    <div id = "mycarousel" class = "carousel slide" data-ride = "carousel" data-interval= "7000">
        <ol class = "carousel-indicators">
            <li data-target = "#mycarousel" data-slide-to = "0" class = "active"></li>
            <li data-target = "#mycarousel" data-slide-to = "1"></li>
            <li data-target = "#mycarousel" data-slide-to = "2"></li>
        </ol>

        <div class = "carousel-inner">
            <div class = "item active">
                <a href = "top 5.php"><img src = "img/1.jpg"></a>
                <div class = "carousel-caption">
                    <h2> TOP 5 NGOs for the month </h2>
                </div>
            </div>
            <div class = "item">
                    <a href = "finder.php"><img src = "img/2.jpg"></a>
                    <div class = "carousel-caption">
                            <h2> NGO finder </h2>
                    </div>
            </div>
            <div class = "item">
                    <a href = "reg.php"><img src = "img/3.jpg"></a>
                    <div class = "carousel-caption">
                            <h2> NGO Registeration process </h2>
                    </div>
            </div>
        </div>
        <a class = "left carousel-control" href = "#mycarousel" role = "button" data-slide = "prev">
            <span class = "glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class = "right carousel-control" href = "#mycarousel" role = "button" data-slide = "next">
                <span class = "glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>    
</div>

    
    <!--adding some text-->
    <div class = "container">
    <div class = "row">
        <div class = "col-md-6">
            <h2>I am a Volunteer</h2>
            <p>Congratulations. You are a responsible member of the society.
                 Do you want to donate to an NGO but are worried that your money might not reach the right cause? Let nothing hold you back from doing your bit.
                Our website, " A Helping Hand", is dedicated in helping you to find and volunteer at an NGO that suits your interests.
                Choose from the <a href  = "top 5.php"> Top 5 NGOs for the month </a> or use our <a href = "finder.php">NGO finder </a> to find an NGO.
            </p>
            <a href = "#" class = "thumbnail">
                <img src = "img/vol.jpg" alt = "volunteer image">
            </a>
        </div>
        <div class = "col-md-6">
            <h2>I am an NGO</h2>
            <p> Are you trying to start your own NGO? We know how difficult it can be to wade through the whole process of registration and then acquiring
                the funds and volunteers for your tasks. We here at "A Helping Hand" aim to make the process easier by acting as a bridge between the volunteers and you.
                If you are just starting out, please go through our <a href = "reg.php"> Register an NGO </a> page and our <a href = "about.php"> About </a> 
             to register with us. </p>
        
        <a href = "#" class = "thumbnail">
                <img src = "img/NGO.jpg" alt = "NGO image">
        </a>
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

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>