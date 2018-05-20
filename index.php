<?php
session_start(); // Starting Session
if(isset($_SESSION['login_user'])){
header("location: home.php");
}
if(!isset($_SESSION['var1'])){
$_SESSION['var1']='';
}
if(!isset($_SESSION['error'])){
    $_SESSION['error']='';
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <title>Sign In OR Register</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <!-- custom css-->
    <link href="css/home.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
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
                <li class = "active"> SignUp/ Sign In </li>
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
               <li><a href = "response.php"> Comments </a></li>
            </ul>
      </div> <!-- for the navbar-->
  </div> <!--container-->
</nav>

<!--main body starts here-->
<div class = "container">
  <div class = "row">
  <div class = "col-md-6"> 
    <div class = "text-center"><h2> Registered user.</h2></div>
      

      <!-- form for signin -->
      <form class="form-signin" action="login.php" method="POST">        
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name= "username" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name = "password" id="inputPassword" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" name  = "submit" type="submit">Sign in</button>
        <h3> <?php echo $_SESSION['error']; ?></h3>
      </form>
    </div>
    
    <!-- form for register-->
    <div class = "col-md-6">
      <div class = "text-center"><h2> New User </h2></div>
      <form class = "form-signin" action = "register.php" method = "POST">
                      
                <label for = "name" class = "sr-only">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Name" required>
                <label for= "sel1" class = "sr-only">Location</label>
                <select required class="form-control" name="sel1" id="sel1" required>
                    <option value = '' selected disabled> Location </option>
                    <option>panvel</option>
                    <option>kharghar</option>
                    <option>seawoods</option>
                    <option>nerul</option>
                    <option>vashi</option>
                    <option>chembur</option>
                    <option>mulund</option>
                </select>

               <label for="email" class="sr-only">Email address</label>
              <input required type="email" name="email" id="email" class="form-control" placeholder="Email Address">
              <input required type="password" name="password" id="password" class="form-control" placeholder="Password">
              <input required type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirm Password">
          <input name = "reg" type="submit" value="Register" class="btn btn-lg btn-primary btn-block">
          <h3> <?php echo $_SESSION['var1']; ?></h3>
          </form>
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
