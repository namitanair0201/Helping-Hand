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
    
    <title>NGO Registration process</title>

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
                  <li  class = "active" > <a href = "reg.php"> NGO registration process </a></li>
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
<div class = "container">
        <p>In India non profit organisations/ public charitable organisations (NGO) can be registered as trusts, societies,
            or a private limited non profit company,under section-8 companies. Non-profit organisations in India <br>
            (a)exist independently of the state<br>
            (b)are self-governed by a board of trustees or ‘managing committee’/ governing council,
            comprising individuals who generally serve in a fiduciary capacity<br>
            (c)produce benefits for others, generally outside the membership of the organisation<br>
            (d)are ‘non-profit-making’, in as much as they are prohibited from distributing a monetary residual to their own members.
        </p>
</div>
<div class = "container">
<div class="type">
        <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">1.Trust</a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <p>A public charitable trust is usually floated when there is property involved, especially in terms of land and building.<br><br>
                <strong>Legislation :</strong> Different states in India have different Trusts Acts in force, which govern the trusts in the state;
                in the absence of a Trusts Act in any particular state or territory the general principles of the Indian Trusts Act 1882
                are applied.<br><br>
                    
               <strong>Main Instrument :</strong>The main instrument of any public charitable trust is the trust deed,
               wherein the aims and objects and mode of management (of the trust) should be enshrined. In every trust deed, the minimum and maximum number of trustees has to be specified.
                The trust deed should clearly spell out the aims and objects of the trust, how the trust should be managed, how other 
                trustees may be appointed or removed, etc. The trust deed should be signed by both the settlor/s and trustee/s in the presence of two 
                witnesses. The trust deed should be executed on non-judicial stamp paper, the value of which would depend on the valuation of the 
                trust property.<br><br>
    
                <strong>Trustees :</strong> A trust needs a minimum of two trustees; there is no upper limit to the number of trustees.
                The Board of Management comprises the trustees.<br><br>
                    
                <strong>Application for Registration :</strong>
                    The application for registration should be made to the official having jurisdiction over the region in which the trust is sought to
                    be registered.After providing details (in the form) regarding designation by which the public trust shall be known,
                    names of trustees, mode of succession, etc., the applicant has to affix a court fee to the form and pay a registration
                    fee which may range differently, depending on the location and value of the trust office and trust property.
                    The application form should be signed by the applicant before the registrar, sub-registrar, deputy registrar, regional officer
                    or superintendent of the regional office of the charity commissioner or authorised registrar.
                    The application form should be submitted, together with a copy of the trust deed.Two other documents which should be 
                    submitted at the time of making an application for registration are affidavit and consent letter. </p>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">2. Society</a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="panel-body">
                        <p>According to section 20 of the Societies Registration Act, 1860, the following societies can be registered under the Act:
                     ‘charitable societies, military orphan funds or societies established at the several presidencies of India,
                      societies established for the promotion of science, literature, or the fine arts, for instruction,
                       the diffusion of useful knowledge, the diffusion of political education, the foundation or maintenance of libraries or 
                       reading rooms for general use among the members or open to the public, or public museums and galleries of paintings 
                       and other works of art, collection of natural history, mechanical and philosophical inventions, instruments or designs.’
                       <br><br>
                
                <strong> Legislation : </strong> are registered under the Societies Registration Act, 1860, which is a federal act.
                 In certain states, which have a charity commissioner, the society must not only be registered under the Societies Registration
                  Act, but also, additionally, under the Bombay Public Trusts Act. <br><br>
                <strong> Main Instrument :</strong>
             The main instrument of any society is the memorandum of association and rules and regulations (no stamp paper required),
              wherein the aims and objects and mode of management (of the society) should be enshrined.<br><br>
                
               <strong>Trustees :</strong> A Society needs a minimum of seven managing committee members;
                there is no upper limit to the number managing committee members. The Board of Management is in the form of a
                 governing body or council or a managing or executive committee <br><br>
                
                <strong>Application for Registration :</strong> 
                Registration can be done either at the state level (i.e., in the office of the Registrar of Societies) or at the district level
                (in the office of the District Magistrate or the local office of the Registrar of Societies).
                (2)The procedure varies from state to state. However generally the application should be submitted together with:<br>
                 (a) memorandum of association and rules and regulations<br>
                 (b) consent letters of all the members of the managing committee <br>
                 (c) authority letter duly signed by all the members of the managing committee <br>
                 (d) an affidavit sworn by the president or secretary of the society on non-judicial stamp paper,
                  together with a court fee stamp<br> 
                (e) a declaration by the members of the managing committee that the funds of the society will be used only for the purpose of 
                furthering the aims and objects of the society. <br>            
                All the aforesaid documents which are required for the application for registration should be submitted in duplicate,
                 together with the required registration fee. Unlike the trust deed, the memorandum of association and rules and 
                 regulations need not be executed on stamp paper.</p>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">3. Company</a>
                    </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse">
                    <div class="panel-body">
                        <p>According to Section-8 of Indian Companies Act, 1956 (Old section 25(1)(a) and (b) of the Indian Companies Act, 1956,
                a section-25) a section 8 company can be established ‘for promoting commerce, art, science, religion, charity 
                or any other useful object’, provided the profits, if any, or other income is applied for promoting only the objects of the
                 company and no dividend is paid to its members.<br><br>
                <strong>Legislation:</strong>Section-8 companies are registered
                 under section 8 of Indian Companies Act 2013 (old section-25 of the Indian Companies Act, 1956).<br><br>
                 <strong>Main Instrument:</strong>For a section-8 company, the main instrument is a Memorandum and articles of association 
                 (no stamp paper required)<br><br>
                 <strong>Board Members:</strong> A section-8 Company needs a minimum of three members; there is no upper limit to the number of members.
                 The Board of Management is in the form of a Board of directors or managing committee.<br><br>
                 <strong>Application for registration: </strong><br>
                 1.An application has to be made for availability of name to the registrar of companies, which must be made in the prescribed form
                  no. 1A, together with a fee. It is advisable to suggest a choice of three other names by which the company will be called,
                   in case the first name which is proposed is not found acceptable by the registrar. <br>
                 
                 2.Once the availability of name is confirmed, an application should be made in writing to the regional director of the company 
                 law board. The application should be accompanied by the following documents: <br>
                 Three printed or typewritten copies of the memorandum and articles of association of the proposed company, duly signed by all the
                  promoters with full name, address and occupation. <br>
                 
                 A declaration by an advocate or a chartered accountant that the memorandum and articles of association have been drawn up in 
                 conformity with the provisions of the Act and that all the requirements of the Act and the rules made thereunder 
                 have been duly complied with, in respect of registration or matters incidental or supplementary thereto.<br>
                 
                 Three copies of a list of the names, addresses and occupations of the promoters (and where a firm is a promoter, of each partner 
                 in the firm), as well as of the members of the proposed board of directors, together with the names of companies, associations
                  and other institutions in which such promoters, partners and members of the proposed board of directors are directors or hold
                   responsible positions, if any, with description of the positions so held. <br>
                 
                 A statement showing in detail the assets (with the estimated values thereof) and the liabilities of the association, as on the
                  date of the application or within seven days of that date.<br> 
                 An estimate of the future annual income and expenditure of the proposed company, specifying the sources of the income and the
                  objects of the expenditure. <br>             
                 A statement giving a brief description of the work, if any, already done by the association and of the work proposed to be done
                  by it after registration, in pursuance of section-8. <br>             
                 A statement specifying briefly the grounds on which the application is made. <br>             
                 A declaration by each of the persons making the application that he/she is of sound mind, not an undischarged insolvent,
                  not convicted by a court for any offence and does not stand disqualified under section 203 of the Companies Act 1956, 
                  for appointment as a director.<br>
                 
                 3.The applicants must also furnish to the registrar of companies (of the state in which the registered office of the proposed
                  company is to be, or is situate) a copy of the application and each of the other documents that had been filed before the 
                  regional director of the company law board. <br>
                 
                 4.The applicants should also, within a week from the date of making the application to the regional director of the company law
                  board, publish a notice in the prescribed manner at least once in a newspaper in a principal language of the district in which
                   the registered office of the proposed company is to be situated or is situated and circulating in that district, and at leas
                   t once in an English newspaper circulating in that district. <br>
                 
                 5.The regional director may, after considering the objections, if any, received within 30 days from the date of publication
                  of the notice in the newspapers, and after consulting any authority, department or ministry, as he may, in his discretion,
                   decide, determine whether the licence should or should not be granted. <br>
                 
                 6.The regional director may also direct the company to insert in its memorandum, or in its articles, or in both, such conditions
                  of the licence as may be specified by him in this behalf.</p>
                    </div>
                </div>
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