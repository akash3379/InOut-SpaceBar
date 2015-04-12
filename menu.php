<?php
include("header.php");
include("database.php");
include("function.php");
if(!login())
{
	header("location:index.php");
}
session_start();


?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Plan N Share | Welcome</title>
    <link rel="stylesheet" href="foundation/css/foundation.css" />
    <script src="foundation/js/vendor/modernizr.js"></script>
    <style type="text/css">
<!--
.style2 {font-size: 12%}
-->
    </style>
	
</head>
  <body>
  <nav class="top-bar" data-topbar role="navigation">
  <ul class="title-area">
    <li class="name">
      <h1><font color="#FFFFFF" size="+1"><a href="index.php">Plan N Share</a></font></h1>
    </li>
     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="index.php"><span>Menu</span></a></li>
  </ul>
  <section class="top-bar-section">
    <!-- Right Nav Section -->
    <ul class="right">
	  <li><a href="http://www.yatra.com/">PlanMyTrip</a></li>	
	   <li><a href="sharemytrip.php">ShareMyTrip</a></li>	
         <li class="has-dropdown">
        <a href="#" class="style1"><font size="3">Hi.<?php echo $_SESSION["username"]; ?></font></a>
        <ul class="dropdown">
		  <li><a href="profile.php">Profile</a></li>
		  <li><a href="myguide.php">MyGuide</a></li>
		  <li><a href="documents.php">MyDocuments</a></li>
          <li class="active"><a href="signout.php">Sign Out</a></li>
        </ul>
      </li>
    </ul>

    <!-- Left Nav Section -->
  </section>
</nav>
    <div class="row">
      <div class="large-12 columns">
        <h3><center>You think, we plan.</h3></centre></h3>
		
         <div align="right">Find Trips..
         <a href="find.php"><input type="submit" name="sub" value="Find" class="opqbutton" /></a>
		</div>
      </div>
	 
    </div>
    
    
        
        <h5><center>Today&rsquo;s Special Deals:</center></h5>

   <table style="width:80%" align="center">
  <tr>
    <th>Goa</th>
    <th>Kerala</th>		
    <th>Andaman</th>
  </tr>
  <tr>
    <td><a href="http://wikitravel.org/en/Goa"><img src="images/goa.jpg" alt="Mountain View" style="width:304px;height:228px"></a></td>
    <td><a href="http://wikitravel.org/en/Kerela"><img src="images/kerala.jpg" alt="Mountain View" style="width:304px;height:228px"></a></td>		
    <td><a href="http://wikitravel.org/en/Andaman"><img src="images/andaman.jpg" alt="Mountain View" style="width:304px;height:228px"></a></td>
  </tr>
  
</table>         
				
    <script src="foundation/js/vendor/jquery.js"></script>
    <script src="foundation/js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
