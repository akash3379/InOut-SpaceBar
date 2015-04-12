<?php
include("header.php");
include("database.php");
include("function.php");
if(isset($_SESSION["username"]))
{
	header("location:menu.php");
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
	
	<!-- for gallery
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
 

  -->
  
    <style type="text/css">
<!--
.style2 {font-size: 12%}
-->


<!--  for gallery
/*CSS Gallery Code*/


/*table, th, td {
    border: 0px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
}
*/
/*gallery
.carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 40%;
      margin: auto;
  }
*/
--> completes here


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
	  <li><a href="signin.php">Sign In</a></li>	
      <li class="has-dropdown">
        <a href="#">New?</a>
        <ul class="dropdown">
          <li><a href="about.php">ABOUT</a></li>
		  <li><a href="#">Help</a></li>
          
        </ul>
      </li>
	  <li class="active"><a href="signup.php">Sign Up</a></li>
    </ul>

    <!-- Left Nav Section -->
  </section>
</nav>
    <div class="row">
      <div class="large-12 columns">
        <h3><center>You think, we plan.</center></h3>
		
         <div align="right">
		 
		 Find Trips..  <a href="find.php"><input type="submit" name="sub" value="Find" class="opqbutton" /></a>
		</div>
      </div>
	 
    </div>
    
	<!--Image Gallery -->
	
	
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

    
	
	
	
        <!-- Grid Example -->


				
    <script src="foundation/js/vendor/jquery.js"></script>
    <script src="foundation/js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
