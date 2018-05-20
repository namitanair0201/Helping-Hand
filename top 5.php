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
    
    <title>Top 5 NGOs for the month</title>

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
                  <li> <a href = "enroll.php"> Event Finder </a> </li>
                  <li class = "active"> <a href = "top 5.php "> Top 5 NGOs for the month </a> </li>
              </ul>
            </li>
           <li class = "active"><a href = "about.php"> Contact </a></li>
           <li><a href = "response.php"> Comments </a></li>
           <li><a href = "logout.php"> Logout </a></li>
      </ul>
  </div> <!-- for the navbar-->
</div> <!--container-->
</nav>

<!-- Insert content here-->
<div class = "container">
    <p>
            Many NGOs and organizations for social change have mushroomed in India in the previous decade but very few have expanded
             on the basis of scale and the impact on the community. After all, it’s a herculean task to scrape through red tapism
              in the government to be able to establish an NGO in the first place.
            And considering the lack of transparency in transactions in our country, donations and sponsorships too are not easy 
            to receive too. In spite of all these hurdles, there are a few NGOs that have made substantial social impact in India until now.
    </p>
    <h2> SMILE Foundation</h2>
    <p>
            Formed in 2002, the Smile Foundation promotes the cause of education amongst underprivileged children. The people behind the Smile Foundation have envisaged children to be the building blocks of the future and hence have developed programs ranging from healthcare, education, livelihood, women empowerment to a system where privileged children can help their underprivileged counterparts.
            To cite a more familiar example, the award winning documentary “I am Kalam” that was based on a cause for children was supported by the Smile Foundation.
            Visit the website for more details:<a href = "https://www.smilefoundationindia.org"> Smile Foundation</a>
    </p>
    <h2>Nanhi Kali</h2>
    <p>
            Nanhi Kali is a sponsorship project that was started by Anand Mahindra in 1996, with the aim of breaking the vicious circle of poverty in India by educating the girl child. In partnership with 21 others NGOs that help the Nanhi Kali project to implement its cause, every sponsor gives a selected girl child the required academic and material support.
            You too, can sponsor the education of a girl child with just Rs. 2400 or Rs. 3600 a year and get regular reports regarding her progress. Did you know that the goal of Project Nanhi Kali is to support education for 1,00,000 girl children by this year end?
            Visit the website for more details:<a href = "https://www.nanhikali.org"> Nanhi Kali</a>
    </p>
    <h2>GiveIndia Foundation</h2>
    <p>Most of you might have heard about the ‘Joy of Giving Week’ celebrations that find national coverage in the Indian media each year. This week of giving is hosted by GiveIndia Foundation which doesn’t do hands-on grassroots community work, but holds a unique position amongst Indian NGOs because. Why? Because it acts as an online and offline donation platform for more than 200 Indian NGOs that have been scrutinized through the GiveIndia scanner for their transparency and credibility in operations.
        If you donate through GiveIndia, they will tell you exactly where your money has gone and follow it up with a feedback report. This organization for social change set up by an IIM-A alumnus has been the recipient of many awards for their work in creating accountability in the area of donations.
        Visit the website for more details:<a href = "https://www.giveindia.org"> Give India</a></p>
    <h2>Goonj</h2>
    <p>Listed by Forbes as India most powerful rural entrepreneur organization, Goonj has overtaken several milestones in adding value to the community in the past.
     With the famous “Vastra Samman” program, Goonj has mobilized recyclable and re-usable items like clothes, books, grains, exports surpluses and much more from urban to rural centers.
     With many donations points across the country, Goonj has been successfully channelizing more than more than 70,000 kgs of material every month, has a team of more than 300 volunteers and partners with 250 other organizations.
    Visit the website for more details:<a href = "https://www.goonj.org"> Goonj</a></p>
    <h2>HelpAge India</h2>
    <p>Set up all the way back in 1978, HelpAge India has been providing support to India’s abandoned, poor and isolated elderly folk. Amongst many other ancillary functions to support the grey population of India, HelpAge India plays a critical role in influencing policy change for the elderly in governments and providing emotional and material support to the abandoned elderly.
     From opening physiotherapy centers to sponsoring cataract operations, from providing help lines for the elderly to help them understand and fight for their rights, HelpAge India has come a long way. Did you know that this NGO also represents its cause in the National Planning Commission of India?
    Visit the website for more details: <a href = "https://www.helpageindia.org">HelpAge India</a></p>
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
