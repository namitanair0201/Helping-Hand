<!DOCTYPE html>
<?php
setcookie("user", "namita", time()+(86400*30));
setcookie("pass", "npl", time()+(86400*30));
session_start(); //starting the session
if(!isset($_SESSION['login_user']))
{
    header('location: index.php');
}
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <title>Comments for XSS</title>

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

      <a class= "navbar-brand" href="home.html"> Do good, feel good </a>
      <div class="navbar-collapse collapse"> 

          <ul class = "nav navbar-nav navbar-right">
              <li><a href="user.php"><?php echo 'Hi '.$_SESSION['name']; ?></a></li>
              <li><a href = "home.php"> Homepage </a></li>
              <li><a href = "donate.php"> Donate </a></li>
              <li class = "dropdown"><a href="#" data-toggle="dropdown" > Learn<b class= "caret"> </b>
                  <ul class = "dropdown-menu"> 
                      <li> <a href = "reg.php"> Register an NGO </a></li>
                      <li> <a href = "volinfo.php"> Becoming a volunteer </a> </li>
                      <li> <a href = "top 5.php"> Top 5 NGOs </a> </li>
                  </ul>
              </li>
               <li><a href = "about.php">About and Contact </a></li>
               <li class = "active"><a href = "response.php"> Comments </a></li>
               <li><a href = "logout.php"> Log Out </a></li>
          </ul>
      </div><!--for nav bar right-->
  </div><!--for container-->
</nav>
<div class = "container">
<!--THE PHP SCRIPT TO DEMONSTRATE CROSS SIDE SCRIPTING-->
<?php if( isset($_POST['content']))
{
    $c = $_POST['content'];
    $fp = fopen('comments.txt','a');
    fwrite($fp, $c. "<hr/>");
    fclose($fp);
}
echo nl2br(file_get_contents('comments.txt')); 
?>   

<h3> Comment here </h3>
<!-- the text area to accept comments-->
<form action = 'response.php' method = 'post'>
    <textarea name = 'content' row = '50' cols = '100'></textarea>
    <br/>
    <input type = 'submit' value = 'post' />
</form>
</div>

 <!-- footer to the page-->
 <div class = "navbar navbar-default navbar-fixed-bottom">
    <div class = "container">
        <div class = "navbar-text pull-left ">
             Copyright Namita Nair 2017
        </div>
        <div class = "navbar-text pull-right ">
                <a href = "#"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a>
                <a href = "#"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
                <a href = "#"><i class="fa fa-google-plus fa-2x" aria-hidden="true"></i></a>
        </div>
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</body>
</html>